<?php

use Illuminate\Database\Seeder;
use App\User;
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
            'name' => 'example_name',
            'username' => 'userexample',
            'email' => 'example@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        factory(User::class, 10)->create();
    }
}
