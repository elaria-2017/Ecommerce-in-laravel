<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'product_name'=>'Fresh wahing machine ',
            'price'=>'1600',
            'image'=>'https://be.fresh.com.eg/media/catalog/product/cache/6fdb9282313a7e48374fe05a5418029a/f/i/file_46_3.jpg',
        ]);
    }
}
