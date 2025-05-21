<div class="form-group">
   <label>{{ $label }}
       @if ($attributes['required'] == 'true')
           <span style="color: red">*</span>
       @endif
   </label>
   <select id="{{ $id }}" class="select2 select2-{{ $id }} form-control select2bs4" name="{{ $name }}"
       data-placeholder="-- {{ $attributes['placeholder'] }} --" style="width: 100%;" {{ $attributes }} >
       <option></option>
       <option value="senin">Senin</option>
       <option value="selasa">Selasa</option>
       <option value="rabu">Rabu</option>
       <option value="kamis">Kamis</option>
       <option value="jumat">Jumat</option>
       <option value="sabtu">Sabtu</option>
       <option value="minggu">Minggu</option>
   </select>
   <span class="text-danger error-text {{ $id }}_err"></span>
</div>
