<?php

namespace App\Services;

use App\Dtos\PostDTO;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use Exception;

class RegisterPostService{
    
    private $dto;
    function __construct($request)
    {
        $array = $request->all();
        $array ['author'] = Auth::user()->name;
        $this->dto = new PostDTO(...$array);
    }

    public function post(){
        try{
            Post::create($this->dto->toArray());
            return response()->json([
                'message' => 'Dado inserido com sucesso',
                'codigo' => '1'
            ], 200);
        } catch(Exception $e){
            return response()->json([
                'Message:' => 'Error:'.$e->getMessage(),
                'Codigo:' => '0'
            ]) ;
        }
    }
    
}