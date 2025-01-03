@php
$options = [
  (object) ['name' => 'Home', 'link' => 'index3.html'],
  (object) ['name' => 'Contact', 'link' => '#'],
];

@endphp

<ul class="navbar-nav">
  <x-navbar.link.bars/>
  @foreach ($options as $option)
    <x-navbar.link.menu :option='$option'/>
  @endforeach
</ul>