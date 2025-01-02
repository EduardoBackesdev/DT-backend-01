<?php

namespace App\Http\Controllers;

use App\Services\RegisterPostService;
use Illuminate\Http\Request;

class RegisterPostController
{
    public function post(Request $request){
        $postService = new RegisterPostService($request);
        $result = $postService->post();
        return $result;
    }
    
}
