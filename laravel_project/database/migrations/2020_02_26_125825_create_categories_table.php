<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->string('name')->unique();
            $table->string('slug')->unique();//mis un slug pour que les URL (optimisées pour le référencement) pointent vers les pages des produits.Sers d'identifiant unique.Masque les ID de ma table (pr ne pas exposer l'ID d'un article, /articles/1 j'utilise le slug: /articles/this-is-my-article).
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
