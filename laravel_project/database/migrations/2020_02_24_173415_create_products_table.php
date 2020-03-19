<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

       
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('artist_name', 255);
            $table->string('product_name', 255);
            $table->string('desc_product', 255);
            $table->string('img_filename', 255);
            $table->bigInteger('category_id')->unsigned;//Integer? ou string?
            $table->timestamps();
           $table->foreign('category_id', 'cmts_ctct_fk')//contact_id de "products" doit pointer vers l'id des "category" ? pour qu'un produit corresponde à un label?
            ->references('id')
            ->on('categories')//créer une migration "category" (avec ou sans "s"?)par éloquent comme j'ai fait pr "products" ou peu importe? voir alors code pr la foreignkey + si l'ordre est le bon? faire schéma!!!
            ->onDelete('cascade');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
