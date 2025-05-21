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
                <input hidden   id="id_skpd" name="id_skpd" value="" />
                <x-input id='judul' label='Judul' required=true  />
                <x-input id='link' label='Link' required=true  />
                <x-input id='opd' label='OPD' required=true  />
                <x-textarea id='ket' label='Keterangan' required=true hint="Keterangan" />
               
                <!-- <x-filepond id="file" label="uploud Foto"  onchange="preview()"  required="true" info="Format file (jpg dan png, Max 5 MB)" max="4mb"  />   -->
                <x-filepond required=true id="file" name="file" label='Foto' info='( Format File JPG/PNG , Maks 5 MB,Ukuran 100x100)'
                        accept="image/jpeg, image/png" />
                <!-- <x-viewfoto name="foto" id="foto" src="" ></x-viewfoto> -->
              
             
              
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn_submit btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
