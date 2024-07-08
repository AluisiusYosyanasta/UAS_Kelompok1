<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['name', 'email', 'password'];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    /**
     * Find a user by email
     *
     * @param string $email
     * @return array|null
     */
    public function findUserByEmail(string $email)
    {
        return $this->where('email', $email)->first();
    }

    /**
     * Verify user credentials
     *
     * @param string $email
     * @param string $password
     * @return bool|array
     */
    public function verifyUserCredentials(string $email, string $password)
    {
        $user = $this->findUserByEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }

        return false;
    }

    public function insertRegister($data){
        return $this->insert($data);
    }
}
