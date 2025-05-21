<div class="form-group">
   <label>{{ $label }}
      @if ($attributes['required'] == 'true')
          <span style="color: red">*</span>
      @endif
  </label>
    <textarea spellcheck="false" id="{{ $id }}" name="{{ $name }}" class="form-control" rows="3"
       {{ $attributes }}> {{ $slot }}</textarea>
       <span class="text-danger error-text {{ $id }}_err"></span>
</div>
