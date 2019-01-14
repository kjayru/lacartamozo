<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Client;
use App\Franchise;
use App\ClientPhoto;
use App\ClientConfiguration;
use App\ClientService;
use App\Service;
use App\Configuration;
class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        //$users = CustomerDetail::all();
        //$clientes = RestaurantDetail::where('customer_detail_id',$user->id)->get();
        $clientes = Client::all();
        $franchises = Franchise::all();
        $services = Service::all();
      
        $configurations = Configuration::all();
        return view('admin.paginas.clientes.index',['clients'=>$clientes,'franchises'=>$franchises,'services'=>$services,'configurations'=>$configurations]);
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
       

        //cover
        $file = $request->file('cover');
            
        $input['img1'] = time().'.'.$file->getClientOriginalExtension();
        $destinationPath = public_path('/storage/client');
        $file->move($destinationPath, $input['img1']);

        //avatar
        $file2 = $request->file('logo');
            
        $input['img2'] = time().'.'.$file2->getClientOriginalExtension();
        $destinationPath2 = public_path('/storage/client');
        $file2->move($destinationPath2, $input['img2']);

        $client = new client();

        $client->name = $request->name;
        $client->address = $request->address;
        $client->country = $request->country;
        $client->city = $request->city;
        $client->province = $request->province;
        $client->cellphone = $request->cellphone;
        $client->email = $request->email;
        $client->cover =  $input['img1'];
        $client->logo =  $input['img2'];
        $client->sexo = $request->sexo;
        $client->cashier = $request->cashier;
        $client->status =2;
        $client->numesas =10;
        $client->franchise_id = $request->franchise_id;
        $client->latitude = $request->latitude;
        $client->longitude = $request->longitude;

        $client->save();

        return response()->json(['rpta' => 'ok','client_id'=>$client->id]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $services = Service::all();
      
        $configurations = Configuration::all();
        $clientes = Client::where('franchise_id',$id)->get();
        $franchise_id = $id;
        
        return view('admin.paginas.clientes.index',['clients'=>$clientes,'franchise_id'=>$franchise_id,'services'=>$services,'configurations'=>$configurations]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Client::find($id);
        $services = ClientService::where('client_id',$id)->get();
        $configurations = ClientConfiguration::where('client_id',$id)->get();
        $fotos = ClientPhoto::where('client_id',$id)->get();
        return response()->json(['cliente'=>$cliente,'services'=>$services,'configurations'=>$configurations,'fotos'=>$fotos]);
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
        $user_id = Auth::id();

        //cover
        $file = $request->file('cover');
            
        $input['img1'] = time().'.'.$file->getClientOriginalExtension();
        $destinationPath = public_path('/storage/client');
        $file->move($destinationPath, $input['img1']);

        //avatar
        $file2 = $request->file('logo');
            
        $input['img2'] = time().'.'.$file2->getClientOriginalExtension();
        $destinationPath2 = public_path('/storage/client');
        $file2->move($destinationPath2, $input['img2']);


        $client = Client::find($id);

        $client->name = $request->name;
        $client->address = $request->address;
        $client->country = $request->country;
        $client->city = $request->city;
        $client->province = $request->province;
        $client->cellphone = $request->cellphone;
        $client->email = $request->email;
        $client->cover =  $input['img1'];
        $client->logo =  $input['img2'];
        $client->sexo = $request->sexo;
        $client->cashier = $request->cashier;
        $client->status =2;
        $client->franchise_id = $request->franchise_id;
        $client->latitude = $request->latitude;
        $client->longitude = $request->longitude;

        $client->save();

        return response()->json(['rpta' => 'ok']);
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

    public function foto(Request $request){


        if($request->file('foto')){
            foreach ($request->file('foto') as $photo) {
                $file = $photo;
            
                $input['imagename'] = time().'.'.$file->getClientOriginalExtension();
                $destinationPath = public_path('/storage/client');
                $image->move($destinationPath, $input['imagename']);

                $image = new ClientPhoto();
                $image->client_id = $request->client_id;
                $image->photo = $input['imagename'];
                $image->save();

            }

        }
    }

    public function fotoupdate(Request $request, $id){
       // ClientPhoto::where('client_id',$id)->delete();

        if($request->file('foto')){
           
            foreach ($request->file('foto') as $photo) {
                $file = $photo;
            
                $input['imagename'] = time().'.'.$file->getClientOriginalExtension();
                $destinationPath = public_path('/storage/client');
                $file->move($destinationPath, $input['imagename']);

                $image = new ClientPhoto();
                $image->client_id = $request->client_id;
                $image->photo = $input['imagename'];
                $image->save();
               
            }
            
        }

        return response()->json(['rpta'=>'ok']);
    }


    public function configuration(Request $request){

        foreach($request->configuration as $configura){
           
            $cf = new ClientConfiguration();
            $cf->client_id = $id;
            $cf->configuration_id = $configura;
            $cf->status = 2;
            $cf->save();

        } 
        
        return response()->json(['rpta'=>'ok']);

    }

    public function configurationUpdate(Request $request, $id){
        ClientConfiguration::where('configuration_id',$id)->delete();
        foreach($request->configuration as $configura){
           
            $cf = new ClientConfiguration();
            $cf->client_id = $id;
            $cf->configuration_id = $configura;
            $cf->status = 2;
            $cf->save();

        } 
        
        return response()->json(['rpta'=>'ok']);
       
    }

    public function service(Request $request){
        foreach($request->service as $servicio){
           
            $servicios = new ClientService();
            $servicios->client_id = $id;
            $servicios->service_id = $servicio;
            $servicios->status = 2;
            $servicios->save();

        } 
        
        return response()->json(['rpta'=>'ok']);
    }

    public function serviceUpdate(Request $request, $id){
        
        ClientService::where('client_id',$id)->delete();
        foreach($request->service as $servicio){
           
            $servicios = new ClientService();
            $servicios->client_id = $id;
            $servicios->service_id = $servicio;
            $servicios->status = 2;
            $servicios->save();

        } 
        
        return response()->json(['rpta'=>'ok']);
    }

    public function cambioestado(Request $request, $id){

        $client = Client::find($id);
        $client->status = $request->status;

        $client->save();

        return response()->json(['rpta'=>'ok']);
    }
}
