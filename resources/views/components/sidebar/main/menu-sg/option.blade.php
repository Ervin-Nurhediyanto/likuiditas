@php
$options = [
  (object) ['route' => '/dashboard?active=dashboard_v1', 'active' => 'dashboard_v1', 'name' => 'Status'],
  // (object) ['route' => '/dashboard?active=dashboard_v2', 'active' => 'dashboard_v2', 'name' => 'Input'],
  // (object) ['route' => '/dashboard?active=dashboard_v3', 'active' => 'dashboard_v3', 'name' => 'Update'],
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
    <i class="nav-icon fas fa-tachometer-alt"></i>
    <p>
      Dashboard
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