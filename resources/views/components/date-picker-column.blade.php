<div class="row" {{ $attributes }}>
    <div class="col-12">
        <label>{{ $label }}
            @if ($attributes['required'] == 'true')
                <span style="color: red">*</span>
            @endif
        </label>
    </div>
    <div class="col-12 border p-3 mb-2" style="background: #f5f5f561">
        <div class="row ">
         <div class="col-sm-12 col-lg-6">
           {{ $date_start }}
         </div>
         <div class="col-sm-12 col-lg-6">
           {{ $date_end }}
         </div>
        </div>
        <span class="text-danger error-text {{ $id ?? '' }}_err"></span>
    </div>
   
</div>
