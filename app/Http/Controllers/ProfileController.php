<?php

namespace App\Http\Controllers;

use App\Traits\ImgUpload;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Images upload traits 
    |--------------------------------------------------------------------------
    |
    | This Trait to save img in PC
    |
    */

    use ImgUpload;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard\userDashboad\userProfile');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('dashboard\userDashboad\editProfile');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request = $request->only([
           'Fname',
           'Lname',
           'jobTitle',
           'bio',
           'img',
        ]);

        if(isset($request['img']))
        {
            $fileName = $this->saveImage($request['img'], 'images/upload/userAvatar');

            $request['img'] = $fileName;
        }

        else $request['img'] = Auth::user()->img;
        
        User::where('id',Auth::user()->id)->update( $request );

        return redirect()->back();
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
    }
}
