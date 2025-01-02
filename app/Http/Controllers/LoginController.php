<?php

namespace App\Http\Controllers;

use App\Dtos\UserLoginDTO;
use App\Services\LoginService;
use Illuminate\Http\Request;

class LoginController{

    function __construct(private LoginService $loginService)
    {}
    
    public function login (Request $request){
        $loginDTO = new UserLoginDTO(...$request->all());
        $result = $this->loginService->auth($loginDTO);
        return $result;
    }
}