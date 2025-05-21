<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Utils\ApiResponse;
use Vinkla\Hashids\Facades\Hashids;
use Spatie\ResponseCache\Facades\ResponseCache;
class PageAdminController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
       $this->middleware('permission:read front|edit front|delete front', ['only' => ['index','show']]);
       $this->middleware('permission:create front', ['only' => ['create','store']]);
       $this->middleware('permission:update front', ['only' => ['edit','update']]);
       $this->middleware('permission:delete front', ['only' => ['destroy']]);
    }
    use ApiResponse;

    public function index()
    {
       // abort_if(Gate::denies('kelola mobil'), 403);
       $x['title']    = 'Data Page';
       $data = Page::all();
      // dd($data);
 
      if (request()->ajax()) {
         return  datatables()->of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($data) {
               return view('app.pagefront.action', compact('data'));
            })
            ->rawColumns(['action'])
            ->make(true);
      }
      return view('app.pagefront.index', $x, compact(['data']));
   }  

    public function create()
    {
      $x['title']    = 'Data Page';
       return view('app.pagefront.tambah-page',$x);
    }

    public function edit(Page $galeri,$id)
    {
       
        // $id=request('news');
         $record =$id;
         
         $x['title']    = 'Edit Page';
         return view('app.pagefront.edit-page',$x, compact('record'));
    }

    public function show($id)
    {

       
       //$id=request('news');
       $record = Page::where('id', Hashids::decode($id))->first();
       return $record;
    }

    public function destroy(Page $galeri,$front)
    {
       try {
        
         $id=request('front');
         $record = Page::where('id', Hashids::decode($id))->first();
         $record->delete();
      
          return redirect()->back()->with('success', 'Berhasil Hapus Data', 200);
       } catch (\Throwable $th) {
          return redirect()->back()->with('error', 'Gagal Hapus Data', 400);
       }
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


   

          Page::updateOrCreate(
                            ['id'                => $id_news],
                            [
                               'judul'           => $request->judul,
                               'isi'             => $content,
                               'slug'            => $request->slug,
                            
             
                            ]
                         );

             
                
             if ($id_news)  
               return $this->success('Berhasil Mengubah Data');
             else
               return $this->success('Berhasil Menginput Data');
               



      } catch (\Throwable $th) {
               return $this->error('Gagal, Terjadi Kesalahan' . $th->getMessage(), 400);
      }



    }


 




}
