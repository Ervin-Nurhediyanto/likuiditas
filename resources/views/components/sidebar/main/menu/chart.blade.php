@php
$options = [
  (object) ['route' => '/dashboard?active=chart-js', 'active' => 'chart-js', 'name' => 'ChartJS'],
  (object) ['route' => '/dashboard?active=flot', 'active' => 'flot', 'name' => 'Flot'],
  (object) ['route' => '/dashboard?active=inline', 'active' => 'inline', 'name' => 'Inline'],
  (object) ['route' => '/dashboard?active=uPlot', 'active' => 'uPlot', 'name' => 'uPlot'],
];

$is_open = false;
$count = 0;
@endphp

@foreach ($options as $option)
  @if ($active == $option->active)
    @php $count += 1; @endphp
  @endif
@endforeach

@if ($count > 0)
  @php $is_open = true; @endphp
@endif

<li class="nav-item {{ $is_open == true ? 'menu-open' : ''}}">
  <a href="#" class="nav-link {{ $is_open == true ? 'active' : ''}}">
    <i class="nav-icon fas fa-chart-pie"></i>
    <p>
      Charts
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    @foreach ($options as $option)
    <li class="nav-item">
      <a href="{{ $option->route }}" class='nav-link {{ $active == $option->active ? 'active' : ''}}'>
        <i class="far fa-circle nav-icon"></i>
        <p>{{ $option->name }}</p>
      </a>
    </li>
    @endforeach
  </ul>
</li>