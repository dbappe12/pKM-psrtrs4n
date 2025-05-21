<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Support\Facades\DB;
use App\Models\Role;

use Illuminate\Support\Facades\Route;
class MenuController extends Controller
{

    public function __construct()
    {
       $this->middleware('auth');
       $this->middleware('permission:read menu|update slider|delete menu', ['only' => ['index','show']]);
       $this->middleware('permission:create menu', ['only' => ['create','store']]);
       $this->middleware('permission:update menu', ['only' => ['edit','update']]);
       $this->middleware('permission:delete menu', ['only' => ['destroy']]);
       
       
    }


    
    public function index()
    {
       // abort_if(Gate::denies('kelola mobil'), 403);
       $x['title']    = 'Data Menu';
       $x['type']    =  DB::table('type_menu')->get();
       $x['tree']    =  DB::table('menu')->where('type','tree')->get();
       $x['role']    =  DB::table('roles')->get();
       $data = Menu::where('id_menu_induk',0)
       ->get();
     // dd( $data );

       
       if (request()->ajax()) {
          return  datatables()->of($data)
             ->addIndexColumn()
             ->addColumn('action', function ($data) {
                return view('app.menu.action', compact('data'));
             })
             ->addColumn('total_menu', function ($data) {
               // $permisssions = $data->permissions->count();
               if($data->submenu > 0){
                  return '<span style="background-color: rgb(29 185 198) !important" class="badge badge-info">'.$data->submenu.'</span>';
               }else{
                  return '<span class="badge badge-secondary">'.$data->submenu.'</span>';
               }
            })
            ->addColumn('hak_akses', function ($data) {
               // $permisssions = $data->permissions->count();
                     $badges = '';

                     foreach ($data->hakakses as $role) {
                        // Access each role and create a badge
                        $colorClass = '';
                           if ($role == "superadmin") {
                                 $colorClass = 'badge-primary';
                           } elseif ($role == "admin") {
                                 $colorClass = 'badge-success';
                           } elseif ($role == "operator") {
                                 $colorClass = 'badge-warning';
                           }

                           // Access each role and create a badge with a dynamic color class
                           $badges .= '<span class="badge ' . $colorClass . '">' . $role . '</span> ';
                        }

                        return rtrim($badges); // Remove t
            })
            
             ->rawColumns(['action','total_menu','hak_akses'])
             ->make(true);
       }
       return view('app.menu.index', $x, compact(['data']));
    }
    public function store(Request $request)
   {
      try {
         

         // if($request->type=="tree"){
           
        
         // }else{
           
           
         // }

         // if($request->type=="tree"){
         //      if($request->jns=="Sudah Ada"){
         //       $type="menu";
         //       $id_menu_induk =$request->tree;
         //       $jsonString = Menu::where('id', $request->tree)->value('active');
         //       $new_value = "admin/".$request->url;
         //      // $array = json_decode($jsonString);
         //       $jsonString[] = $new_value;

         //       Menu::where('id', $request->tree)->update(['active'=> $jsonString ]);
         //      } else{ 
         //       $type=$request->type;
         //       $id_menu_induk = 0;
         //      }
               
         // }else{
         //    $type=$request->type;
         //    $id_menu_induk = 0;
         // }
         
          
       //  var_dump( $request->role);
         //  $string = implode(', ', $request->role);
         // $role = '["'.$request->role.'"]';
          $role = json_encode($request->role);
          $active = '["admin/'.$request->url.'"]';
          $active = json_decode($active);
          $url = route($request->url);
         
           $url = url("admin/".$request->url);
           //$id_permission = Role::whereIn('name', $request->role)->pluck('id');
         
          if($request->jenis=="submenu"){
            Menu::updateOrCreate(
               ['id'           => $request->id],
               [
                  'id_menu_induk'   =>  $request->id_menu,
                  'type'            => "menu",
                  'title'           => $request->judul,
                  'url'             => $request->url,
                  'icon'            => $request->icon,
                  'active'          =>$request->url,
                  'permission'      => $role,
                 
                
                  
               ]
            );

          }else{
            Menu::updateOrCreate(
               ['id'           => $request->id],
               [
                  'id_menu_induk'   => 0,
                  'type'            => $request->type,
                  'title'           => $request->judul,
                  'url'             => $request->url,
                  'icon'            => $request->icon,
                  'active'          =>$request->url,
                  'permission'      => $role,
                 
                
                  
               ]
            );
          }
      
     

         // Menu::updateOrCreate(
         //    ['id'           => $request->id],
         //    [
         //       'id_menu_induk'   =>  $id_menu_induk,
         //       'type'            => $type,
         //       'title'           => $request->judul,
         //       'url'             => $url,
         //       'icon'            => $request->icon,
         //       'active'          => $active,
         //       'permission'      => $request->role,
             
               
         //    ]
         // );

         if ($request->id)  return $this->success('Berhasil Mengubah Data');
         else return $this->success('Berhasil Menginput Data');
      } catch (\Throwable $th) {
        return $this->error('Gagal, Terjadi Kesalahan' . $th, 400);
      }
   }

   public function create(Request $request)
   {
      try {
         

         
           
          $role = json_encode($request->role);
          $active = '["admin/'.$request->url.'"]';
          $active = json_decode($active);
          $url = url("admin/".$request->url);
         Menu::updateOrCreate(
            ['id'           => $request->id],
            [
               'id_menu_induk'   => 0,
               'type'            => $request->judul,
               'title'           => $request->judul,
               'url'             => $url,
               'icon'            => $request->icon,
               'active'          => $active,
               'permission'      => $role,
              
             
               
            ]
         );

         if ($request->id)  return $this->success('Berhasil Mengubah Data');
         else return $this->success('Berhasil Menginput Data');
      } catch (\Throwable $th) {
        return $this->error('Gagal, Terjadi Kesalahan' . $th, 400);
      }
   }

   
   public function edit(Menu $menu)
   {
      return $this->success('Data Menu', $menu);
   }

    
   public function show($id)
   {
  
        $x['id_menu']    = $id;
         $x['title']    = "Sub Menu";
         $x['type']    =  DB::table('type_menu')->get();
         $x['tree']    =  DB::table('menu')->where('type','tree')->get();
         $x['role']    =  DB::table('roles')->get();
         $data = Menu::where('id_menu_induk',$id)
         ->get();
         if (request()->ajax()) {
            return  datatables()->of($data)
               ->addIndexColumn()
               ->addColumn('action', function ($data) {
                  return view('app.menu.action-submenu', compact('data'));
               })
               ->addColumn('hak_akses', function ($data) {
                  // $permisssions = $data->permissions->count();
                        $badges = '';
   
                        foreach ($data->hakakses as $role) {
                           // Access each role and create a badge
                           $colorClass = '';
                              if ($role == "superadmin") {
                                    $colorClass = 'badge-primary';
                              } elseif ($role == "admin") {
                                    $colorClass = 'badge-success';
                              } elseif ($role == "operator") {
                                    $colorClass = 'badge-warning';
                              }
   
                              // Access each role and create a badge with a dynamic color class
                              $badges .= '<span class="badge ' . $colorClass . '">' . $role . '</span> ';
                           }
   
                           return rtrim($badges); // Remove t
               })
         
               ->rawColumns(['action','hak_akses'])
               ->make(true);
         }
         return view('app.menu.submenu', $x, compact(['data']));

      // if (request()->ajax()) {
      //    return datatables()->of($data)
      //       ->addIndexColumn()
      //       ->addIndexColumn()
      //       ->addColumn('action', function ($data) {
      //          return view('app.menu.action', compact('data'));
      //       })
      

      //       ->rawColumns(['action'])
      //       ->make(true);
      // }
      // return view('app.menu.submenu', compact('data','id_menu'));
   
   }

   // public function submenu($submenu)
   // {
   //    $x['title']    = "Sub Menu";
   //    $x['type']    =  DB::table('type_menu')->get();
   //    $x['tree']    =  DB::table('menu')->where('type','tree')->get();
   //    $x['role']    =  DB::table('roles')->get();
   //    $data = Menu::where('id_menu_induk',$submenu)
   //    ->get();
   //    if (request()->ajax()) {
   //       return  datatables()->of($data)
   //          ->addIndexColumn()
   //          ->addColumn('action', function ($data) {
   //             return view('app.menu.action', compact('data'));
   //          })
      
   //          ->rawColumns(['action'])
   //          ->make(true);
   //    }
   //    return view('app.menu.submenu', $x, compact(['data']));
   // }


   
   
   public function destroy(Menu $menu)
   {
      try {
         $menu->delete();
         return redirect()->back()->with('success', 'Berhasil Hapus Data', 200);
      } catch (\Throwable $th) {
         return redirect()->back()->with('error', 'Gagal Hapus Data', 400);
      }
   }


    
}
