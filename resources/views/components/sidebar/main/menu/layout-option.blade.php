@php
$options = [
  (object) ['route' => '/dashboard?active=top_navigation', 'active' => 'top_navigation', 'name' => 'Top Navigation'],
  (object) ['route' => '/dashboard?active=top_navigation_sidebar', 'active' => 'top_navigation_sidebar', 'name' => 'Top Navigation + Sidebar'],
  (object) ['route' => '/dashboard?active=boxed', 'active' => 'boxed', 'name' => 'Boxed'],
  (object) ['route' => '/dashboard?active=fixed_sidebar', 'active' => 'fixed_sidebar', 'name' => 'Fixed Sidebar'],
  (object) ['route' => '/dashboard?active=fixed_sidebar_custom_area', 'active' => 'fixed_sidebar_custom_area', 'name' => 'Fixed Sidebar', 'subname' => '+ Custom Area'],
  (object) ['route' => '/dashboard?active=fixed_navbar', 'active' => 'fixed_navbar', 'name' => 'Fixed Navbar'],
  (object) ['route' => '/dashboard?active=fixed_footer', 'active' => 'fixed_footer', 'name' => 'Fixed Footer'],
  (object) ['route' => '/dashboard?active=collapsed_sidebar', 'active' => 'collapsed_sidebar', 'name' => 'Collapsed Sidebar'],
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
    <i class="nav-icon fas fa-copy"></i>
    <p>
      Layout Options
      <i class="fas fa-angle-left right"></i>
      <span class="badge badge-info right">6</span>
    </p>
  </a>
  <ul class="nav nav-treeview">

    @foreach ($options as $option)
    <li class="nav-item">
      <a href="{{ $option->route }}" class='nav-link {{ $active == $option->active ? 'active' : ''}}'>
        <i class="far fa-circle nav-icon"></i>
        <p>{{ $option->name }}
          @if (isset($option->subname))<small>{{ $option->subname }}</small>@endif
        </p>
      </a>
    </li>
    @endforeach

    {{-- <li class="nav-item">
      <a href="{{('assets/pages/layout/top-nav.html')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Top Navigation</p>
      </a>
    </li> --}}
    {{-- <li class="nav-item">
      <a href="{{('assets/pages/layout/top-nav-sidebar.html')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Top Navigation + Sidebar</p>
      </a>
    </li> --}}
    {{-- <li class="nav-item">
      <a href="{{('assets/pages/layout/boxed.html')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Boxed</p>
      </a>
    </li> --}}
    {{-- <li class="nav-item">
      <a href="{{('assets/pages/layout/fixed-sidebar.html')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Fixed Sidebar</p>
      </a>
    </li> --}}
    {{-- <li class="nav-item">
      <a href="{{('assets/pages/layout/fixed-sidebar-custom.html')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Fixed Sidebar <small>+ Custom Area</small></p>
      </a>
    </li> --}}
    {{-- <li class="nav-item">
      <a href="{{('assets/pages/layout/fixed-topnav.html')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Fixed Navbar</p>
      </a>
    </li> --}}
    {{-- <li class="nav-item">
      <a href="{{('assets/pages/layout/fixed-footer.html')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Fixed Footer</p>
      </a>
    </li> --}}
    {{-- <li class="nav-item">
      <a href="{{('assets/pages/layout/collapsed-sidebar.html')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Collapsed Sidebar</p>
      </a>
    </li> --}}
  </ul>
</li>