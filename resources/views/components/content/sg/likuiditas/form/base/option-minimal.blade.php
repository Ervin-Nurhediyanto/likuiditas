<div class="form-group">
  <label for="{{ $label }}">{{ $title }}</label>
  <select class="form-control select2 select2-warning" data-dropdown-css-class="select2-warning" style="width: 100%;" name="{{ $label }}" id="{{ $label }}">
    @foreach ($options as $option)
    <option value="{{ $option->name }}">{{ $option->name }}</option>
    @endforeach
  </select>
</div>