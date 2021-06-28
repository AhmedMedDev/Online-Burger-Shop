<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
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
        /**
         * User : return dashboard\userDashboad\userProfile
         * Admin : return dashboard\adminDashboad\userProfile
         */

        if (Auth::user()->IsAdmin)
        {
            return view('dashboard\adminDashboard\myProfile');
        }

        return view('dashboard\userDashboad\myProfile');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /**
         * User : return dashboard\userDashboad\editProfile
         * Admin : return dashboard\adminDashboad\editProfile
         */
        
        if (Auth::user()->IsAdmin)
        {
            return view('dashboard\adminDashboard\editProfile');
        }

        return view('dashboard\userDashboad\editProfile');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProfileUpdateRequest $request,$user_id)
    {
        if ($user_id != Auth::user()->id) abort(403);
        
        $request = $request->validated();

        if(isset($request['img']))
        {
            $fileName = $this->saveImage($request['img'], 'images/upload/userAvatar');

            $request['img'] = $fileName;
        }

        else $request['img'] = Auth::user()->img;

        $user = User::where('id',Auth::user()->id)->update( $request );

        // $user = $user->update( $request );

        //$user = auth()->user()->update( $request );

        if($user) return response([
            'status'=> true,
        ]);
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
