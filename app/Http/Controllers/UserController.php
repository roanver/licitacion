<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;



class UserController extends Controller
{
    public function index(){
        $usuarios = User::all(); //User::withTrashed()->get();; 

        return view('user.users', compact('usuarios'));
    }

    public function editView($id){

        $usuario = User::where('id', $id)->first();

        $user = $usuario->toArray();

        //dd($user);

        return view('user.edit', compact('user'));
    }

    public function edit($id, Request $request){

        $user = User::find($id);

        //$user = $use->toArray(); 

        $name = $request->Input('name');
        $email = $request->Input('email');
        $password = $request->Input('password');

     //dd($id);
        $this->validate($request, [
            'email' => 'email|unique:users',
        ]);

        if (!$password) {

            $user->name= $name; 
            $user->email=$email;
            $user->save();
      
        } else {
        
            $user->name= $name; 
            $user->email=$email;
            $user->password= $password;
            $user->save();
        }

        return redirect()->back()->with('status', 'Usuario editado exitosamente');
    }

    public function delete($id){

        $usuario = User::find($id);

        if($usuario){
            $usuario->delete();
        }
        
        return redirect()->back()->with('status', 'Usuario eliminado correctamente');
    }
    
}