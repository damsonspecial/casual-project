<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory(10)->Create();
        Category::factory(10)->create();
      //User::Create([
        //'name' => 'Atiaro Damilola',
        //'email' => 'damsonspecial@gmail.com',
       // 'password' => Hash::make('secret'),


      //]);
        

      
    }
}
