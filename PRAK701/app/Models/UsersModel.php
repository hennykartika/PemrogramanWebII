<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $allowedFields    = ['username', 'email', 'password'];

    public function checkLogin($username, $password)
    {
        $user = $this->where('username', $username)
            ->first();

        if ($user && password_verify($password, $user->password)) {
            return $user;
        }

        return $user;
    }
}
