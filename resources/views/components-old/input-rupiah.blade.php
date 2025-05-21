<div class="form-group">
    <label>{{ $label }}
        @if ($required == 'true')
            <span style="color: red">*</span> <span id="{{ $id }}-info"></span>
        @endif
    </label>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Rp</span>
        </div>
        <input id="{{ $id }}" type="text" class="form-control input rupiah" name="{{ $id }}"
            placeholder="0"  autocomplete="off"  @if ($required == 'true') required @endif>
     
    </div>
</div>
