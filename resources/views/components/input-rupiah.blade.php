<div class="form-group">
   <label>{{ $label }}
      @if ($attributes['required'] == 'true')
          <span style="color: red">*</span>
      @endif
  </label>
    <div class="input-group ">
        <div class="input-group-prepend">
            <span class="input-group-text">Rp</span>
        </div>
        <input id="{{ $id }}" name="{{ $name }}" type="text" class="form-control input rupiah"
            placeholder="0"  autocomplete="off" {{ $attributes }}>
      
    </div>
    <span class="text-danger error error-text {{ $id }}_err"></span>
</div>
