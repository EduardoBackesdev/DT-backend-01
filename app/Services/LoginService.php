<?php

namespace App\Services;

use App\Dtos\UserLoginDTO;
use Illuminate\Support\Facades\Auth;
use Exception;

class LoginService {

    public function auth(UserLoginDTO  $userLoginDTO){
        try{
            if (!Auth::attempt($userLoginDTO->toArray())){
                return response()->json([
                    'Message'=> 'Usuario ou senha incorreta'
                ], 401);
            };
        }catch(Exception $e){
            return response()->json([
                'message' => 'Erro durante a inserção dos dados: '.$e->getMessage(),
                'codigo' => '0'
            ]);
        }  
        /** @var \App\Models\User $user **/
        $user = Auth::user();
        $token = $user->createToken('access_token')->plainTextToken;

        return response()->json([
            'token' => $token,
            'Usuario' => $user->name
        ], 200);

    }


}