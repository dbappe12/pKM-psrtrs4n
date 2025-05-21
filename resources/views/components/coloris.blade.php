<div class="form-group">
   <label>{{ $label }}
      @if ($attributes['required'] == 'true')
          <span style="color: red">*</span>
      @endif
  </label>
   <input id="{{ $id }}" name="{{ $name }}" type="text" data-coloris {{ $attributes }}>
</div>