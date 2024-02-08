<?php

namespace Database\Seeders;

use Faker\Guesser\Name;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

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
                'name' => 'Thomas',
                'email' => 'thomassalvaterra@gmail.com',
                'password' => 'prova123',
            ],
        ];
        foreach ($users as $user) {
            $newUser = new User();
            $newUser->name = $user["name"];
            $newUser->email = $user["email"];
            $newUser->password = Hash::make('prova123');
            $newUser->save();
        }
    }
}
