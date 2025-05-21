<?php

namespace App\Http\Controllers\admin;

use App\Utils\ApiResponse;
use App\Models\VideoKegiatan;
use Illuminate\Http\Request;
use App\Services\FileUploadService;
use Spatie\ResponseCache\Facades\ResponseCache;

use App\Http\Controllers\Controller;


class YoutubeController extends Controller
{
   protected $fileUploadService;
   public function __construct(FileUploadService $fileUploadService)
   {
      $this->middleware('auth');
      $this->middleware('permission:read youtube|edit youtube|delete youtube', ['only' => ['index','show']]);
      $this->middleware('permission:create youtube', ['only' => ['create','store']]);
      $this->middleware('permission:update youtube', ['only' => ['edit','update']]);
      $this->middleware('permission:delete youtube', ['only' => ['destroy']]);
      $this->fileUploadService = $fileUploadService;
   }

    use ApiResponse;

    public function index()
    {
       // abort_if(Gate::denies('kelola mobil'), 403);
       $x['title']    = 'Data YouTube';
       $data = VideoKegiatan::all();
 
       if (request()->ajax()) {

          return  datatables()->of($data)
             ->addIndexColumn()
             ->addColumn('action', function ($data) {
                return view('app.youtube.action', compact('data'));
             })
             ->rawColumns(['action'])
             ->make(true);
       }
       return view('app.youtube.index', $x, compact(['data']));
    }



    public function store(Request $request){

      try {

        // $imageName = time().'.'.$request->file->extension(); 
         $file = $request->file('file');
         $foto = $file ? $this->fileUploadService->uploadFile($file) : null;

         // Prepare data for update or create
         $data = [
            'judul' => $request->judul,
            'link'  => $request->link,
         ];

         if ($foto) {
            $data['foto'] = $foto;
         }

         // Update or create the VideoKegiatan entry
         VideoKegiatan::updateOrCreate(['id' => $request->id_youtube], $data);

         // Return success message
         $message = $request->id_youtube ? 'Berhasil Mengubah Data' : 'Berhasil Menginput Data';
         return $this->success($message);


      
 

    } catch (\Throwable $th) {
      return $this->error('Gagal, Terjadi Kesalahan' . $th->getMessage(), 400);
    }

    }
    
    public function edit($id)
    {

    //  dd($id);
      $youtube = VideoKegiatan::where('id', $id)->first();
 
       return $this->success('Data SKPD', $youtube);
    }
    public function destroy(VideoKegiatan $WebsiteSkpd,Request $request)
    {
       try {

          $id=$request->id;
          $record = VideoKegiatan::find($id);
          $record->delete();
          return redirect()->back()->with('success', 'Berhasil Hapus Data', 200);
       } catch (\Throwable $th) {
          return redirect()->back()->with('error', 'Gagal Hapus Data', 400);
       }
    }

}
