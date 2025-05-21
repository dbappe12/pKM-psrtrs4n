<div class="form-group">
    <label>{{ $label }}
        @if ($required == 'true')
            <span style="color: red">*</span>
        @endif
    </label>
    <input id="{{ $id }}" type="radio" class="form-control input" name="{{ $id }}" placeholder="aSasa"
        value="LAKI"  @if ($required == 'true') required @endif>
        <input id="{{ $id }}" type="radio" class="form-control input" name="{{ $id }}" placeholder=""
        value="LAKI"  @if ($required == 'true') required @endif>
    <span class="text-danger error error-text {{ $id }}_err"></span>
</div>
