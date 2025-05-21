<style>

</style>
<div class="modal fade" id="modal_create">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Tambah Foto Baru</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form_tambah">
                @csrf
                <div class="modal-body">
                <!-- <x-filepond id="file" label="uploud Foto"  onchange="preview()"  required="true" info="Format file (jpg dan png, Max 5 MB)" max="4mb"  />   -->
                <x-filepond id="file" label='File ade' info='( Format File JPG/PNG , Maks 5 MB)'
                        accept="image/jpeg, image/png" />
                <!-- <x-viewfoto name="foto" id="foto" src="" ></x-viewfoto> -->
                <x-textarea id='keterangan' label='Keterangan' required=true hint="Keterangan" >     </x-textarea>   
                <input hidden  id="id" name="id" value="" />
                <x-summernote id="summernote" name="body" label="Summenote Editor" />
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn_submit btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
