<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('departments')->insert([
            'name_department'=> 'admin',
            'created_at' => now()
        ]);

        DB::table('users')->insert([
            'first_name'=> 'admin',
            'last_name'=> 'admin',
            'gender'=> 'female',
            'email'=> 'admin@admin.com',
            'role'=> "admin",
            'password' => Hash::make('admin'),
            'department_id'=> 1,
            'remember_token' => Str::random(60),
            'created_at' => now()
        ]);
    }
}
