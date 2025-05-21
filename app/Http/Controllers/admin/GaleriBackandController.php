<?php



namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Utils\ApiResponse;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Spatie\ResponseCache\Facades\ResponseCache;
use Illuminate\Support\Facades\Auth;
use App\Services\FileUploadService;
class GaleriBackandController extends Controller
{

   protected $fileUploadService;

    public function __construct(FileUploadService $fileUploadService)
    {
       $this->middleware('auth');
       $this->middleware('permission:read galeri|edit galeri|delete galeri', ['only' => ['index','show']]);
       $this->middleware('permission:create galeri', ['only' => ['create','store']]);
       $this->middleware('permission:update galeri', ['only' => ['edit','update']]);
       $this->middleware('permission:delete galeri', ['only' => ['destroy']]);
       $this->fileUploadService = $fileUploadService;
    }

    use ApiResponse;

    public function index()
    {
       // abort_if(Gate::denies('kelola mobil'), 403);
       $x['title']    = 'Data Galeri';
       $data = Galeri::all();
       //dd(Auth::user()->hasAnyPermission(['update galeri', 'delete galeri']));
 
       if (request()->ajax()) {
          return  datatables()->of($data)
             ->addIndexColumn()
             ->addColumn('action', function ($data) {
               
               
              
                 
               if(Auth::user()->hasRole('superadmin')){
                  return view('app.galeri.action', compact('data'));
               }else{
                     if (Auth::user()->hasAnyPermission(['update galeri', 'delete galeri'])) {
                           // User has the necessary permission, perform the action
                           return view('app.galeri.action', compact('data'));
                     } else {
                     
                           // User does not have the necessary permission
                           return '  <button class="btn btn-sm btn-danger" data-id=""><i class="fas fa-solid fa-lock"></i></button>';
                     }


                 }  
             })
             ->rawColumns(['action'])
             ->make(true);
       }
       return view('app.galeri.index', $x, compact(['data']));
    }

    public function store(Request $request)
    {
       try {
        //simpan foto ke lokal
         $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $imageName = time().'.'.$request->file->extension();  
       // $request->file->move(public_path('frontend/galeri'), $imageName);

       $file = $request->file('file');
          if($request->file('file')==null){
             Galeri::updateOrCreate(
                ['id'           => $request->id],
                [
                   'judul'      => $request->keterangan,
                   'foto'       => $imageName,
 
                ]
             );
    
             if ($request->id)  return $this->success('Berhasil Mengubah Data');
             else return $this->success('Berhasil Menginput Data');
 
          }
   
         $url = $this->fileUploadService->uploadFile($file);
    
        Galeri::updateOrCreate(
             ['id'           => $request->id],
             [
               'judul'      => $request->keterangan,
                'foto'       => $url,
            
             ]
          );
 
          if ($request->id)  return $this->success('Berhasil Mengubah Data');
          else return $this->success('Berhasil Menginput Data');
       } catch (\Throwable $th) {
         return $this->error('Gagal, Terjadi Kesalahan' . $th->getMessage(), 400);
       }
    }

    public function edit(Galeri $galeri)
    {
       return $this->success('Data Foto', $galeri);
    }
 
    public function destroy(Galeri $galeri)
    {
       try {
       
          $galeri->delete();
      
          return redirect()->back()->with('success', 'Berhasil Hapus Data', 200);
       } catch (\Throwable $th) {
          return redirect()->back()->with('error', 'Gagal Hapus Data', 400);
       }
    }
 
}
