

<div class="form-group">
        <label>{{ $label }}
            @if ($attributes['required'] == 'true')
                <span style="color: red">*</span>
            @endif
            <span class="file_info" style="font-size: 10px !important; color: #737373!important; font-style: italic;">
                {{ $info }} </span>
        </label>
       
            <input type="file" class="filepond" name="{{ $name }}" id="{{ $id }}"
                {{ $attributes }} />

        <span class="text-danger error-text {{ $id ?? '' }}_err"></span>
    </div>

