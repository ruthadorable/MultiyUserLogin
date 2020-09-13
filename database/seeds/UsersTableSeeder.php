<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'role_id'=>'0',
            'firstname'=>'Donia',
            'lastname'=>'Kazi',
            'username'=>'Membre',
            'email'=>'doniakazi@gmail.com',
            'password'=>bcrypt('rootmember'),
        ]);


        DB::table('users')->insert([
            'role_id'=>'1',
            'firstname'=>'Ruth',
            'lastname'=>'adorable',
            'username'=>'Admin',
            'email'=>'ruthadorable@live.com',
            'password'=>bcrypt('rootadmin'),
        ]);

        DB::table('users')->insert([
            'role_id'=>'2',
            'firstname'=>'Didier',
            'lastname'=>'Servay',
            'username'=>'Producteur',
            'email'=>'didierservay@gmail.com',
            'password'=>bcrypt('rootproducteur'),
        ]);








    }
}
