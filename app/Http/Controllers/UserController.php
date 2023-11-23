<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'nombres' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);
        $user = new User();
        $user->nombres = $request->nombres;
        $user->apellidos = $request->apellidos;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->telefono = $request->telefono;
        $user->usuario = $request->usuario;
        $user->fecha_nacimiento = $request->fecha_nacimiento;
        $direccionIMG = $request->file('imagen')->store('users', 'public');
        $origen = "http://localhost:5300/public/api/imagenes/";
        $cadenaTotal = $origen . $direccionIMG;
        $user->imagen = $cadenaTotal;
        $user->save();
        return response()->json([
            "status" => 200,
            "msg" => "el usuario fue creado correctamente",
            "logueado" => true
        ], 201);
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $user = User::where('email', '=', $request->email)->first();
        if (isset($user->id)) {
            //dd($user->id);
            if (Hash::check($request->password, $user->password)) {
                //dd($user->password);
                $token = $user->createToken("auth_token")->plainTextToken;
                return response()->json([
                    "status" => 200,
                    "msg" => "logueado correctamente",
                    "token" => $token

                ], 200);
            } else {
                //dd($user->password);
                return response()->json([
                    "status" => 400,
                    "msg" => "password incorrecta"
                ], 400);
            }
        } else {
            return response()->json([
                "status" => 400,
                "msg" => "usuario desconocido"
            ], 400);
        }
    }
    public function showUser()
    {
        return response()->json([
            "status" => 200,
            "msg" => "usuario correcto",
            "usuario" => auth()->user()
        ]);
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response()->json([
            "status" => 200,
            "msg" => "cierre de sesion exitoso"
        ], 200);
    }
}
