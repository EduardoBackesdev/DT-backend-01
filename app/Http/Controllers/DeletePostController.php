<?php

namespace App\Http\Controllers;

use App\Services\DeletePostService;
use Illuminate\Http\Request;

class DeletePostController
{
    function __construct(private DeletePostService $deletePostService)
    {}

    public function deletePost(int $id){
        return $this->deletePostService->deletePost($id);
    }
}
