<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Tinashe Tomu';
        $user->email = 'tinashetomu99@gmail.com';
        $user->password = bcrypt('tinashetomu');
        $user->save();
        $user->roles()->attach(Role::where('name', 'user')->first());

        $admin = new User;
        $admin->name = 'Munashe Murimi';
        $admin->email = 'tinashe@gmail.com';
        $admin->password = bcrypt('munashemurimi');
        $admin->save();
        $admin->roles()->attach(Role::where('name', 'admin')->first());
    }
}
