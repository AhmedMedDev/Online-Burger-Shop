<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFavoriteRequest;
use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FavoriteController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('CartNotEmpty')->except('store');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()//Secured
    {
        $favorites = DB::table('favorites')
        ->join('products','favorites.product_id','=','products.id')
        ->select('products.*','favorites.id','favorites.product_id','favorites.user_id')
        ->where('favorites.user_id',Auth::user()->id)
        ->get();
        
        return view('dashboard\userDashboad\favorite',[
            'favorites' => $favorites
        ]);
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
    public function store(StoreFavoriteRequest $request)//Secured
    {
        //if ($request['user_id'] != Auth::user()->id) abort(403);

        $request = $request->validated();
        
        $favorite = Favorite::create( $request ); 

        return response()->json([
            'status' => true ,
            'data' => $favorite ,
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
    public function destroy(Favorite $favorite)//Secured
    {
        if ($favorite->user_id != Auth::user()->id) abort(403);

        return $favorite->delete();
    }
}
