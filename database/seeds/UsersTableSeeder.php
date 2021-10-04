<?php

use App\User;
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
        User::truncate();

        User::create([
            'name'     => 'Thushara Nuwan Kalinga',
            'email'    => 'thusharakalinga@gmail.com',
            'password' => bcrypt('admin'),
            'is_admin' => true,
        ]);
    }
}
