<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Franchise;


class FranchiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $paises = Pais::orderBy('Pais','asc')->get();

        $franquicias = Franchise::orderBy('id','desc')->paginate(10);

       
                
        return view('admin.paginas.franquicias.index',['franquicias'=>$franquicias]);
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
        $user_id = Auth::id();
        $franchise = Franchise::find($id);

       

        return response()->json($franchise);
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
        $franchise = Franchise::find($id);

        $franchise->names = $request->name;
        $franchise->address = $request->address;
        $franchise->city = $request->city;
        $franchise->province = $request->province;
        $franchise->cellphone = $request->cellphone;
        $franchise->mail = $request->mail;

        //$franchise->latitude = $request->latitude;
        //$franchise->longitude = $request->longitude;

        $franchise->save();

        return response()->json(['person' => $franchise]);
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

    public function getCiudad($codigo){

        //$ciudades = Ciudad::where('Paises_Codigo',$codigo)->orderBy('idCiudades','asc')->get();

        //return response()->json(['ciudades'=>$ciudades]);
    }
    
    
    public function demotab(){
        
        return view('admin.paginas.franquicias.tabs');
    }

    public function cambioestado(Request $request, $id){

        $franchise = Franchise::find($id);
        $franchise->status = $request->status;

        $franchise->save();

        return response()->json(['rpta'=>'ok']);
    }
}
