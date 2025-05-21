<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use URL;
use DB;
use Vinkla\Hashids\Facades\Hashids;
class BeritaController extends Controller
{
  public function index(){
    $berita =  Berita::orderBy('tanggal','desc')->paginate(8);
    return view('frontend.berita.index',array("berita"=>$berita));
  }
    public function baca($id, $title, $tanggal){
      $berita_terbaru =  Berita::orderBy('tanggal','desc')->offset(0)->limit(5)->get();
      //dd($berita_terbaru);
      $video_kegiatan =  DB::table('video_kegiatans')->orderBy('id','desc')->offset(0)->limit(5)->get();
      $image_slider =  DB::table('sliders')->orderBy('id','desc')->offset(0)->limit(5)->get();
      $berita = Berita::where('id',Hashids::decode($id))->first();
     // return $berita;
        // dd($berita->id);
   if (!$berita ){
       throw new HttpException(404);
   }
   $url =  URL::to("baca/".$berita->id."/".str_replace(' ','-',$berita->judul)."/".$berita->tanggal);
   if($berita->gambar){
     $gambar = URL::to('berita/'.$berita->gambar);
   }else{
     $gambar = URL::to('images/ppid-share.png');
   }
    
        return view('frontend.berita.read',array("route"=>"berita", 
      'title'=>$title,  
      'berita_terbaru'=>$berita_terbaru,
        "berita"=>$berita));
    }

    public function read($id,$title){
      $berita = Berita::where('id', Hashids::decode($id))->firstOrFail();
      $berita_terbaru =  Berita::orderBy('tanggal','desc')->offset(0)->limit(5)->get();
     
      $berita = Berita::where('id',Hashids::decode($id))->first();
     // return $berita;
        
   if (!$berita ){
       throw new HttpException(404);
   }
   if($berita->gambar){
     $gambar = URL::to('berita/'.$berita->gambar);
   }else{
     $gambar = URL::to('images/ppid-share.png');
   }
    
        return view('frontend.berita.read',array("route"=>"berita", 
        'title'=>$title,   
      'berita_terbaru'=>$berita_terbaru,
        "berita"=>$berita));
    }
 
}
