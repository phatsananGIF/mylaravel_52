<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\user();
        $user->name = 'gif';
        $user->email = 'gifpat@gmail.com';
        $user->password = 'gif';
        $user->save();
    }
}
