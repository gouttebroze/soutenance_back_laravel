<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
        protected $fillable = ['artist_name', 'product_name', 'desc_product', 'price_product','img_filename', 'year', 'category_id'];
 
        /*
        ci-dessous, on crée la réciprocité:
        on a la méthode category (au singulier) qui permet de trouver la catégorie 
        à laquelle appartient (belongsTo) le produit.
        */
        public function category()
    { 
        //$products = Category::find(2)->products;
        return $this->belongsTo(Category::class); 
    }

        public function getPrice()
    {
        $price = $this->price / 100;

        return number_format($price, 2, ',', ' '). ' €'; 
    }
}
