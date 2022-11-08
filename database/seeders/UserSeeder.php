<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate([
            'name'          => 'Super Admin',
            'email'         => 'admin@gmail.com',
            'password'      => Hash::make('admin@gmail.com'),
            'is_admin'      => true,
            'is_approve'    => true,
        ]);
    }
}
