<?php

namespace App\Dtos;

class PostDTO{

    function __construct(
        public string $title,
        public string $content,
        public string $author
    )
    {}

    public function toArray(){
        return [
            'title' => $this->title,
            'content' => $this->content,
            'author' => $this->author
        ];
    }
}