<?php

namespace App\Http\Controllers;

use App\Services\GetPostService;

class GetPostController
{
    function __construct(
        private GetPostService $getPostService,
        private GetPostService $getPostIdService)
    {}

    public function getPost(){
        return $this->getPostService->getPost();
    }

    public function getPostId($id){
        return $this->getPostIdService->getPostId($id);
    }
}
