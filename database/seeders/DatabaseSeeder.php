<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

         // sample admin
         $admin = new \App\Models\User();
         $admin->name = "Admin Project";
         $admin->email = "admin@gmail.com";
         $admin->password = bcrypt("rahasia");
         $admin->role = "admin";
         $admin->save();

         // sample tamu atau pendatang
         $guest = new \App\Models\User();
         $guest->name = "guest Project";
         $guest->email = "guest@gmail.com";
         $guest->password = bcrypt("rahasia");
         $guest->role = "guest";
         $guest->save();
    }
}
