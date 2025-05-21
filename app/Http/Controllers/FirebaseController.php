<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use Kreait\Firebase\Auth as FirebaseAuth;
use Kreait\Firebase\Auth\SignInResult\SignInResult;
use Kreait\Firebase\Exception\FirebaseException;
use Google\Cloud\Firestore\FirestoreClient;
use Session;

class FirebaseController extends Controller
{
    public function index()
    {
        //
        $expiresAt = new \DateTime('tomorrow');
        $imageReference = app('firebase.storage')->getBucket()->object("Images/defT5uT7SDu9K5RFtIdl.png");

        if ($imageReference->exists()) {
          $image = $imageReference->signedUrl($expiresAt);
        } else {
          $image = null;
        }

        return view('img',compact('image'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      try {
       
        $expiresAt = new \DateTime('tomorrow');
        $storageObject = app('firebase.storage')->getBucket()->object($firebase_storage_path.$name.'.'.$extension);
        
        if ($storageObject->exists()) {
            $imageURL = $storageObject->signedUrl($expiresAt);
        } else {
            $imageURL = '';
        }
        
        return $imageURL;
      
      } catch (\Exception $e) {
      
          return $e->getMessage();
      }
        //
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $imageDeleted = app('firebase.storage')->getBucket()->object("Images/defT5uT7SDu9K5RFtIdl.png")->delete();
        Session::flash('message', 'Image Deleted');
        return back()->withInput();
    }
}
