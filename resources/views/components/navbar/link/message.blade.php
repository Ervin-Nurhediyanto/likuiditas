@php
$messages = [
  (object) ['name' => 'Brad Diesel', 'link' => '#', 'img' => 'assets/dist/img/user1-128x128.jpg', 'msg' => 'Call me whenever you can...', 'time' => '4 Hours Ago'],
  (object) ['name' => 'John Pierce', 'link' => '#', 'img' => 'assets/dist/img/user8-128x128.jpg', 'msg' => 'I got your message bro', 'time' => '4 Hours Ago'],
  (object) ['name' => 'Nora Silvester', 'link' => '#', 'img' => 'assets/dist/img/user3-128x128.jpg', 'msg' => 'The subject goes here', 'time' => '14 Hours Ago'],
];

@endphp

<li class="nav-item dropdown">
  <a class="nav-link" data-toggle="dropdown" href="#">
    <i class="far fa-comments"></i>
    @if (count($messages) > 0)
    <span class="badge badge-danger navbar-badge">{{ count($messages) }}</span>
    @endif
  </a>
  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
    @foreach ($messages as $message)
    <a href="#" class="dropdown-item">
      <!-- Message Start -->
      <div class="media">
        <img src="{{ ($message->img) }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
        <div class="media-body">
          <h3 class="dropdown-item-title">
            {{ $message->name }}
          </h3>
          <p class="text-sm">{{ $message->msg }}</p>
          <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i>{{ $message->time }}</p>
        </div>
      </div>
      <!-- Message End -->
    </a>
    <div class="dropdown-divider"></div>
    @endforeach
    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
  </div>
</li>