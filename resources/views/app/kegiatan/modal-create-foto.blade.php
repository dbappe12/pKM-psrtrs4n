<style>

</style>
<div class="modal fade" id="modal_create">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Tambah Kegiatan Baru</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form_tambah">
                @csrf
                <div class="modal-body">
                    <x-input id='nama' label='Nama Kegiatan' required=true  />
                    <x-filepond  name="foto" id="foto" label="uploud Foto"  required="true" info="Format file (jpg dan png, Max 5 MB)" max="4mb"  /> 
                    <input hidden  id="id" name="id" value="" />
                    <input hidden   id="kegiatan_id" name="kegiatan_id" value="{{$kegiatan_id}}"  />
                    <input hidden   id="jenis" name="jenis" value="foto" />
                    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn_submit btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
