<?php

// use App\User;
// use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
// use Database\Seeders;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate(); 
        // User::create([
        //     'nama' => 'Teknisi', 
        //     'role' => 'teknisi', 
        //     'email' => 'teknisi@gmail.com', 
        //     'password' => bcrypt('teknisi123'), 
        //     'remember_token' => Str::random(60),
        // ]);

        // \App\User::insert([
        //     'nama'  => 'Teknisi', 
        //     'role'  => 'teknisi',
        //     'email' => 'teknisi@gmail.com', 
        //     'password' => bcrypt('teknisi123'), 
        //     'remember_token' => Null
        // ]);
    }
}
