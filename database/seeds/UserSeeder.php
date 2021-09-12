<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Mai',
                'email' => 'mai@gmail.com',
                'password' => '456',
                'role_id' => 2,
            ],
            [
                'name' => 'Phuong',
                'email' => 'phuong@gmail.com',
                'password' => '789',
                'role_id' => 1,
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }

        factory(User::class, 20)->create();
    }
}
