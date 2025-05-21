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
     
            <li>
                
            <a  data-id="{{ $data->id }}" data-url='{{ route('youtube.edit', $data->id) }}'  href="#" class="btn_edit dropdown-item" >Ubah Data</a> </li>
            <div class="dropdown-divider"></div>
             <li><a data-hapus="{{ $data->judul }}"  data-url="{{ route('youtube.destroy', $data->id) }}" class="btn_hapus dropdown-item" href="#">Hapus
               <form  id="form-delete" action="{{ route('youtube.destroy', $data->id) }}" method="POST"> @csrf
               <input hidden  id="id" name="id" value="{{ $data->id }}" />
               @method('DELETE')
              </form>
            </a> </li>
      

        </ul>
    </div>
</div>
</td>
</tr>
