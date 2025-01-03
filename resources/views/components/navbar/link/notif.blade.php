@php
$notifications = [
  (object) ['name' => 'new message', 'data' => [
    (object) ['name' => 'blablalba', 'msg' => 'ini pesan'],
    (object) ['name' => 'blablalba', 'msg' => 'ini pesan'],
    (object) ['name' => 'blablalba', 'msg' => 'ini pesan'],
  ]],
  (object) ['name' => 'friend requests', 'data' => [
    (object) ['name' => 'blablalba', 'msg' => 'ini pesan'],
    (object) ['name' => 'blablalba', 'msg' => 'ini pesan'],
  ]],
  (object) ['name' => 'new reports', 'data' => [
    (object) ['name' => 'blablalba', 'msg' => 'ini pesan'],
    (object) ['name' => 'blablalba', 'msg' => 'ini pesan'],
    (object) ['name' => 'blablalba', 'msg' => 'ini pesan'],
  ]],
];

$qt_msg = count($notifications[0]->data);
$qt_frn = count($notifications[1]->data);
$qt_rep = count($notifications[2]->data);
$qt_notif = $qt_msg + $qt_frn + $qt_rep;
@endphp

<li class="nav-item dropdown">
  <a class="nav-link" data-toggle="dropdown" href="#">
    <i class="far fa-bell"></i>
    @if ($qt_notif > 0)
    <span class="badge badge-warning navbar-badge">{{ $qt_notif }}</span>
    @endif
  </a>
  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
    <span class="dropdown-item dropdown-header">{{ $qt_notif }} Notifications</span>
    <div class="dropdown-divider"></div>
    <a href="#" class="dropdown-item">
      <i class="fas fa-envelope mr-2"></i> {{ $qt_msg }} {{ $notifications[0]->name }}
    </a>
    <div class="dropdown-divider"></div>
    <a href="#" class="dropdown-item">
      <i class="fas fa-users mr-2"></i> {{ $qt_frn }} {{ $notifications[1]->name }}
    </a>
    <div class="dropdown-divider"></div>
    <a href="#" class="dropdown-item">
      <i class="fas fa-file mr-2"></i> {{ $qt_rep }} {{ $notifications[2]->name }}
    </a>
    <div class="dropdown-divider"></div>
    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
  </div>
</li>