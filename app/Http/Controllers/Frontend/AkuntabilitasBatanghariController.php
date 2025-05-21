<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Anggaran;
use App\Models\Lakip;

use App\Models\Berita;
use Illuminate\Http\Request;

class AkuntabilitasBatanghariController extends Controller
{
    public function index(Request $request){
        // $anggaran =  Anggaran::orderBy('created_at','desc')->paginate(8);
        $tahun = $request->input('tahun');
        $x['berita_terbaru']     = Berita::orderBy('created_at','desc')->offset(0)->limit(5)->get();
        if($tahun=="all"){
            $data    = Anggaran::get();
        }else{
            $data    = Anggaran::where('tahun',$tahun)->get();   
        }
       
            //return $data;
      
            if (request()->ajax()) {
               return  datatables()->of($data)
                  ->addIndexColumn()
                  ->addColumn('action', function ($data) {
                     return view('app.anggaran.action', compact('data'));
                  })
                  
                  ->rawColumns(['action'])
                  ->make(true);
            }
            return view('frontend.akuntabilitas-batanghari.index', $x);

    }

    public function lakip(Request $request){
        // $anggaran =  Anggaran::orderBy('created_at','desc')->paginate(8);
        $x['judul']   = "LAKIP KABUPATEN BATANGHARI";
        $tahun = $request->input('tahun');
        $x['berita_terbaru']     = Berita::orderBy('created_at','desc')->offset(0)->limit(5)->get();
        if($tahun=="all"){
            $data    = Lakip::where('jenis','batanghari')->get();
        }else{
            $data = Lakip::where([
                ['tahun', '=', $tahun],
                ['jenis', '=', 'batanghari']
            ])->get();
        }
       
            //return $data;
      
            if (request()->ajax()) {
               return  datatables()->of($data)
                  ->addIndexColumn()
                  ->addColumn('action', function ($data) {
                     return view('app.anggaran.action', compact('data'));
                  })
                  
                  ->rawColumns(['action'])
                  ->make(true);
            }
            return view('frontend.lakip.index', $x);

    }

    public function lakip_skpd(Request $request){
        // $anggaran =  Anggaran::orderBy('created_at','desc')->paginate(8);
        $tahun = $request->input('tahun');
        $x['judul']   = "LAKIP SKPD";
        $x['berita_terbaru']     = Berita::orderBy('created_at','desc')->offset(0)->limit(5)->get();
        if($tahun=="all"){
            $data    = Lakip::where('jenis','skpd')->get();
        }else{
            $data = Lakip::where([
                ['tahun', '=', $tahun],
                ['jenis', '=', 'skpd']
            ])->get();
            
        }

        
       
           // return $data;
      
            if (request()->ajax()) {
               return  datatables()->of($data)
                  ->addIndexColumn()
                  ->addColumn('action', function ($data) {
                     return view('app.anggaran.action', compact('data'));
                  })
                  
                  ->rawColumns(['action'])
                  ->make(true);
            }
            return view('frontend.lakip.index-skpd', $x);

    }
}
