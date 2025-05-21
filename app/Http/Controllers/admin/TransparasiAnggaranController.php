<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\UserServices;
use App\Models\Anggaran;

class TransparasiAnggaranController extends Controller
{
    public function __construct(UserServices $userServices)
    {
       $this->middleware('auth');
       $this->middleware('permission:read anggaran|update anggaran|delete anggaran', ['only' => ['index','show']]);
       $this->middleware('permission:create anggaran', ['only' => ['create','store']]);
       $this->middleware('permission:update anggaran', ['only' => ['edit','update']]);
       $this->middleware('permission:delete anggaran', ['only' => ['destroy']]);
       $this->userServices = $userServices;
    
    }

    public function index(){

      
        $x['title']     = 'Anggaran';
        $data    = Anggaran::get();

            //return $data;
      
            if (request()->ajax()) {
               return  datatables()->of($data)
                  ->addIndexColumn()
                  ->addColumn('action', function ($data) {
                     return view('app.anggaran.action', compact('data'));
                  })
                  ->addColumn('totalfoto', function ($data) {

                     if($data->totalfoto > 0){
                        return '<span style="background-color: rgb(29 185 198) !important" class="badge badge-info">'.$data->totalfoto.'</span>';
                     }else{
                        return '<span class="badge badge-secondary">'.$data->totalfoto.'</span>';
                     }
                  })
                  ->rawColumns(['action','totalfoto'])
                  ->make(true);
            }
            return view('app.anggaran.index', $x);
    }

    public function store(Request $request){

        try {
    
            Anggaran::updateOrCreate(
                   ['id'                =>$request->id],
                   [
                      'judul'            => $request->nama,
                      'tahun'          => $request->tahun,
                      'link_download'         => $request->url,            
                   ]
                );
 
                if ($request->id) 
                return $this->success('Berhasil Mengubah Data');
                else 
                return $this->success('Berhasil Menginput Data');
    
  
        } catch (\Throwable $th) {
          return $this->error('Gagal, Terjadi Kesalahan' . $th->getMessage(), 400);
        }


    }

    public function edit(Anggaran $Anggaran)
    {
      //dd($Kegiatan);
       return $this->success('Data Kegiatan', $Anggaran);
    }

    public function destroy(Anggaran $Anggaran)
    {
       try {
        
         $Anggaran->delete();
      
          return redirect()->back()->with('success', 'Berhasil Hapus Data', 200);
       } catch (\Throwable $th) {
          return redirect()->back()->with('error', 'Gagal Hapus Data', 400);
       }
    }
 
}
