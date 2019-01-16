<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\MenuClient;

use App\Menu;
use App\CLient;
use App\Category;
use App\Ingredient;
class MenuClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\MenuClient  $menuClient
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Categories::where('client_id',$id)->get();
        $ingredient = Ingredient::all();
       
        return view('admin.paginas.productoscarta.index',['menus'=>$categories->menus,'categorias'=>$categories,'ingredientes'=>$ingredient]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MenuClient  $menuClient
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
     * @param  \App\MenuClient  $menuClient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MenuClient  $menuClient
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
