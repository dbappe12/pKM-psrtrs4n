<?php

namespace App\Http\Controllers\Admin;

use App\Models\PermissionGroup;
use App\Utils\ApiResponse;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Spatie\Permission\Models\Permission;


class PermissionController extends Controller
{

   use ApiResponse;

   public function __construct()
   {
      $this->middleware('auth');
      $this->middleware('permission:read permission|update permission|delete permission', ['only' => ['index','show']]);
      $this->middleware('permission:create permission', ['only' => ['create','store']]);
      $this->middleware('permission:update permission', ['only' => ['edit','update']]);
      $this->middleware('permission:delete permission', ['only' => ['destroy']]);
      
   }


   public function index(){

      
      $x['title']     = 'Permission';
      $data    = Permission::get();
    
      if (request()->ajax()) {
         return datatables()->of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($data) {
               return view('admin.permissions.action', compact('data'));
            })
            ->editColumn('created_at', function ($data) {
               return Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->format('d/m/Y h:i:s');
            })
            ->editColumn('guard_name', function ($data) {
               if ($data->guard_name == 'web') {
                  return   '<span class="badge badge-primary">' . $data->guard_name . '</span>';;
               } elseif ($data->guard_name == 'api') {
                  return   '<span class="badge badge-warning">' . $data->guard_name . '</span>';;
               }
            })
            ->rawColumns(['action', 'guard_name'])
            ->make(true);
      }

     
      return view('admin.permissions.index', $x);
   }


   public function show(Permission $permission)
   {
      return $this->success('Data Edit Permission', $permission);
   }

   public function store(Request $request)
   {
      
      DB::beginTransaction();
      $role = ["read","create","delete","update"];
      try {

            $type =$request->type;
         if ($type=="multiple") {
            
               foreach ($role as $permission) {
                  $name=$permission." ".$request->name;
                  Permission::updateOrCreate(
                     ['id' => $request->id_per],
                     [
                        'name'                => $name,
                  
                        'guard_name'          => $request->guard_name,
                     ]
                  );
                        
                  }


         } else {
            Permission::updateOrCreate(
               ['id' => $request->id_per],
               [
                  'name'                => $request->name,
              
                  'guard_name'          => $request->guard_name,
               ]
            );
        }
         DB::commit();
         if ($request->id_per)  return $this->success('Berhasil Mengubah Data');
         else return $this->success('Berhasil Menginput Data');
      } catch (\Throwable $th) {
         DB::rollBack();
         return $this->error(config('language.alert-error.store') . $th, 400);
      }
   }

  
   public function edit($id)
   {

   //  dd($id);
      $Permission = Permission::where('id', $id)->first();
      return $this->success('Data Permission', $Permission);
   }


   public function destroy(Permission $permission,Request $request)
   {
      try {
         $id=$request->id;
         $record = Permission::find($id);
         $record->delete();
     
         return redirect()->back()->with('success', 'Berhasil Hapus Data', 200);
      } catch (\Throwable $th) {
         return redirect()->back()->with('error', 'Gagal Hapus Data', 400);
      }
   }
}
