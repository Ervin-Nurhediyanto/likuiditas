@php
$options = [
  (object) ['route' => '/dashboard?active=mailbox_inbox', 'active' => 'mailbox_inbox', 'name' => 'Inbox'],
  (object) ['route' => '/dashboard?active=mailbox_compose', 'active' => 'mailbox_compose', 'name' => 'Compose'],
  (object) ['route' => '/dashboard?active=mailbox_read', 'active' => 'mailbox_read', 'name' => 'Read'],
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
    <i class="nav-icon far fa-envelope"></i>
    <p>
      Mailbox
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
      <a href="{{('assets/pages/mailbox/mailbox.html')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Inbox</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{('assets/pages/mailbox/compose.html')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Compose</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{('assets/pages/mailbox/read-mail.html')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Read</p>
      </a>
    </li> --}}
  </ul>
</li>