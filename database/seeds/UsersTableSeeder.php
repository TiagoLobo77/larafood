<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Tiago Batista',
            'email' => 'tiago_batista77@outlook.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
