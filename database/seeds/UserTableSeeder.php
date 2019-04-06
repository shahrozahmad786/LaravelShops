<?php

use App\Role;
use App\User;
use App\Profile;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1= Role::create([
            'name'=>'admin',
            'display_name'=>'admin',


        ]);


        $role2= Role::create([
            'name'=>'user',
            'display_name'=>'user',


        ]);

        $user1 =User::create([
              
            'email'=>'admin@admin.com', 
            'password'=>bcrypt('123456'),
            'role_id'=>$role1->id,

        ]);
        $user1->roles()->attach($role1->id);
         
        $user2 =User::create([
              
            'email'=>'testuser@gmail.com', 
            'password'=>bcrypt('123456'),
            'role_id'=>$role2->id,

        ]);
        $user2->roles()->attach($role2->id);


        
        $profile=Profile::create([
         
            'user_id'=>$user2->id,  
           ]);
   


    }
}
