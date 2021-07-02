<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAddressRequest;
use App\Http\Requests\UpdateAddressRequest;
use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addresss = Address::where('user_id',Auth::user()->id)->get();

        return view('dashboard\userDashboad\address')
            ->with('addresss',$addresss);
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
    public function store(StoreAddressRequest $request)//Secured
    {
        $request = $request->validated();

        $request['user_id'] = Auth::user()->id;

        $address = Address::create( $request );

        return response([
            'status'=> true,
            'data' => $address
        ]);
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
    public function update(UpdateAddressRequest $request, Address $address)//Secured
    {
        if ($address->user_id != Auth::user()->id) abort(403);
        
        $request = $request->validated();
        
        $address = $address->update( $request );

        return response([
            'status'=> true,
            'data' => $address
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address)//Secured
    {
        if($address->user_id != Auth::user()->id) abort(403);
        
        return $address->delete();
    }
}
