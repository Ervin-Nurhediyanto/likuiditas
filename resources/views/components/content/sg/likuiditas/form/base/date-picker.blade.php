<div class="form-group">
    <label for="{{ $label }}">{{ $title }}</label>
      <div class="input-group date" id="{{ $label }}" data-target-input="nearest">
          <input type="text" class="form-control datetimepicker-input" name="{{ $label }}" data-target="#{{ $label }}"/>
          <div class="input-group-append" data-target="#{{ $label }}" data-toggle="datetimepicker">
              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
          </div>
      </div>
  </div>