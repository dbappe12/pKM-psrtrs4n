<div class="card-body table-responsive">
   <table id="{{ $id }}" class="table table-bordered {{ $class ?? "" }}">
       <thead>
           <tr>

               @foreach ($th as $key => $item)
               <th>{{ $item }}</th>
               @endforeach
           </tr>
       </thead>
       <tbody>
       </tbody>
   </table>
</div>
