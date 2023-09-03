<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Services\ProductServices;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Store\StoreProductRequest;
use App\Services\CategoryServices;
class ProductController extends Controller
{
    public ProductServices $productService ;
    public CategoryServices $categoryService  ;
    public function __construct(ProductServices $productService , CategoryServices $categoryService ){
        $this->productService = $productService ;
        $this->categoryService = $categoryService ;
    }

    public function index()
    {
        return view('dashboard.products.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = $this->categoryService->getall(); 
        return view('dashboard.products.create' , compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $products = $this->productService->store($request->validated());
        return redirect()->route('dashboard.products.index' , compact('products'));
    }
    public function getall(Request $request)
    {
        return  $this->productService->dataTable();
        // return $query ;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function delete(string $id)
    // {
    //     //
    // }
    public function destroy(string $id)
    {
        //
    }
}
