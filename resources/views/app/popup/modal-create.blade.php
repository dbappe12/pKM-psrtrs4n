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
                <x-filepond  required=true  name="file" id="file" label='File ade' info='( Format File JPG/PNG , Maks 5 MB)'
                        accept="image/jpeg, image/png" />
                <!-- <x-viewfoto name="foto" id="foto" src="" ></x-viewfoto> -->
                <input hidden  id="id" name="id" value="" />
                <x-input id='keterangan' label='Judul' required=true hint="keterangan" >     </x-textarea>
                <x-check-box label="Status POPUP">
                        <x-checkbox.item id="radio_1" name="status" text="Aktif" type="radio" value="YA" color="primary">
                        </x-checkbox.item>
                        <x-checkbox.item id="radio_2" name="status" text="Tidak Akatif" type="radio" value="TIDAK" color="primary">
                     </x-checkbox.item>
                    </x-check-box>
            
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn_submit btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
