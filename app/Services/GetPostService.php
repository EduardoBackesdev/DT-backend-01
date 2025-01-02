<?php

namespace App\Services;

use App\Models\Post;
use Exception;

class GetPostService{

    public function getPost(){
        try {
            $query = Post::select('*')->orderByRaw('1 desc');
            return  $query->get();
        } catch (Exception $e) {
            return response()->json([
                'Message' => 'Error:'. $e->getMessage(),
                'Codigo' => '0'
            ], 500);
        }
    }

    public function getPostId(int $id){
        try {
            $query = Post::whereId($id)->select('*');
            return $query->get();
        } catch (Exception $e) {
            return response()->json([
                'Message' => 'Error:'. $e->getMessage(),
                'Codigo' => '0'
            ], 500);
        }
    }

}