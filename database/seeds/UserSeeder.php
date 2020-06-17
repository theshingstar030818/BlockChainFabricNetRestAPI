<?php

use App\User;
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
        DB::table('users')->delete();

        User::create(['name' => 'admin', 'email' => 'admin@gmail.com', 'password' => bcrypt('admin123'), 'is_enabled' => true, 'is_admin' => true]);
        User::create(['name' => 'user01', 'email' => 'user01@mail.ru', 'password' => bcrypt('user01123'), 'is_enabled' => true, 'is_admin' => false]);
        User::create(['name' => 'user02', 'email' => 'user02@gmail.com', 'password' => bcrypt('user02123'), 'is_enabled' => true, 'is_admin' => false]);
    }
}
