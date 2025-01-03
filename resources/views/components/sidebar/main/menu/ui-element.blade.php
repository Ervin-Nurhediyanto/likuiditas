@php
$options = [
  (object) ['route' => '/dashboard?active=ui_general', 'active' => 'ui_general', 'name' => 'General'],
  (object) ['route' => '/dashboard?active=ui_icon', 'active' => 'ui_icon', 'name' => 'Icons'],
  (object) ['route' => '/dashboard?active=ui_button', 'active' => 'ui_button', 'name' => 'Buttons'],
  (object) ['route' => '/dashboard?active=ui_slider', 'active' => 'ui_slider', 'name' => 'Sliders'],
  (object) ['route' => '/dashboard?active=ui_modal_alert', 'active' => 'ui_modal_alert', 'name' => 'Modals & Alerts'],
  (object) ['route' => '/dashboard?active=ui_navbar_tab', 'active' => 'ui_navbar_tab', 'name' => 'Navbar & Tabs'],
  (object) ['route' => '/dashboard?active=ui_timeline', 'active' => 'ui_timeline', 'name' => 'Timeline'],
  (object) ['route' => '/dashboard?active=ui_ribbon', 'active' => 'ui_ribbon', 'name' => 'Ribbons'],
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
    <i class="nav-icon fas fa-tree"></i>
    <p>
      UI Elements
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
      <a href="{{('assets/pages/UI/general.html')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>General</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{('assets/pages/UI/icons.html')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Icons</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{('assets/pages/UI/buttons.html')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Buttons</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="pages/UI/sliders.html" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Sliders</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="pages/UI/modals.html" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Modals & Alerts</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="pages/UI/navbar.html" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Navbar & Tabs</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="pages/UI/timeline.html" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Timeline</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="pages/UI/ribbons.html" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Ribbons</p>
      </a>
    </li> --}}
  </ul>
</li>