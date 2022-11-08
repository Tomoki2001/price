<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
                'name' => '時計',
                'price' => '5000',
                'url' => 'https.----',
                'user_id' =>'1',
                'email' =>'jsjaia@gmail.com',
         ]);
    }
}
