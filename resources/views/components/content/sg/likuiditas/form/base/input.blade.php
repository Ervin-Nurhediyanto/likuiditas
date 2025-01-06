<div class="mb-3">
  <label for="{{ $label }}">{{ $title }}</label>
  <input type="text" class="form-control @error('{{ $label }}') is-invalid @enderror"
         name="{{ $label }}" required>

  <!-- error message untuk name -->
  @error('{{ $label }}')
  <div class="invalid-feedback">
      {{ $message }}
  </div>
  @enderror
</div>