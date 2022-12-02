<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class DatabaseSeeder extends Seeder
{
    /**      * Seed the application's database.      *      
     * * @return void     
     *  */     public function run()
    {
        Log::info("Esto es una prueba");
        DB::table('users')->insert([[
            'name' => 'Comprar',
            'description' => 'patatas',
            'status' => false,
        ]]);
    }
}
