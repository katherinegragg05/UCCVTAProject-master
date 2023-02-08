<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Roles;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    { 
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'student_id' => '00000001',
            'role_id'=> 1
        ]);
        $roles = [
            'admin',
            'evaluator',
            'alumi_student'
        ];
        foreach($roles as $key => $value){
            Roles::create([
             'description' => $value
            ]);
        }
    }
}
