<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classification;
use App\Client;
use App\ClientPoint;
use App\Franchise;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class MiPosicionPuntosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $classifications = Classification::all();
        $clients = Client::all();

        $user_id = Auth::id();

        //agergar mi abono  y puntos utilizados
        $clientPoint = ClientPoint::where('client_id',$user_id)->first();
        if( !$clientPoint ){
            $clientPoint = new ClientPoint(); 
            $clientPoint->client_id = $user_id;
            $clientPoint->point_used = 0;
            $clientPoint->point_enabled = 0;
        }
        $clients = ClientPoint::all()->sortByDesc("amount");
        $pos_gen = 0;
        $pos_cat = 0; 
        $ii_gen = 0;
        $ii_cat = 0;

        $role = $clientPoint->client->roles;
        $c2 = $clientPoint->client->franchise->classification_id;
        foreach($clients as $client)
        {
            if($client->client_id == $clientPoint->client_id){
                $pos_cat = $ii_cat;
                $pos_gen = $ii_gen;
            }

            $c1 = $client->client->franchise->classification_id;
            if( $c1 == $c2 ){
                $ii_cat = $ii_cat + 1;
            }            
            $ii_gen = $ii_gen + 1;
        }

        $clientPoint->pos_gen = $pos_gen;
        $clientPoint->pos_cat = $pos_cat;

        return view('admin.paginas.miposicionpuntos.index', ['clasificaciones' => $classifications, 
        'clients' => $clients, 'micuenta' => $clientPoint, 'user_id' => $user_id, 'role'=>$role]);
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
    }
}
