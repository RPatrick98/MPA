<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Creating categories from \database\seeds\CategorySeeder');

        DB::table('categories')->insert([ 'name' => 'Klassiek', 'image_url' => 'https://via.placeholder.com/150',  ]);
        DB::table('categories')->insert([ 'name' => 'Jazz', 'image_url' => 'https://via.placeholder.com/150',  ]);
        DB::table('categories')->insert([ 'name' => 'Pop', 'image_url' => 'https://via.placeholder.com/150',  ]);
        DB::table('categories')->insert([ 'name' => 'Rock', 'image_url' => 'https://via.placeholder.com/150',  ]);
        DB::table('categories')->insert([ 'name' => 'Diverse', 'image_url' => 'https://via.placeholder.com/150',  ]);
        
    }
}
