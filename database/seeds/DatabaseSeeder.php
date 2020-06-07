<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
    }
}


class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(['name' => 'user01', 'email' => 'fwd2018man@mail.ru', 'pwd' => 'user01']);
        User::create(['name' => 'user02', 'email' => 'user02@gmail.com', 'pwd' => 'user02']);
    }

}