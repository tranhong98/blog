<?php

use App\Models\User;
use App\Models\Media;
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
            $userCreated = User::create($user);

            factory(Media::class)->create([
                'media_type' => User::class,
                'media_id' => $userCreated->id,
            ]);
        }

        factory(User::class, 10)->create()->each(function ($user) {
            factory(Media::class)->create([
                'media_type' => User::class,
                'media_id' => $user->id,
            ]);
        });
    }
}
