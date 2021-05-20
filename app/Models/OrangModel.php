<?php

namespace App\Models;

use CodeIgniter\Model;

class OrangModel extends Model
{
    protected $table = 'users';
    protected $useTimestamps = true;
    protected $allowedFields = ['username','email'];

    public function search($keyword){
        // $builder = $this->table('orang');
        // $builder->like('nama',$keyword);
        // return $builder;

        return $this->table('users')->like('username',$keyword);
    }
}