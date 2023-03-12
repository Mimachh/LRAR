<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

        DB::table('roles')->insert([
            ['id' => 1, 'name' => 'Admin'],
            ['id' => 2,'name' => 'Associé'],
            ['id' => 3,'name' => 'Salarié'],
            ['id' => 4,'name' => 'Visiteur'],
        
        ]);

        DB::table('users')->insert([
            'name' => 'Karl',
            'email' => 'karl@gmail.com',
            'role_id' => '2',
            'password' => '$2y$10$IPv0PIci0HR04KiyrWs4JuzN6aSz7L7PbOuxiRU6V1IuCfaVcDK8C',
        ]);
        
    }
}
