<?php

use Illuminate\Database\Seeder;
use EloquentORM\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'Maria Victoria Gamez',
            'email' => 'vicky-ghm@gmail.com',
            'gender' => 'f',
        ]);

        factory(User::class,99)->create();
    }
}
