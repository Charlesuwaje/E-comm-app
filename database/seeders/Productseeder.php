<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Productseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
            'name'=> 'iphone 12' ,
            'price'=> '250,000',
            'category'=> 'mobile',
            'description'=> ' Apple IPhone 12 6.1 (6GBRAM + 256gb ROM) -red',
            'gallery' => 'https://ng.jumia.is/unsafe/fit-in/680x680/filters:fill(white)/product/14/6744801/1.jpg?6005'
            ],
            [
                'name'=> 'iphone 14' ,
                'price'=> '850,000',
                'category'=> 'mobile',
                'description'=> ' Apple IPhone 14 6.1 (6GBRAM + 256gb ROM) - Starlight',
                'gallery' => 'https://ng.jumia.is/unsafe/fit-in/500x500/filters:fill(white)/product/59/9011302/1.jpg?0301'
                
            ],
            [
                'name'=> 'iphone 14 pro max' ,
                'price'=> '880,000',
                'category'=> 'mobile',
                'description'=> ' Apple IPhone 14 pro max 6.1 (6GBRAM + 256gb ROM) - Starblack',
                'gallery' => 'https://ng.jumia.is/unsafe/fit-in/500x500/filters:fill(white)/product/14/6744801/1.jpg?6005',
                
            ],
        ]);
    }
}
