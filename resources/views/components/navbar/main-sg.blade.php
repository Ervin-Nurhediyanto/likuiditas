@php
$options = [
  // (object) ['name' => 'Home', 'link' => '#'],
  // (object) ['name' => 'Contact', 'link' => '#'],
];

@endphp

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <ul class="navbar-nav">
    <x-navbar.link.bars/>
    @foreach ($options as $option)
      <x-navbar.link.menu :option='$option'/>
    @endforeach
  </ul>
</nav>