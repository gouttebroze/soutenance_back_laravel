<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    Category::create(
        [
            'name' => 'CD',
            

        ]
);

        Category::create(
        [
                'name' => 'CD',
    
    
        ]
);

        Category::create(
            [
                'name' => 'cassettes',
            
    
            ]
);

        Category::create(
            [
                'name' => 'Livres: Graphzines',
                
        
            ]
);
    }
}
