<div class="form-group">
   <label>{{ $label }}
      @if ($attributes['required'] == 'true')
          <span style="color: red">*</span>
      @endif
  </label>
   <div class="input">
      {{ $slot }}
   </div>
   <span class="text-danger error-text {{ $id ?? '' }}_err"></span>
</div>