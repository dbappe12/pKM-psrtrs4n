<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Harga;
use App\Models\Mobil;
use App\Models\Setoran;
use App\Models\Supir;
use App\Models\Transportir;
use App\Models\Tujuan;
use App\Services\SetoranService;
use App\Utils\ApiResponse;
use Illuminate\Http\Request;

class HarianController extends Controller
{
    //

    public function index(Request $request)
   {

      $x['title']       = 'Kelola Data Setoran';
      $x['tujuan']      = Tujuan::all();
      $x['transportir'] = Transportir::all();
      $x['supir']       = Supir::all();
      $x['mobil']   = Mobil::with('pemilik', 'supir')->get();

      //dd(request()->tanggal);
      $untung=0;



      if(!empty($request->from_date))
      { 
        // dd($request->from_date);
            $data = Setoran::with('supir','mobil')
            ->whereBetween('tgl_muat', array($request->from_date, $request->to_date))
            ->get();
         
            foreach ($data as $p) {
             
              $untung +=$p->untung;
               //dd( $untung);
                
             }



      }else{
         $data = Setoran::with('supir','mobil')
         ->where('tgl_muat','!=',null)
         ->get();
         
            foreach ($data as $p) {
              
              $untung +=$p->untung;
              // dd( $untung);
             }
             
         
      }

      if (request()->ajax()) {
         return  datatables()->of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($data) {
               return view('app.setoran.action', compact('data'));
            })
            ->addColumn('status_bayar', function ($data) {
               if($data->status_pembayaran == "LUNAS"){
                  return '<span class="badge badge-pill badge-success">'.$data->status_pembayaran.'</span>';
               }else{
                  return '<span class="badge badge-pill badge-secondary">'.$data->status_pembayaran.'</span>';
               }
             
            })
            ->addColumn('status_cair', function ($data) {
            
               if($data->status_pencairan == "LUNAS"){
                  return '<span class="badge badge-pill badge-success">'.$data->status_pencairan.'</span>';
               }else{
                  return '<span class="badge badge-pill badge-secondary">'.$data->status_pencairan.'</span>';
               }
             })
            ->rawColumns(['action', 'status_bayar','status_cair'])
            ->make(true);
      }
      return view('app.pendapatan.index',$x, compact(['data','untung']));
   }

   public function total(Request $request){

      $data = Setoran::with('supir','mobil')
      ->whereBetween('tgl_muat', array($request->from_date, $request->to_date))
      ->get();
      window.open("https://www.w3schools.com");
      // $untung=0;
      // foreach ($data as $p) {
       
      //   $untung +=$p->untung;
      //    dd($untung);
      //  }

      //   return view('app.pendapatan.index',compact(['untung']));


   }
}
