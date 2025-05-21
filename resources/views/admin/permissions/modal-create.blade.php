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

              <div id="hilang">
                     <x-select2 id="type" label="Type"
                        placeholder="Select Type">
                      
                        <option value="single">Single</option>
                        <option value="multiple">Multiple</option>
                       
                    </x-select2>
               </div>         


                       <div class="form-group">
                            <label>Name</label>
                            <div class="input-group">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name" id="name">
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Guard</label>
                            <div class="input-group">
                                <select class="form-control" name="guard_name" id="guard_name">
                                    <option value="web">web</option>
                                    <option value="api">api</option>
                                </select>
                                @error('guard_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
              <input hidden  id="id_per" name="id_per" value="" />
            
            </div>
                <div class="modal-footer">
                    <button type="submit" class="btn_submit btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
