<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\Status;
use App\Models\User;
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
        User::create([
            'nama'      => 'Admin',
            'role'      => '1',
            'username'  => 'Admin',
            'password'  => 'Admin'
        ]);
        User::create([
            'nama'      => 'User',
            'role'      => '2',
            'username'  => 'User',
            'password'  => 'User'
        ]);

        Status::create([
            'nama'  => 'Pesan'
        ]);
        Status::create([
            'nama'  => 'Konfirmasi'
        ]);
        Status::create([
            'nama'  => 'Selesai'
        ]);
    }
}
