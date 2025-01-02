<?php 

namespace App\Services;

use App\Dtos\UserRegisterDto;
use App\Models\User;
use Exception;

class RegisterService{

    public function register(UserRegisterDto $userDto){
        try{
            User::create($userDto->toArray());
            return response()->json( [
                'message' => 'Sucesso ao inserir dados',
                'codigo' => '1'
              ], 200);
        }
        catch(Exception $e){
            return response()->json([
                'message' => 'Erro durante a inserção dos dados: '.$e->getMessage(),
                'codigo' => '0'
            ]);
        }
       
    }

}