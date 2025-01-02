<?php

namespace App\Http\Controllers;

use App\Services\UpdatePostService;
use Illuminate\Http\Request;
use App\Dtos\UpdatePostDTO;

class UpdatePostController
{
    function __construct(private UpdatePostService $updateService)
    {}

    public function update(int $id, Request $request){
        $dto = new UpdatePostDTO(...$request->all());
        return  $this->updateService->updatePost($id, $dto);
    }
}
