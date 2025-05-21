<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\UserServices;
use App\Utils\ApiResponse;
use App\Utils\DateUtils;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\Group;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\ResponseCache\Facades\ResponseCache;

class MasterUserController extends Controller
{
   use ApiResponse;
   // protected $userServices;

   // public function __construct(UserServices $userServices)
   // {
   //    $this->userServices = $userServices;
   // }

   public function __construct(UserServices $userServices)
   {
      $this->middleware('auth');
      $this->middleware('permission:read user|update user|delete user', ['only' => ['index','show']]);
      $this->middleware('permission:create user', ['only' => ['create','store']]);
      $this->middleware('permission:update user', ['only' => ['edit','update']]);
      $this->middleware('permission:delete user', ['only' => ['destroy']]);
      $this->userServices = $userServices;
   
   }

   public function index()
   {
    
      $data = User::get();
      $x['roles']          = Role::get();
      $x['title']     = 'User';
      if (request()->ajax()) {
         return  datatables()->of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($data) {
               return view('admin.user.action', compact('data'));
            })
           
            ->addColumn('role', function (User $data) {
               return $this->userServices->getRoleColor($data->getRoleName());
            })
            ->addColumn('last_login_human', function (User $data) {
               return DateUtils::human($data->last_login_at);
            })
            ->editColumn('status', function ($data) {
               if ($data->status == 'NONAKTIF') {
                  return '<span class="badge badge-danger">Nonaktif</span>';
               }
               if ($data->status == 'AKTIF') {
                  return '<span class="badge badge-primary">Aktif</span>';
               }
            })
            ->rawColumns(['action', 'foto', 'status', 'role'])
            ->make(true);
      }
      return view('admin.user.index', $x);
   }


   public function create()
   {
   }


   public function store(Request $request)
   {
      try {
       
         $user = User::updateOrCreate(
            ['id'               => $request->id],
            [
               'username'             => $request->username,
               'name'            => $request->nama,
               'kontak'   => $request->kontak,
               'alamat'          => $request->alamat,
               'password'  => bcrypt($request->password)

            ]
         );
         
         // $user->assignRole($request->role);
        $user->syncRoles($request->role);
       if ($request->id)  
         return $this->success('Berhasil Mengubah Data');
      else 
       return $this->success('Berhasil Menginput Data');
      } catch (\Throwable $th) {
         return $this->error('Gagal, Terjadi Kesalahan' . $th, 400);
      }
   }

   // public function show($id)
   // {

   //    $user = User::find($id);
   //    $data = $user->getAllPermissions();

   //    $permissions = Permission::get();


   //    if (request()->ajax()) {
   //       return datatables()->of($data)
   //          ->addIndexColumn()
   //          ->addColumn('action', function ($data) use ($user) {
             
   //             if ($user->hasDirectPermission($data->name)) {
   //                return '<a href="#" data-action="' . $data->name . '"
   //                data-url="' . route("master-user.revoke.permission") . '" data-toggle="tooltip" data-placement="bottom" title="Delete Data" class="btn btn-sm btn-danger btn_delete" data-id="" data-name=""><i class="fas fa-trash"></i></a>';
   //             }
   //          })
   //          ->editColumn('created_at', function ($data) {
   //             return Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->format('d/m/Y h:i:s');
   //          })
   //          ->editColumn('type', function ($data) use ($user) {
   //             if ($user->hasDirectPermission($data->name)) {
   //                return '<span class="badge badge-warning">Direct</span>';
   //             } else {
   //                return '<span class="badge badge-success">Via Role</span>';
   //             }
   //          })
   //          ->editColumn('guard_name', function ($data) {
   //             if ($data->guard_name == 'web') {
   //                return   '<span class="badge badge-primary">' . $data->guard_name . '</span>';;
   //             } elseif ($data->guard_name == 'api') {
   //                return   '<span class="badge badge-warning">' . $data->guard_name . '</span>';;
   //             }
   //          })
   //          // ->editColumn('group', function ($data) {
   //          //   return Group::where();
   //          // })
   //          ->rawColumns(['action', 'guard_name', 'type'])
   //          ->make(true);
   //    }
   //    return view('admin.master-user.show', compact('user', 'permissions'));
   // }

   public function profile(Request $request){
     
      $user = User::find(auth()->user()->id);
      return view('admin.profile.index', compact('user'));
   }

   public function show(Request $request){
     
      $user = User::find(auth()->user()->id);
      return view('admin.profile.index', compact('user'));
   }
   public function edit(User $user)
   {
      return $this->success('Data Pegawai', $user);
   }



   public function destroy(User $User)
   {
      try {
         $User->delete();
         return redirect()->back()->with('success', 'Berhasil Hapus Data', 200);
      } catch (\Throwable $th) {
         return redirect()->back()->with('error', 'Gagal Hapus Data', 400);
      }
   }

   public function revokePermission(Request $request)
   {

      try {
         DB::beginTransaction();
         $user = User::find($request->user_id);
         $user->revokePermissionTo($request->permission_name);
         DB::commit();
         return $this->success(config('language.alert-success.destroy'));
      } catch (\Throwable $th) {
         DB::rollBack();
         return $this->error(config('language.alert-error.destroy') . $th, 400);
      }
   }

   public function addDirectPermission(Request $request)
   {
      try {
         DB::beginTransaction();
         $user = User::find($request->user_id);
         $user->givePermissionTo([$request->permission]);
         DB::commit();
         return $this->success(config('language.alert-success.store'));
      } catch (\Throwable $th) {
         DB::rollBack();
         return $this->error(config('language.alert-error.store') . $th, 400);
      }
   }

   public function setActiveStatus(Request $request)
   {
      try {

         User::find($request->id)->update([
            'status' => $request->status
         ]);

         return redirect()->back()->with('success', __('trans.crud.update'));
      } catch (\Throwable $th) {
         return redirect()->back()->with('error', __('trans.crud.error'));
      }
   }

   public function passwordReset(Request $request)
   {
      try {
         User::find($request->user_id)->update([
            'password' => bcrypt($request->password_baru)
         ]);
         return redirect()->back()->with('success', __('trans.crud.update'));
      } catch (\Throwable $th) {
         return redirect()->back()->with('error', __('trans.crud.error'));
      }
   }
}
