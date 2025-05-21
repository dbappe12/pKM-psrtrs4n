<style>

</style>
<div class="modal fade" id="modal_create">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Tambah transportir Baru</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form_tambah">
                @csrf
            <div class="modal-body">
               

                <x-select2 id="type" label="Type Menu" required="" placeholder="Type Menu">
                      @foreach ($type as $item)
                            <option value="{{ $item->type }}">{{ $item->type }}</option>
                     @endforeach
                </x-select2>
                    <x-select2 id="role" name="role[]" label="Hak Akses"
                        placeholder="Select Category" multiple>
                        @foreach($role as $category)
                        <option value="{{ $category->name }}">{{ $category->name }}</option>
                        @endforeach
                        <!-- <option value="superadmin">superadmin</option>
                        <option value="admin">admin</option>
                        <option value="operator">operator</option> -->
                    </x-select2>
                   
                
                    <x-input id='judul' label='judul' required=true  />
                    <x-input  class="form-control input"  id='url' label='Url' required=true />
                    <x-input  class="form-control input"  id='icon' label='Icon' required=false /> 
                    <input hidden  id="id" name="id" value="" />
            </div>
                <div class="modal-footer">
                    <button type="submit" class="btn_submit btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
