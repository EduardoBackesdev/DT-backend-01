<?php

namespace App\Dtos;

class UserLoginDTO {
    function __construct(
        public string $email, 
        public string $password
    )
    {}

    public function toArray(){
        return [
            'email' => $this->email,
            'password' => $this->password,
        ];
    }
}