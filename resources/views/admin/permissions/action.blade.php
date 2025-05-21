<div style=" gap:5px;" class="d-flex justify-content-center">
  
 
   <a  data-id="{{ $data->id }}" data-url='{{ route('permission.edit', $data->id) }}'  href="#"  class="btn btn-sm btn-primary btn_edit" ><i class="fas fa-pencil-alt"></i></a> </li>
            <div class="dropdown-divider"></div>
   <a data-hapus="{{ $data->name }}"  data-url="{{ route('permission.destroy', $data->id) }}" class="btn btn-sm btn-danger btn_hapus" href="#"><i class="fas fa-trash"></i>
               <form hidden id="form-delete" action="{{ route('permission.destroy', $data->id) }}" method="POST"> @csrf
               <input hidden  id="id" name="id" value="{{ $data->id }}" />
               @method('DELETE')
              </form>
     </a>

</div>
