<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dt = Carbon::now();
        DB::table('product')->insert([
            'product_name' => '可樂',
            'explanation' => '預設的產品說明',
            'price'    =>'25',
            'quantity' =>'20',
            'category' => '1',
            'is_del'   => '0',
        ]);
        DB::table('product')->insert([
            'product_name' => '黑松',
            'explanation' => '預設的產品說明',
            'price'    =>'25',
            'quantity' =>'20',
            'category' => '1',
            'is_del'   => '0',
        ]);
    }
}
