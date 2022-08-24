<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UsersController extends Controller{

    // public function users(Request $request){
    //     $users = User::all();

    //     return response()->json($users);
    // }
    public function register(Request $request){
        $user = new User();

        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password); //para guardar la contraseña cifrada

        $user->save();
        Auth::login($user);
        return redirect(route("privada"));
   }

    public function login(Request $request){
    
        // $response = ["status" =>0, "msg"=>""];

        // $data =json_decode($request->getContent());
        // $user = User::where('email', $data->email)->first();
        

        // if($user){
        //     if(Hash::check($data->password, $user->password)){
        //         $token = $user->createToken("example"); //token universal

        //         $response["status"] = 1;
        //         $response["msg"] = $token -> plainTextToken;

        //         return redirect('privada');

        //     }else{
        //         $response["msg"] = "Credenciales incorrectas";
        //     }

        // }else{
        //     $response["msg"] = "Usuario no encontrado";
        // }

        // return response()->json($response);
        
        
        
        $credenciales = [
            "email" => $request->email,
            "password" => $request-> password,
        ];
        if (Auth::attempt($credenciales)){
            $request->session()->regenerate();
            return redirect('privada');
            echo json($credenciales);

        }else{
            return redirect('login');
            echo json($credenciales);
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()-> regenerateToken();

        return redirect(route('login'));
    }

   
}
