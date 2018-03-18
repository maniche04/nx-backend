<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'code' => str_random(25),
            'name' => str_random(40),
            'barcode' => str_random(13),
        ]);

        DB::table('products')->insert([
            'code' => str_random(25),
            'name' => str_random(40),
            'barcode' => str_random(13),
        ]);
    }
}
