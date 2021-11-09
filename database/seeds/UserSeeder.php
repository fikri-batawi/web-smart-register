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
        $user   = new User;
        $user->username     = 'admin';
        $user->phone        = '123123';
        $user->gender       = 'L';
        $user->birth_date   = date('Y-m-d');
        $user->address      = "Jl. Gandul 1";
        $user->email        = 'admin@gmail.com';
        $user->password     = Hash::make('admin123');
        $user->role         = 'admin';
        $user->save();
    }
}
