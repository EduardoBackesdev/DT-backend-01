<?php

namespace App\Services;

use App\Models\Post;
use Exception;

class DeletePostService{
    public function deletePost (int $id){
        try {
            if(!Post::whereId($id)->delete()){
                return response()->json([
                    'Message' => 'Erro ao tentar excluir postagem',
                    'Codigo' => '0'
                ]);
            }
            return response()->json([
                'Message' => 'Postagem excluida com sucesso',
                'Codigo' => '1'
            ],200);

        } catch (Exception $e) {
            return response()->json([
                'Message' => 'Error:'. $e->getMessage(),
                'Codigo' => '0'
            ], 500);
        }
    }
}