<?php

namespace App\Dtos;

use Illuminate\Support\Facades\Hash;

class UserRegisterDto {

    private string $passHash;

    public function __construct(
        public string $name, 
        public string $email, 
        public string $password)
    {
        $this->passHash = Hash::make($this->password);
    }

    public function toArray(){
        return [
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->passHash,
        ];
    }
}