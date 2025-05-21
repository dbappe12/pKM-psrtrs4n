<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Popup;
use App\Services\FileUploadService;

use App\Utils\ApiResponse;
class PopupController extends Controller
{
    protected $fileUploadService;
    public function __construct(FileUploadService $fileUploadService)
    {
       $this->middleware('auth');
       $this->middleware('permission:read popup|edit popup|delete popup', ['only' => ['index','show']]);
       $this->middleware('permission:create popup', ['only' => ['create','store']]);
       $this->middleware('permission:update popup', ['only' => ['edit','update']]);
       $this->middleware('permission:delete popup', ['only' => ['destroy']]);
       $this->fileUploadService = $fileUploadService;
    }
    use ApiResponse;

    public function index()
    {
      
       $x['title']    = 'Data Popup';
       $data = Popup::all();
       if (request()->ajax()) {
          return  datatables()->of($data)
             ->addIndexColumn()
             ->addColumn('action', function ($data) {
                return view('app.popup.action', compact('data'));
             })
             ->rawColumns(['action'])
             ->make(true);
       }
       return view('app.popup.index', $x, compact(['data']));
    }

    
    public function store(Request $request)
    {
       try {
       
    
     
      $file = $request->file('file');

      // Prepare data to update or create
      $data = [
          'ket' => $request->keterangan,
          'status' => $request->status,
      ];
      
      if ($file !== null) {
          // Upload the file and get the URL
          $data['foto'] = $this->fileUploadService->uploadFile($file);
      }
      
      // Update or create the popup
      Popup::updateOrCreate(
          ['id' => $request->id],
          $data
      );
      
          if ($request->id)  return $this->success('Berhasil Mengubah Data');
          else return $this->success('Berhasil Menginput Data');
       } catch (\Throwable $th) {
         return $this->error('Gagal, Terjadi Kesalahan' . $th->getMessage(), 400);
       }
    }

    public function edit(Popup $popup)
    {
       return $this->success('Data Foto', $popup);
    }
 
    public function destroy(Popup $popup)
    {
       try {
       
          $popup->delete();
      
          return redirect()->back()->with('success', 'Berhasil Hapus Data', 200);
       } catch (\Throwable $th) {
          return redirect()->back()->with('error', 'Gagal Hapus Data', 400);
       }
    }
 
}
