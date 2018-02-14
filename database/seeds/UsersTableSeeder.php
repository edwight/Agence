<?php

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();

        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_admin);

        for ($i=0; $i < 10 ; $i++) {
            $user = new User();
            $user->name = 'User'.str_random(10);
            $user->email = str_random(10).'@example.com';
            $user->password = bcrypt('secret');
            $user->save();
            $user->roles()->attach($role_user);
        }      
        
    }
}
