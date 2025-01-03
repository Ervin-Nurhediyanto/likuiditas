<aside class="main-sidebar sidebar-dark-warning elevation-4">
  <!-- Brand Logo -->
  <x-sidebar.main.logo/>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <x-sidebar.main.user/>

    <!-- Sidebar Menu -->
    <x-sidebar.main.menu-sg>
      <x-slot:active>{{ $active }}</x-slot:active>
    </x-sidebar.main.menu-sg>
    
  </div>
</aside>
