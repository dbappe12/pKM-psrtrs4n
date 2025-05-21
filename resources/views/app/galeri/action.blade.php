<style>
   .dropdown-menu>li>a:hover {
       background-color: rgba(127, 75, 223, 0.189);
   }
</style>
<div class="btn-group-vertical">
    <div class="btn-group">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
        </button>
        <ul class="dropdown-menu">
       @can('update galeri')
            <li><a data-url='{{ route('galeri.edit', $data->id) }}'  href="#" class="btn_edit dropdown-item" >Ubah Data</a> </li>
            <div class="dropdown-divider"></div>
       @endcan
         
       @can('delete galeri')     
             <li><a data-hapus="{{ $data->judul }}"  data-url="{{ route('galeri.destroy', $data->id) }}" class="btn_hapus dropdown-item" href="#">Hapus
               <form hidden id="form-delete" action="{{ route('galeri.destroy', $data->id) }}" method="POST"> @csrf
                  @method('DELETE')
              </form>
            </a> </li>
       @endcan

        </ul>
    </div>
</div>
</td>
</tr>
