@php
$options = [
  (object) ['route' => '/dashboard?active=form_general_element', 'active' => 'form_general_element', 'name' => 'General Elements'],
  (object) ['route' => '/dashboard?active=form_advanced_element', 'active' => 'form_advanced_element', 'name' => 'Advanced Elements'],
  (object) ['route' => '/dashboard?active=form_editor', 'active' => 'form_editor', 'name' => 'Editors'],
  (object) ['route' => '/dashboard?active=form_validation', 'active' => 'form_validation', 'name' => 'Validation'],
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
    <i class="nav-icon fas fa-edit"></i>
    <p>
      Forms
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
  </ul>
</li>