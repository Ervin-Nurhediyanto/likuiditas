<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Kanban Board</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="{{('assets/plugins/ekko-lightbox/ekko-lightbox.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{('assets/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">

  <x-layoutes.dashboard>
    <x-slot:active>{{ $active }}</x-slot:active>
    <x-content.example.kanban/>
  </x-layoutes.dashboard>

<!-- jQuery -->
<script src="{{('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Ekko Lightbox -->
<script src="{{('assets/plugins/ekko-lightbox/ekko-lightbox.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{('assets/dist/js/adminlte.min.js')}}"></script>
<!-- Filterizr-->
<script src="{{('assets/plugins/filterizr/jquery.filterizr.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{('assets/dist/js/demo.js')}}"></script>
<!-- Page specific script -->
<script>
  $(function () {

  })
</script>
</body>
</html>
