<?php
namespace App\Http\Controllers;


use Gloudemans\Shoppingcart\Facades\Cart;

use Illuminate\Http\Request;
use App\Http\Requests\Product as ProductRequest;
use App\{Product, Category};
//use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd(Cart::content());

        // $query = $slug ? Category::whereSlug($slug)->firstOrFail()->products() : Product::query();
        $products = Product::all();
        //->paginate(5);
        $categories = Category::all();
        // return view('index', compact('products', 'categories', 'slug'));
        return view('index', compact('products', 'categories'));
       
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('create', compact('categories'));
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store (ProductRequest $productRequest)
    {
        Product::create($productRequest->all());
        return redirect()->route('products.index')->with('info', 'Le produit a bien été créé');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    public function show(Product $product)
    {   
        $category = $product->category->name;    
        return view('show', compact('product', 'category'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        
        return view('edit', compact('product'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $productRequest){
    
        Product::update($productRequest->all());
        return redirect()->route('products.index')->with('info', 'Le produit a bien été modifié');
   }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy(Product $product)
{
        
    $product->delete();
    return back()->with('info', 'Le produit a bien été supprimé dans la base de données.');
}
    
}
