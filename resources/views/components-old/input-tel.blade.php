<div class="form-group">
    <label>{{ $label }}
        @if ($required == 'true')
            <span style="color: red">*</span>
        @endif
    </label>
    <input id="{{ $id }}" class="form-control input" name="{{ $id }}" type='number' placeholder=""
        value=""  @if ($required == 'true') required @endif>
    <span class="text-danger error error-text {{ $id }}_err"></span>
</div>
