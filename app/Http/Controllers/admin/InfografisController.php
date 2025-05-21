<?php

namespace App\Http\Controllers\admin;

use App\Utils\ApiResponse;
use App\Models\Infografis;
use Illuminate\Http\Request;
use Spatie\ResponseCache\Facades\ResponseCache;
use Carbon\Carbon;
use App\Services\FileUploadService;
use App\Http\Controllers\Controller;


class InfografisController extends Controller
{

   protected $fileUploadService;
   public function __construct(FileUploadService $fileUploadService)
   {
      $this->middleware('auth');
      $this->middleware('permission:read infografis|edit infografis|delete infografis', ['only' => ['index','show']]);
      $this->middleware('permission:create infografis', ['only' => ['create','store']]);
      $this->middleware('permission:update infografis', ['only' => ['edit','update']]);
      $this->middleware('permission:delete infografis', ['only' => ['destroy']]);
      $this->fileUploadService = $fileUploadService;
   }

   use ApiResponse;

    use ApiResponse;

    public function index()
    {
       // abort_if(Gate::denies('kelola mobil'), 403);
       $x['title']    = 'Data Infografis';
       $data = Infografis::all();
     //return $data;
       if (request()->ajax()) {
          return  datatables()->of($data)
             ->addIndexColumn()
             ->addColumn('action', function ($data) {
                return view('app.infografis.action', compact('data'));
             })
             ->rawColumns(['action'])
             ->make(true);
       }
       return view('app.infografis.index', $x, compact(['data']));
    }

    public function store(Request $request){

       try {

       

            $tanggal_new = $request->input('tanggal');

         

           // Parse the date using Carbon
           $parsedDate = Carbon::parse($tanggal_new);
   
           // Format the date as needed
           $foto = $request->file('foto');
           $file_pdf = $request->file('file');
           $formattedDate = $parsedDate->format('Y-m-d');
           
           // Handle file uploads
           $uploadedFoto = $foto ? $this->fileUploadService->uploadFile($foto) : null;
           $uploadedFilePdf = $file_pdf ? $this->fileUploadService->uploadFile($file_pdf) : null;
           
           // Prepare data for update or create
           $data = [
               'judul'   => $request->judul,
               'tanggal' => $formattedDate,
           ];
           
           if ($uploadedFoto) {
               $data['gambar'] = $uploadedFoto;
           }
           
           if ($uploadedFilePdf) {
               $data['file'] = $uploadedFilePdf;
           }
           
           // Update or create the infografis entry
           Infografis::updateOrCreate(['id' => $request->id_info], $data);
           
           // Return success message
           $message = $request->id_info ? 'Berhasil Mengubah Data' : 'Berhasil Menginput Data';
           return $this->success($message);
           

      } catch (\Throwable $th) {
                  return $this->error('Gagal, Terjadi Kesalahan' . $th->getMessage(), 400);
      }      


    }
    public function edit($id)
    {

    //  dd($id);
      $skpd = Infografis::where('id', $id)->first();
 
       return $this->success('Data INFOGRAFIS', $skpd);
    }

    public function destroy(Infografis $WebsiteSkpd,Request $request)
    {
       try {

          $id=$request->id;
          $record = Infografis::find($id);
          $record->delete();
          return redirect()->back()->with('success', 'Berhasil Hapus Data', 200);
       } catch (\Throwable $th) {
          return redirect()->back()->with('error', 'Gagal Hapus Data', 400);
       }
    }
}
