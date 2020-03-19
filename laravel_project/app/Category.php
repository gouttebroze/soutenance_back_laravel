<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];
    /*On déclare ici avec la méthode products (au pluriel) qu’une catégorie a plusieurs 
    (hasMany) products (Product). On aura une méthode pour récupérer les poduits d’une 
    catégorie.*/
        public function products() 
    { 
        
        return $this->hasMany(Product::class); 
    }

}
