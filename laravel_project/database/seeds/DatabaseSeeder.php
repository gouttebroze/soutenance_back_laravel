<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class); 
        $this->call(ProductsTableSeeder::class); 
    }
   /* App\User::create(
        [
            'name' => 'Joey Ramone',
            'email' => 'joey-ramone@ny.us',
            'password' => bcrypt('pass'),
        ]
    );

    App\Product::create(
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

   App\Category::create(
        [
            'name' => 'Vinyls',
            

        ]
    );

    App\Category::create(
            [
                'name' => 'CD',
                
    
            ]
    );

    App\Category::create(
            [
                    'name' => 'CD',
        
        
            ]
    );

    App\Category::create(
                [
                    'name' => 'cassettes',
                
        
                ]
    );

    App\Category::create(
                [
                    'name' => 'Livres: Graphzines',
                    
            
                ]
    );


   
 {
   /*factory(App\Category::class, 4)->create()->each(function ($category) {
        $i = rand(2, 8);
        while (--$i) {
            $category->products()->save(factory(App\Product::class)->make());
        }
    });
}


}*/

    
}
