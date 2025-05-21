<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use App\Models\Pegawai;
use App\Config\MenuSidebar;
use App\Models\Menu;
class FormController extends Controller
{


    public function __construct()
    {
       $this->middleware('auth');
       $this->middleware('permission:read form|edit form|delete form', ['only' => ['index','show']]);
       $this->middleware('permission:create form', ['only' => ['create','store']]);
    //    $this->middleware('permission:edit-product', ['only' => ['edit','update']]);
    //    $this->middleware('permission:delete-product', ['only' => ['destroy']]);
    }
    public function index()
    {
        $x['title']         = 'Form Component';
        $x['permission']    = Permission::get();
        return view('form.index', $x);
    }

    public function store(Request $request)
    {
       try {
 
        Pegawai::updateOrCreate(
             ['id'               => $request->id],
             [
                'nama'             => $request->nama,
             ]
          );
 
          if ($request->id)  return $this->success('Berhasil Mengubah Data');
          else return $this->success('Berhasil Menginput Data');
       } catch (\Throwable $th) {
          return $this->error('Gagal, Terjadi Kesalahan' . $th, 400);
       }
    }

    public function menu(Request $request){

      try {
         $items = Menu::where('id_menu_induk',0)
                  ->get();
                
                 // $result = json_encode($items, false);
                  return $items;
         // return MenuSidebar::render();
         // var_dump($items);
         // $respon = array('status'=>false,'message'=>$items);
       //return response()->json($respon);
        
     } catch (\Throwable $th) {
         echo $th->getMessage();
     }

  

    }


}
