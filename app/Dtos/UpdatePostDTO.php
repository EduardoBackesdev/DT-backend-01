<?php

namespace App\Dtos;

class UpdatePostDTO {

    function __construct(
        public string $title,
        public string $content,
    )
    {}

    public function toArray(){
        return [
            'title' => $this->title,
            'content' => $this->content,
        ];
    }

}