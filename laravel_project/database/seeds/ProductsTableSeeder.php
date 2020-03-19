<?php

use App\Product;
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
        Product::create(
            [
                'artist_name' => 'Ramones',// 'Nirvana', 'Daniel Johnston',
                'product_name' => 'RAMONES', //'In Utero', 'Pain',
                'desc_product' => 'First album from Ramones. First punk rock band from New-York',// 'Last album of this band', 'Second album of the king of Lo-Fi',
                'img_filename' => 'RAMONES.jpeg', //'in_utero.jpg', 'pain.jpg',
                'category_id' => '3',// '2', '2',
                'year' => '1976',// '1994', '1984',
                'price_product' => '10',// '16', '19',   
                
                ]
        );

        Product::create(
            [
                'artist_name' => 'Shellac',// 'Nirvana', 'Daniel Johnston',
                'product_name' => '1000hurts', //'In Utero', 'Pain',
                'desc_product' => 'Noise, Post-punk from Chicago',// 'Last album of this band', 'Second album of the king of Lo-Fi',
                'img_filename' => 'shellac1.jpeg', //'in_utero.jpg', 'pain.jpg',
                'category_id' => '3',// '2', '2',
                'year' => '1994',// '1994', '1984',
                'price_product' => '20',// '16', '19',   
                
                ]

            );

            Product::create(
                [
                    'artist_name' => 'Shellac',// 'Nirvana', 'Daniel Johnston',
                    'product_name' => '1000hurts', //'In Utero', 'Pain',
                    'desc_product' => 'Noise, Post-punk from Chicago',// 'Last album of this band', 'Second album of the king of Lo-Fi',
                    'img_filename' => 'shellac1.jpeg', //'in_utero.jpg', 'pain.jpg',
                    'category_id' => '3',// '2', '2',
                    'year' => '1994',// '1994', '1984',
                    'price_product' => '20',// '16', '19',   
                    
                    ]
    
                );
    }
}
