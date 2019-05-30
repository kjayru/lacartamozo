<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function autocomplete()
    {     
        $users = User::all();
        $out = [];
        foreach($users as $user){   
            $item = [];
            $item['name'] = $user->name." ".$user->lastname;
            $item['phone'] = $user->telefono;
            $out[] = $item;
        } 
        return json_encode(['rpta' => "ok", 'data' => $out]);
    }
}
