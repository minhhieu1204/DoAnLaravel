<?php

use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username'=>Str::random(10),
            'password'=>Str::random(10),
            'email'=>Str::random(10).'@gmail.com',
            'ngaysinh'=>'2000-01-01',

        ]);
        
    }
}
