<div class="wrapper">
  <x-preloader/>
  <x-navbar.main/>
  <x-sidebar.main>
    <x-slot:active>{{ $active }}</x-slot:active>
  </x-sidebar.main>
  <div>{{ $slot }}</div>
  <x-footer.main/>
  <x-sidebar.control/>
</div>