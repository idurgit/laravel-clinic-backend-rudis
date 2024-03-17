<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\User::factory()->create([
            'name' => 'Admin User Rudi',
            'email' => 'rudi@fic15.com',
            'role' => 'admin',
            'password' => Hash::make('12345678'),
            'phone' => '081234567890'
        ]);

        //seeder profile clinic
        \App\Models\ProfileClinic::factory()->create([
            'name' => 'Klinik Rudi',
            'address' => 'Jl. Central Borneo No.7',
            'phone' => '081234567890',
            'email' => 'dr.rudi@gmail.com',
            'doctor_name' => 'dr. Rudi',
            'unique_code' => '123456',
        ]);

        $this->call(DoctorSeeder::class);
    }
}
