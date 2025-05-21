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
     
            <li><a data-url='{{ route('menu.edit', $data->id) }}'  href="#" class="btn_edit dropdown-item" >Ubah Data</a> </li>
            <div class="dropdown-divider"></div>
             <li><a data-hapus="{{ $data->id }}"  data-url="{{ route('menu.destroy', $data->id) }}" class="btn_hapus dropdown-item" href="#">Hapus
               <form hidden id="form-delete" action="{{ route('menu.destroy', $data->id) }}" method="POST"> @csrf
                  @method('DELETE')
              </form>
            </a> </li>
      

        </ul>
    </div>
</div>
</td>
</tr>
