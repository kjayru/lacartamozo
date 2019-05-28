<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Booking;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $from = date('Y-m-d');
        $reservas = [];

        for($i=1;$i<=5;$i++){
            $cmd = " + ".$i." days";
            $to = date('Y-m-d', strtotime($from. $cmd));
            $date_arr = explode('-', $to);
            
            $temp = Booking::where('day', $to)->get(); 
            $item = [];
            foreach($temp as $subtemp){
                $subitem = $subtemp;
                $subitem['name'] = $subtemp->user->name;    
                if( empty($subtemp->user->telefono) ){
                    $subitem['cellphone'] = 'no especificado';              
                } else{
                    $subitem['cellphone'] = $subtemp->user->telefono;              
                } 
                if( empty($subtemp->sector) ){
                    $subitem['sector'] = 'no especificado';              
                } else{
                    $subitem['sector'] = $subtemp->sector->name;              
                }
                if( empty($subtemp->estado) ){
                    $subitem['estado'] = 'no especificiado';  
                }else{
                    $subitem['estado'] = $subtemp->estado->name;  
                }
                $item[] = $subitem;
            }

            $reserva=[]; 
            $reserva['data'] = $item;
            $reserva['day'] = $to;
            $reservas[] = $reserva;
        } 
        
        return view('admin.paginas.reservas.index',['reservas'=>$reservas]);
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
