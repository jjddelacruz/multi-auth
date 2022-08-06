<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'name' => 'Administrator',
            'email' => 'Administrator@test.com',
            'password' => Hash::make('12345678'),
            'role_id' => "1",
            'student_address' => "1",
            'student_licence_number' => "",
            'teacher_qualifications' => "112313154",
        ]);
        User::create([
            'name' => 'Student',
            'email' => 'Student@test.com',
            'password' => Hash::make('12345678'),
            'role_id' => "2",
            'student_address' => "1",
            'student_licence_number' => "",
            'teacher_qualifications' => "112313154",
        ]);
        User::create([
            'name' => 'Teacher',
            'email' => 'Teacher@test.com',
            'password' => Hash::make('12345678'),
            'role_id' => "3",
            'student_address' => "1",
            'student_licence_number' => "",
            'teacher_qualifications' => "112313154",
        ]);
        User::create([
            'name' => 'Dispatcher',
            'email' => 'Dispatcher@test.com',
            'password' => Hash::make('12345678'),
            'role_id' => "4",
            'student_address' => "1",
            'student_licence_number' => "",
            'teacher_qualifications' => "112313154",
        ]);
        User::create([
            'name' => 'Random',
            'email' => 'Random@test.com',
            'password' => Hash::make('12345678'),
            'role_id' => "5",
            'student_address' => "1",
            'student_licence_number' => "",
            'teacher_qualifications' => "112313154",
        ]);
    }
}
