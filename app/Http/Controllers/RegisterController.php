<?php

namespace App\Http\Controllers;

use App\Dtos\UserRegisterDto;
use App\Services\RegisterService;
use Illuminate\Http\Request;

class RegisterController {
    function __construct(private RegisterService $registerService)
    {}
    public function register(Request $request){
        $dto = new UserRegisterDto(...$request->all());
        $result = $this->registerService->register($dto);
        return $result;
    }
}