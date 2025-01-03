@php
$options = [
  (object) ['route' => '/dashboard?active=table_simple', 'active' => 'table_simple', 'name' => 'Simple Tables'],
  (object) ['route' => '/dashboard?active=table_data', 'active' => 'table_data', 'name' => 'Data Tables'],
  (object) ['route' => '/dashboard?active=table_jsGrid', 'active' => 'table_jsGrid', 'name' => 'jsGrid'],
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
    <i class="nav-icon fas fa-table"></i>
    <p>
      Tables
      <i class="fas fa-angle-left right"></i>
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
    {{-- <li class="nav-item">
      <a href="{{('assets/pages/tables/simple.html')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Simple Tables</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{('assets/pages/tables/data.html')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>DataTables</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{('assets/pages/tables/jsgrid.html')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>jsGrid</p>
      </a>
    </li> --}}
  </ul>
</li>