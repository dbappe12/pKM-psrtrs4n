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
                    <x-input-tel id='nip' label='Nip' required=true  />
                    <x-input id='nama' label='Nama' required=true />
                    <x-datepicker id='tanggal_lahir' label='Tanggal Lahir' required="true" />
                    <!-- <x-select2 id="jenis_kelamin" label="Jenis Kelamin" required="false"
                                            placeholder="Jenis Kelamin">
                                            @foreach ($jns_kelamin as $item)
                                                <option value="{{ $item->value }}">{{ $item->text }}</option>
                                            @endforeach
                                        </x-select2> -->
                     <x-check-box label="Radio Button Select">
                        <x-checkbox.item id="radio_1" name="jenis_kelamin" text="Laki-Laki" type="radio" value="Laki-Laki" color="primary">
                        </x-checkbox.item>
                        <x-checkbox.item id="radio_2" name="jenis_kelamin" text="Perempuan" type="radio" value="Perempuan" color="primary">
                     </x-checkbox.item>
                    </x-check-box>
                    <x-textarea id='alamat' label='Alamat' required=true hint="Alamat" >     </x-textarea>
                    <x-filepond id="file" label="uploud Foto"  required="true" info="Format file (jpg dan png, Max 5 MB)" max="4mb"  />  
                    <input hidden  id="id" name="id" value="" />
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn_submit btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
