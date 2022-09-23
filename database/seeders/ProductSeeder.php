<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->command->info('Creating products from \database\seeds\ProductSeeder');

        DB::table('products')->insert(['category_id' => 1, 'price' => 3.23, 'name' => 'e-book: the art of deseption', 'image_url' => 'https://via.placeholder.com/150', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.' ]);
        DB::table('products')->insert(['category_id' => 2, 'price' => 3.23, 'name' => 'thriller: the 100', 'image_url' => 'https://via.placeholder.com/150', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'  ]);
        DB::table('products')->insert(['category_id' => 3, 'price' => 3.23, 'name' => 'bio: mark zuckerberg', 'image_url' => 'https://via.placeholder.com/150', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'  ]);
        DB::table('products')->insert(['category_id' => 4, 'price' => 3.23, 'name' => 'studie: design patterns in software engineering', 'image_url' => 'https://via.placeholder.com/150', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'  ]);
        DB::table('products')->insert(['category_id' => 5, 'price' => 3.23, 'name' => 'ereader: Kobo H20', 'image_url' => 'https://via.placeholder.com/150', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'  ]);
    }
}
