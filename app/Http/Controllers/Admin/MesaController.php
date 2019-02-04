<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Mesa;
use App\Mozo;

class MesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mesas = RestaurantDetail::all();

        
        return view('admin.paginas.mesas.index',['mesas'=>$mesas]);
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
        $mesa = new Mesa();

        $mesa->nummesa = $request->nummesa;
        $mesa->descripcion = $request->descripcion;
        $mesa->client_id = $request->client_id;

        $mesa->save();

        return response()->json(['rpta'=>'ok','client_id'=>$mesa->client_id]);
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
        $mesa = Mesa::find($id);

        return response()->json($mesa);
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
        $mesa =  Mesa::find($id);

        $mesa->nummesa = $request->nummesa;
        $mesa->descripcion = $request->descripcion;
        $mesa->client_id = $request->client_id;

        $mesa->save();

        return response()->json(['rpta'=>'ok','client_id'=>$mesa->client_id]);
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
