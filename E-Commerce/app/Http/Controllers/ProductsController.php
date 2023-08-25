<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;
use App\Models\products ;
use App\Models\features ;
use App\Models\newproducts ;


class ProductsController extends Controller
{

    public function index()
    {
        return view('welcome')->with('products' , products::All())
        ->with('features',features::All())
        ->with('newproducts' , newproducts::All())
        ->with('categories' , categories::All());
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
    public function productspage(){
        return view('products')->with('features' , features::All())
        ->with('newproducts' , newproducts::All());
    }
}
