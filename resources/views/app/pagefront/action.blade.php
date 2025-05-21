<style>
   .dropdown-menu>li>a:hover {
       background-color: rgba(127, 75, 223, 0.189);
   }
</style>
@canany(['update front', 'delete front'])
<div class="btn-group-vertical">
    <div class="btn-group">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
        </button>
        <ul class="dropdown-menu">
     
            <li><a data-url='{{ route('front.show', $data->id) }}'  href="{{ route('front.edit', $data->id) }}" class="btn_edit dropdown-item" >Ubah Data</a> </li>
            <div class="dropdown-divider"></div>
             <li><a data-hapus="{{ $data->judul }}"  data-url="{{ route('front.destroy', $data->id) }}" class="btn_hapus dropdown-item" href="#">Hapus
               <form hidden id="form-delete" action="{{ route('front.destroy', $data->id) }}" method="POST"> @csrf
                  @method('DELETE')
              </form>
            </a> </li>
      

        </ul>
    </div>
</div>
</td>
</tr>
@endcan

