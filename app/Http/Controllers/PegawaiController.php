<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Models\Pegawai;
use App\Utils\ApiResponse;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Utils\RemoveSpace;

class PegawaiController extends Controller
{
   public function __construct()
   {
      $this->middleware('auth');
      $this->middleware('permission:read pegawai|edit form|delete pegawai', ['only' => ['index','show']]);
      $this->middleware('permission:create pegawai', ['only' => ['create','store']]);
      $this->middleware('permission:edit pegawai', ['only' => ['edit','update']]);
      $this->middleware('permission:delete pegawai', ['only' => ['destroy']]);
   }
    use ApiResponse;
   public function index()
   {
      // abort_if(Gate::denies('kelola mobil'), 403);
      $x['title']    = 'Master Pegawai';
      $data = Pegawai::all();

      if (request()->ajax()) {
         return  datatables()->of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($data) {
               return view('app.pegawai.action', compact('data'));
            })
            ->rawColumns(['action'])
            ->make(true);
      }
      return view('app.pegawai.index', $x, compact(['data']));
   }


   public function store(Request $request)
   {
      try {
         if($request->file('file')==null){
            Pegawai::updateOrCreate(
               ['id'               => $request->id],
               [
                  'nip'             => $request->nip,
                  'nama'            => $request->nama,
                  'tanggal_lahir'   => $request->tanggal_lahir,
                  'alamat'          => $request->alamat,
                  'jenis_kelamin'   => $request->jenis_kelamin,

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
       Pegawai::updateOrCreate(
            ['id'               => $request->id],
            [
               'nip'             => $request->nip,
               'nama'            => $request->nama,
               'tanggal_lahir'   => $request->tanggal_lahir,
               'alamat'          => $request->alamat,
               'jenis_kelamin'   => $request->jenis_kelamin,
               'foto'            => $url,
            ]
         );

         if ($request->id)  return $this->success('Berhasil Mengubah Data');
         else return $this->success('Berhasil Menginput Data');
      } catch (\Throwable $th) {
        return $this->error('Gagal, Terjadi Kesalahan' . $th, 400);
      }
   }


   public function edit(Pegawai $pegawai)
   {
      return $this->success('Data Pegawai', $pegawai);
   }

   public function destroy(Pegawai $pegawai)
   {
      try {
         $pegawai->delete();
         return redirect()->back()->with('success', 'Berhasil Hapus Data', 200);
      } catch (\Throwable $th) {
         return redirect()->back()->with('error', 'Gagal Hapus Data', 400);
      }
   }
   public function uploud(){

      // $options = [
      //     "headers" => [
      //         "Authorization" => "Bearer {$publicKey}"
      //     ],
      //     'multipart' => [
      //         [
      //             'name' => 'file',
      //             'contents' => fopen('/storage/uploads/1699865452_DSCF0032.JPG', 'r')
      //         ],
      //     ],
      // ];
      // return $client->request('POST', $url, $options)->getBody()->getContents();

      $response = $client->request("POST",$url,[
           "headers"   => ["Authorization" => "Bearer {$publicKey}"],
           "multipart" => [
                  [
                  'name'     => 'file',
                  'contents' =>  fopen('C:\laragon\www\master-app\storage\app\public\uploads\Screenshot_4.png', 'r')
                  ],
             ]

         ]);
         $response=   $response->getBody();
         $responsdata = json_decode($response,true);
         dd($responsdata['data']['url']);

   }


}
