<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Utils\ApiResponse;
use App\Models\Galeri;
use App\Models\Berita;
use Illuminate\Http\Request;
use Spatie\ResponseCache\Facades\ResponseCache;

class NewsController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
       $this->middleware('permission:read news|edit news|delete news', ['only' => ['index','show']]);
       $this->middleware('permission:create news', ['only' => ['create','store']]);
       $this->middleware('permission:edit news', ['only' => ['edit','update']]);
       $this->middleware('permission:delete news', ['only' => ['destroy']]);
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



    public function edit(Berita $galeri)
    {
       return $this->success('Data Berita', $galeri);
    }
 
    public function destroy(Galeri $galeri)
    {
       try {

        
          $galeri->delete();
      
          return redirect()->back()->with('success', 'Berhasil Hapus Data', 200);
       } catch (\Throwable $th) {
          return redirect()->back()->with('error', 'Gagal Hapus Data'.$th->getMessage(), 400);
       }
    }
 
}
