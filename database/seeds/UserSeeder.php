<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i=0; $i < 1; $i++) {

            User::insert([
                'name' => 'MH OVI',
                'email' => "example{$i}@email.com",
                'password' =>bcrypt('password'),
            ]);

        }



    }
}
