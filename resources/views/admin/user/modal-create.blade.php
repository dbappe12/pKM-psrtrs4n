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
                <x-input id='username'  name='username' placeholder='Username Login'  label='Username' required='true' />
                                    <x-input id='nama' name='nama' placeholder='Nama Lengkap user'  label='Nama Lengkap' required='true'  />
                                    <x-input-number id='kontak' name='kontak'  label='Kontak' required='true'  placeholder="Kontak User" />
                                    <x-input id='alamat' name='alamat' placeholder='Alamat'  label='Alamat' required='true' />
                                   
                                    <x-select2 id="role" name='role' label='Select Role' required="true" placeholder='Select Role User'>
                                       @foreach ($roles as $item)
                                           <option value='{{ $item->name }}'>{{ $item->name }}</option>
                                       @endforeach
                                   </x-select2>
                                   <x-input-password name='password' label='Password' id="password"
                                        placeholder='Password '></x-input-password>
                                        <input hidden  id="id" name="id" value="" />
                    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn_submit btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
