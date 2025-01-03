<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <x-sidebar.main.logo/>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <x-sidebar.main.user/>
      
      <!-- Sidebar Search Form -->
      <x-sidebar.main.search/>

      <!-- Sidebar Menu -->
      <x-sidebar.main.menu>
        <x-slot:active>{{ $active }}</x-slot:active>
      </x-sidebar.main.menu>
      
    </div>
  </aside>
