<?php

namespace App\Repositorties;

use App\Models\Product;
use App\Utils\ImageUpload;

class ProductRepository implements RepositoryInterface
{
    public $product ;
    public function __construct(Product $product){
        $this->product = $product ;
    }
    public function baseQuery($relations=[]) {
        $query = $this->product->select('*')->with($relations);
        return $query ;
    }
    public function getMainCategory(){
        return $this->product->where('id' , 0)->get();
    }
    public function store($varibles){
        // return Product::create($varibles);
    }
    public function getById($id , $childcount = false){
        // $query = Product::where('id' , $id);
        // if( $childcount){
        //     $query->withCount('child');
        // }
    
        // return $query->firstOrFail();
    }
    public function update($id , $varibles){
        // $product = $this->getById($id);
        // $varibles['parent_id'] = $varibles['parent_id'] ?? 0 ;
        // if(isset($varibles['image_path'])){
        //     $varibles['image_path'] = ImageUpload::imageuploade($varibles['image_path'] , 'Product');
        // }
        // return $product->update($varibles);
    }
    public function delete($varibles){

        // $product = $this->getById($varibles['id']);
        // return $product->delete();
        // Product::whereId($request->id)->delete();
    }
}
