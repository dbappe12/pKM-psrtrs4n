<div class="form-group">
   <label>{{ $label }}</label>
   <div class="input">
       <textarea id="{{ $id }}" name="{{ $name }}" spellcheck="false"> 
         {{ $slot }}
    </textarea>
    <span class="text-danger error-text {{ $id }}_err"></span>
   </div>
 
</div>