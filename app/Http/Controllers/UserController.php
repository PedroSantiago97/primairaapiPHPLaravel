<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){
       return view('users.create');
    }



    public function store(Request $request){
        //dd($request);
        try{
        User::create([
            'name' => $request-> name,
            'email' => $request-> email,
            'password' => $request-> password
        ]);

        return redirect() ->route('user.create')->with('success' , "Usuário cadastrado com sucesso");
        } catch( Exception $e){
            return back()->witchInput()->with('error' , "Usuário não cadastrado!");
        }
    }

}

