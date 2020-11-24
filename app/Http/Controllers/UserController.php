<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function editarPerfil(){
        if (Auth::user()){
            $user = User::find(Auth::user()->id);

            if($user){
                return view('editarPerfil')->withUser($user);
            }else{
                return redirect()->back();
            }
            
        }else{
            return redirect()->back();
        }
    }

    public function actualizarPerfil(Request $request){
        $user = User::find(Auth::user()->id);

        if($user){
            $user->name = $request['name'];
            $user->email = $request['email'];

            $user->save();

            return redirect()->back()->with('alert', 'Datos actualizados!');            
        }else{
            return redirect()->back();
        }

    }


}
