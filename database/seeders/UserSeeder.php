<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
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
        //
        (new User)->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin',
            'role_id' => (new Role)->where('title', '=', 'admin')->first('id')['id'],
            'active' => 1,
        ]);
        (new User)->create([
            'name' => 'teacher alex',
            'email' => 'teacher@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'teacher',
            'role_id' => (new Role)->where('title', '=', 'admin')->first('id')['id'],
            'active' => 1,
        ]);
        (new User)->create([
            'name' => 'Johnathan',
            'email' => 'Johnathan@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'student',
            'role_id' => (new Role)->where('title', '=', 'admin')->first('id')['id'],
            'active' => 1,
        ]);
    }
}
