<?php



namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Utils\ApiResponse;
use App\Models\Berita;
use Illuminate\Http\Request;
use Spatie\ResponseCache\Facades\ResponseCache;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use App\Services\FileUploadService;
use Vinkla\Hashids\Facades\Hashids;
class NewsController extends Controller
{
   protected $fileUploadService;
    public function __construct(FileUploadService $fileUploadService)
    {
       $this->middleware('auth');
       $this->middleware('permission:read news|update news|delete news', ['only' => ['index','show']]);
       $this->middleware('permission:create news', ['only' => ['create','store']]);
       $this->middleware('permission:update news', ['only' => ['edit','update']]);
       $this->middleware('permission:delete news', ['only' => ['destroy']]);
       $this->fileUploadService = $fileUploadService;
       
    }

    use ApiResponse;

    public function index()
    {
       // abort_if(Gate::denies('kelola mobil'), 403);
       $x['title']    = 'Data Berita';
       $data = Berita::all();
      // return $data;
     //  dd(Auth::user()->hasAnyPermission(['update news', 'delete news']));

   //     if (Auth::user()->hasPermissionTo('update news')) {
   //       // User has the necessary permission, perform the action
   //       return "You have permission to update news!";
   //   } else {
   //       // User does not have the necessary permission
   //       return "You do not have permission to update news.";
   //   }
      
      
       if (request()->ajax()) {
          return  datatables()->of($data)
             ->addIndexColumn()
             ->addColumn('action', function ($data) {
               
                
               if(Auth::user()->hasRole('superadmin')){
                  return view('app.berita.action', compact('data'));
               }else{
                     if (Auth::user()->hasAnyPermission(['update news', 'delete news'])) {
                           // User has the necessary permission, perform the action
                           return view('app.berita.action', compact('data'));
                     } else {
                     
                           // User does not have the necessary permission
                           return '  <button class="btn btn-sm btn-danger" data-id=""><i class="fas fa-solid fa-lock"></i></button>';
                     }


                 }  
               
             })
             ->rawColumns(['action'])
             ->make(true);
       }
       return view('app.berita.index', $x, compact(['data']));
    }


    public function store(Request $request){

      try {

       $content = $request->body;
       $dom = new \DomDocument();
       $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
       $imageFile = $dom->getElementsByTagName('imageFile');
 
       foreach($imageFile as $item => $image){
           $data = $img->getAttribute('src');
           list($type, $data) = explode(';', $data);
           list(, $data)      = explode(',', $data);
           $imgeData = base64_decode($data);
           $image_name= "/upload/" . time().$item.'.png';
           $path = public_path() . $image_name;
           file_put_contents($path, $imgeData);
           
           $image->removeAttribute('src');
           $image->setAttribute('src', $image_name);
        }
 
          $content = $dom->saveHTML();


          if ($request->jenis=="edit")
            $id_news=Hashids::decode($request->id);
          else
             $id_news=$request->id;


         // $imageName = time().'.'.$request->foto->extension();   
         $file = $request->file('foto');
         $foto = $this->fileUploadService->uploadFile($file);

             Berita::updateOrCreate(
                            ['id'                => $id_news],
                            [
                               'judul'           => $request->judul,
                               'isi'             => $content,
                               'tanggal'         => $request->tanggal,
                               'gambar'            => $foto,
                               'tittle_gambar'   => $request->judul_foto,
                               
             
                            ]
                         );

            // $request->foto->move(public_path('frontend/gambar-berita'), $imageName);            
                
             if ($id_news)  
               return $this->success('Berhasil Mengubah Data');
             else
               return $this->success('Berhasil Menginput Data');
               



      } catch (\Throwable $th) {
               return $this->error('Gagal, Terjadi Kesalahan' . $th->getMessage(), 400);
      }
    }

    public function edit(Berita $galeri,$id)
    {
       
        // $id=request('news');
         $record =$id;
         
         $x['title']    = 'Edit Berita';
         return view('app.berita.edit-berita',$x, compact('record'));
    }

    public function show($id)
    {

       
       //$id=request('news');
       $record = Berita::where('id', Hashids::decode($id))->first();
       return $record;
    }


    public function create()
    {
      $x['title']    = 'Data Berita';
       return view('app.berita.tambah-berita',$x);
    }


 
 
    public function destroy(Berita $galeri,$news)
    {
       try {
        
         $id=request('news');
         $record = Berita::where('id', Hashids::decode($id))->first();
         $record->delete();
      
          return redirect()->back()->with('success', 'Berhasil Hapus Data', 200);
       } catch (\Throwable $th) {
          return redirect()->back()->with('error', 'Gagal Hapus Data', 400);
       }
    }
 
}
