<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Sale;
use App\User;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enpreparacion = Sale::where(['salestate_id'=>2, 'typesale_id'=>1])->get();
        $out_enpreparacion = [];
        foreach($enpreparacion as $prep){
            $item = $prep; 
            $user = User::where('id',$prep->user_id)->first();
            $item['usuario'] = $user;
            $out_enpreparacion[] = $item;
        }

        $enviados = Sale::where(['salestate_id'=>5, 'typesale_id'=>1])->get();
        $out_enviados = [];
        foreach($enviados as $env){
            $item = $env;
            $user = User::where('id',$prep->user_id)->first();
            $item['usuario'] = $user;
            $out_enviados[] = $item;
        }
        
        $entregados = Sale::where(['salestate_id'=>6, 'typesale_id'=>1])->get();
        $out_entregados = [];
        foreach($entregados as $ent){
            $item = $ent;
            $user = User::where('id',$prep->user_id)->first();
            $item['usuario'] = $user;
            $out_entregados[] = $item;
        }



        $enpreparacion_ventas = Sale::where(['salestate_id'=>2, 'typesale_id'=>2])->get();
        $out_enpreparacion_ventas = [];
        foreach($enpreparacion_ventas as $prep){
            $item = $prep; 
            $user = User::where('id',$prep->user_id)->first();
            $item['usuario'] = $user;
            $out_enpreparacion_ventas[] = $item;
        }

        $enviados_ventas = Sale::where(['salestate_id'=>5, 'typesale_id'=>2])->get();
        $out_enviados_ventas = [];
        foreach($enviados_ventas as $env){
            $item = $env;
            $user = User::where('id',$prep->user_id)->first();
            $item['usuario'] = $user;
            $out_enviados_ventas[] = $item;
        }
        
        $entregados_ventas = Sale::where(['salestate_id'=>6, 'typesale_id'=>2])->get();
        $out_entregados_ventas = [];
        foreach($entregados_ventas as $ent){
            $item = $ent;
            $user = User::where('id',$prep->user_id)->first();
            $item['usuario'] = $user;
            $out_entregados_ventas[] = $item;
        }

        return view('admin.paginas.pedidos.index',['enpreparacion'=>$out_enpreparacion,
                                            'enviados'=>$out_enviados,
                                            'entregados'=>$out_entregados,
                                            'enpreparacion_ventas'=>$out_enpreparacion_ventas,
                                            'enviados_ventas'=>$out_enviados_ventas,
                                            'entregados_ventas'=>$out_entregados_ventas] );
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
