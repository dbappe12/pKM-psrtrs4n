<div class="card-body table-responsive">
   <table id="{{ $id }}" class="table table-bordered" style="width:100%">
       <thead>
           <tr>
            @foreach($th as $item)
                <th>{{ $item }}</th>
            @endforeach
           </tr>
       </thead>
       <tbody>
       </tbody>
   </table>
</div>