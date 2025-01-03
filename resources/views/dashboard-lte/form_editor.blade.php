<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Editors</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{('assets/dist/css/adminlte.min.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{('assets/plugins/summernote/summernote-bs4.min.css')}}">
  <!-- CodeMirror -->
  <link rel="stylesheet" href="{{('assets/plugins/codemirror/codemirror.css')}}">
  <link rel="stylesheet" href="{{('assets/plugins/codemirror/theme/monokai.css')}}">
  <!-- SimpleMDE -->
  <link rel="stylesheet" href="{{('assets/plugins/simplemde/simplemde.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">

  <x-layoutes.dashboard>
    <x-slot:active>{{ $active }}</x-slot:active>
    <x-content.form.editor/>
  </x-layoutes.dashboard>

<!-- jQuery -->
<script src="{{('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{('assets/dist/js/adminlte.min.js')}}"></script>
<!-- Summernote -->
<script src="{{('assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- CodeMirror -->
<script src="{{('assets/plugins/codemirror/codemirror.js')}}"></script>
<script src="{{('assets/plugins/codemirror/mode/css/css.js')}}"></script>
<script src="{{('assets/plugins/codemirror/mode/xml/xml.js')}}"></script>
<script src="{{('assets/plugins/codemirror/mode/htmlmixed/htmlmixed.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{('assets/dist/js/demo.js')}}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
</body>
</html>
