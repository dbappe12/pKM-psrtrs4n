<x-modal title="Create New Role" id="modal_create_edit" size="md">
   <form id="form_create_edit">
      @csrf
      <div class="modal-body">
      
          <x-input id='name' placeholder='Role Name' label='Group Name' 
          required='true' />
          <x-input id='desc' placeholder='Role Description' label='Desc' 
          required='true' />
          <div class="form-group">
            <label>Guard</label>
            <select name="guard_name" class="form-control">
                <option value="web">web</option>
                <option value="api">api</option>
            </select>
        </div>
      </div>
      <div class="modal-footer">
         <button data-dismiss="modal" type="button" class="btn btn-secondary">Cancel</button>
         <button type="submit" class="btn_submit btn btn-primary">Save</button>
     </div>
  </form>
</x-modal>

