<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
 //use ajoute pour le package shoppingcart
/*use App\Http\Requests\Product as ProductRequest;
use App\{Product, Category};*/
use App\Product;


// Utilisation de la librairie "Shoppingcart" via composer

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('cart.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    // on ne passe que l'id du produit pour que l'on ne puisse pas changer son prix dans l'inspecteur
        
    // !A FINIR !!! pour éviter que le même article se retrouve plusieurs fois ds le panier
    
    // !!! la fonction SEARCH nous permet de rechercher un produit ds notre panier
        
        $duplicata = Cart::search(function ($cartItem, $rowId) use ($request){
            return $cartItem->id == $request->product_id;
        });

    // !!!si le duplicata n'est pas vide, ça veut dire qu'il a bien récupéré qque chose, alors on retourne que le produit a déjà été ajouté
        $product = Product::find($request->product_id);
        if ($duplicata->isNotEmpty()) {
            //return redirect()->route('products')->with('success', 'Le produit a déjà été ajouté.');
            return "Le produit a déjà été ajouté au panier.";
        }        
        

        //on va enregistrer ci-dessous (on fait une requete sur son id, son nom, sa quantité et son prix) le produit dans notre panier
        //dd($request->id, $request->product_name, $request->price_product);

        Cart::add($product->id, $product->product_name, 1, $product->price_product)
        //on chaîne avec la méthode 'associate' avec un : App\Product: pour associer et faciliter la récupération de notre modèle product
            ->associate('App\Product');

        //return redirect()->route('products')->with('success', 'Le produit a bien été ajouté.');

        return "Le produit a bien été ajouté au panier.";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
