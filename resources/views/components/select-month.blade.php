<div class="form-group">
    <label>{{ $label }}
        @if ($attributes['required'] == 'true')
            <span style="color: red">*</span>
        @endif
    </label>
    <select id="{{ $id }}" class="select2 select2-{{ $id }} form-control select2bs4" name="{{ $name }}"
        data-placeholder="-- {{ $attributes['placeholder'] }} --" style="width: 100%;" {{ $attributes }}>
        <option></option>
        <option value="1">Januari</option>
        <option value="2">Februari</option>
        <option value="3">Maret</option>
        <option value="4">April</option>
        <option value="5">Mei</option>
        <option value="6">Juni</option>
        <option value="7">Juli</option>
        <option value="8">Agustus</option>
        <option value="9">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">Desember</option>
    </select>
    <span class="text-danger error-text {{ $id }}_err"></span>
</div>
