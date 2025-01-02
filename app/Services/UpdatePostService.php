<?php 

namespace App\Services;

use App\Models\Post;
use Exception;
use App\Dtos\UpdatePostDTO;

class UpdatePostService{

    public function updatePost($id, UpdatePostDTO $updatePostDTO){
        try {
           if(!Post::whereId($id)->update(['title' => $updatePostDTO->title,'content' => $updatePostDTO->content])){
                return response()->json([
                    'Message' => 'Erro ao tentar atualizar postagem',
                    'Codigo' => '0'
                ]);
           }
            return response()->json([
                'Message' => 'Postagem atualizada com sucesso',
                'Codigo' => '1'
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'Message' => 'Error:'. $e->getMessage(),
                'Codigo' => '0'
            ], 500);
        }

    }



}