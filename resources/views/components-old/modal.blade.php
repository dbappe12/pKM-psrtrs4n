<style>
   .modal-dialog {
       min-height: calc(100vh - 60px);
       display: flex;
       flex-direction: column;
       justify-content: center;
       overflow: auto;
   }

   @media(max-width: 768px) {
       .modal-dialog {
           min-height: calc(100vh - 20px);
       }
   }
</style>
<div class="modal fade" id="modal_{{ $id }}">
   <div class="modal-dialog modal-{{ $size }}">
       <div class="modal-content">
           <div class="modal-header">
               <h6 class="modal-title">{{ $title }}</h6>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </button>
           </div>
           <form id="form_{{ $id }}">
               @csrf
               <div class="modal-body">
                  {{ $slot }}
               </div>
               <div class="modal-footer">
                  {{ $footer }}
               </div>
           </form>
       </div>
   </div>
</div>
