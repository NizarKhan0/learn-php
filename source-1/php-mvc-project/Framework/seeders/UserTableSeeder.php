<?php

namespace Framework\Seeders;

class UserTableSeeder extends DatabaseSeeder
{
    public function run()
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@demo.com',
                'password' => password_hash('password', PASSWORD_DEFAULT),
                'state' => 'Johor',
                'city' => 'Pontian',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            // Add more users as needed
        ];

        foreach ($users as $user) {
            $this->db->query(
                "INSERT INTO users (name, email, password, state, city, created_at) 
                 VALUES (:name, :email, :password, :state, :city, :created_at)",
                $user
            );
        }

        echo "Users inserted successfully.\n";
    }
}
?>