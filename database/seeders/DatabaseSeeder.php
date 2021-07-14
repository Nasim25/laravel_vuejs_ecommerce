<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'name'      =>'Nasim',
            'email'     => 'admin@gmail.com',
            'password'  => Hash::make('12345678'),
        ]);
        
    //    \App\Models\Category::factory(100000)->create();

    }
}
