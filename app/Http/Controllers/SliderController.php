<?php

namespace App\Http\Controllers;
use App\Models\slider;
use App\Utils\ApiResponse;
use Illuminate\Http\Request;

use RahulHaque\Filepond\Facades\Filepond;
class SliderController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
       $this->middleware('permission:read slider|edit slider|delete slider', ['only' => ['index','show']]);
       $this->middleware('permission:create slider', ['only' => ['create','store']]);
       $this->middleware('permission:edit slider', ['only' => ['edit','update']]);
       $this->middleware('permission:delete slider', ['only' => ['destroy']]);
    }

    use ApiResponse;
   public function index()
   {
      // abort_if(Gate::denies('kelola mobil'), 403);
      $x['title']    = 'Data Slider';
      $data = slider::all();

      if (request()->ajax()) {
         return  datatables()->of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($data) {
               return view('app.slider.action', compact('data'));
            })
            ->rawColumns(['action'])
            ->make(true);
      }
      return view('app.slider.index', $x, compact(['data']));
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
       
      
       
         if($request->file('file')==null){
            slider::updateOrCreate(
               ['id'               => $request->id],
               [
                  'keterangan'            => $request->keterangan,
                  'teks'            => $content,

               ]
            );
   
            if ($request->id)  return $this->success('Berhasil Mengubah Data');
            else return $this->success('Berhasil Menginput Data');

         }
         $response=   $response->getBody();
         $responsdata = json_decode($response,true);
         $url=$responsdata['data']['url'];
         // $fileModel = new Pegawai;
         // if($request->file()) {
         //    $image_path = $request->file->getClientOriginalName();
         //    $name_uniqe =   now()->timestamp . '.' . $request->file('file')->getClientOriginalExtension();
         //     //$fileName = time().'_'.$request->file();
         //     $filePath = $request->file('file')->storeAs('uploads', $name_uniqe, 'public');
         //    // $fileModel->nama = time().'_'.$request->file->getClientOriginalName();
         //     $fileModel->nama = '/storage/' . $filePath;
         
         // }
       slider::updateOrCreate(
            ['id'               => $request->id],
            [
               'keterangan'      => $request->keterangan,
               'foto'            => $url,
               'teks'            => $content,
            ]
         );

         if ($request->id)  return $this->success('Berhasil Mengubah Data');
         else return $this->success('Berhasil Menginput Data');
      } catch (\Throwable $th) {
        return $this->error('Gagal, Terjadi Kesalahan' . $th->getMessage(), 400);
      }
   }

   public function edit(slider $slider)
   {
      return $this->success('Data Foto', $slider);
   }

   public function destroy(slider $slider)
   {
      try {
         $slider->delete();
         return redirect()->back()->with('success', 'Berhasil Hapus Data', 200);
      } catch (\Throwable $th) {
         return redirect()->back()->with('error', 'Gagal Hapus Data', 400);
      }
   }
}
