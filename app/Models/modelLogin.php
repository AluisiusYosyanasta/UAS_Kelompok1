<?php

namespace App\Models;

use CodeIgniter\Model;

class modelLogin extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['email', 'password'];

    public function getUserByEmail($email){
        return $this->where('email', $email)->first();
    }

}
