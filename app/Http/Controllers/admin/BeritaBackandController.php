<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Utils\ApiResponse;
use App\Models\Berita;
use Illuminate\Http\Request;
use Spatie\ResponseCache\Facades\ResponseCache;


class BeritaBackandController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
       $this->middleware('permission:read berita_back|edit berita_back|delete berita_back', ['only' => ['index','show']]);
       $this->middleware('permission:create berita_back', ['only' => ['create','store']]);
       $this->middleware('permission:edit berita_back', ['only' => ['edit','update']]);
       $this->middleware('permission:delete berita_back', ['only' => ['destroy']]);
       $this->fileUploadService = $fileUploadService;

    }

    use ApiResponse;

    public function index()
    {
       // abort_if(Gate::denies('kelola mobil'), 403);
       $x['title']    = 'Data Berita';
       $data = Berita::all();
 
       if (request()->ajax()) {
          return  datatables()->of($data)
             ->addIndexColumn()
             ->addColumn('action', function ($data) {
                return view('app.berita.action', compact('data'));
             })
             ->rawColumns(['action'])
             ->make(true);
       }
       return view('app.berita.index', $x, compact(['data']));
    }

    public function create()
    {
      $x['title']    = 'Data Berita';
       return view('app.berita.tambah-berita',$x);
    }

    public function store(Request $request)
   {
      try {

      $content = $request->body;
       $dom = new \DomDocument();
       $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
       $imageFile = $dom->getElementsByTagName('img');
 
       foreach($imageFile as $item => $image){
           $data = $image->getAttribute('src');
           list($type, $data) = explode(';', $data);
           list(, $data)      = explode(',', $data);
           $imgeData = base64_decode($data);
           $image_name= "/uploads/" . time().$item.'.png';
           $path = public_path() . $image_name;
           file_put_contents($path, $imgeData);
           
           $image->removeAttribute('src');
           $image->setAttribute('src', $image_name);
        }
 
       $content = $dom->saveHTML();
       
        // Handle file upload using FileUploadService if a file is provided
        $url = null;
        if ($request->hasFile('file')) {
            $url = $this->fileUploadService->uploadFile($request->file('file'));
        }

        // Handle file upload using FileUploadService if a file is provided
        $url = null;
        if ($request->hasFile('file')) {
            $url = $this->fileUploadService->uploadFile($request->file('file'));
        }
                // Update or create Berita
                Berita::updateOrCreate(
                  ['id' => $request->id],
                  [
                      'judul' => $request->judul,
                      'isi' => $content,
                      'tanggal' => $request->tanggal,
                      'tittle_gambar' => $request->judul_foto,
                      'gambar' => $url, // Store the file URL or null if no file
                  ]
              );
      
              // Update or create Slider (assuming Slider model exists)
              Slider::updateOrCreate(
                  ['id' => $request->id],
                  [
                      'keterangan' => $request->keterangan,
                      'gambar' => $url,
                      'teks' => $content,
                  ]
              );
      
              // Clear response cache if necessary
              ResponseCache::clear();
      

         if ($request->id)  return $this->success('Berhasil Mengubah Data');
         else return $this->success('Berhasil Menginput Data');
      } catch (\Throwable $th) {
        return $this->error('Gagal, Terjadi Kesalahan' . $th->getMessage(), 400);
      }
   }

   public function edit(Berita $berita)
   {

      $x['title']    = 'Edit Berita';
      return view('app.berita.tambah-berita',$x, compact('berita'));
   }

   public function destroy(Berita $Berita)
   {
      try {
         dd( $Berita);
        $Berita->delete();


         return redirect()->back()->with('success', 'Berhasil Hapus Data', 200);
      } catch (\Throwable $th) {
         return redirect()->back()->with('error', 'Gagal Hapus Data', 400);
      }
   }

   

}
