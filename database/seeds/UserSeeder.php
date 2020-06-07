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

        User::create(['name' => 'user01', 'email' => 'fwd2018man@mail.ru', 'pwd' => 'user01']);
        User::create(['name' => 'user02', 'email' => 'user02@gmail.com', 'pwd' => 'user02']);
    }
}
