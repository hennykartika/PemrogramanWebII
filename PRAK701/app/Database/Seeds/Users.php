<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Users extends Seeder
{
    public function run()
    {
        $all_data = [
            [
                'username' => 'admin',
                'email' => 'admin@admin.com',
                'password' => password_hash('admin', PASSWORD_BCRYPT),
            ],
            [
                'username' => 'henny',
                'email' => 'henny@gmail.com',
                'password' => password_hash('henny', PASSWORD_BCRYPT),
            ],
        ];

        foreach ($all_data as $data) {
            $this->db->table('users')->insert($data);
        }
    }
}
