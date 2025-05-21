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
                    <x-input id='nama' label='Nama Anggaran' required=true  />
                    <x-input id='url' label='URL' required=true hint="URL" />
                    <x-select2 id="tahun" label="Tahun" required="false"
                      placeholder="Tahun">
                        @foreach ($json as $item)
                          <option value="{{ $item->value }}">{{ $item->text }}</option>
                        @endforeach
                    </x-select2>
                    <input    id="id" name="id" value="" />
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn_submit btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
