<?php

namespace App\Repositorties;

use App\Models\Product;
use App\Utils\ImageUpload;

class ProductRepository implements RepositoryInterface
{
    public Product $product ;
    public function __construct(Product $product){
        $this->product = $product ;
    }
    public function baseQuery($relations=[] , $withCount=[]) {
        $query = $this->product->select('*')->with($relations);
        foreach($withCount as $key => $value){
            $query->withCount($value);
        }
        return $query ;
    }
    public function getMainCategory(){
        return $this->product->where('id' , 0)->get();
    }
    public function store($varibles){
        // dd($varibles);
        return Product::create($varibles);
    }
    public function getById($id , $childcount = false){
        return $this->product->where('id' , 0)->get();
        
    }
    public function update($id , $varibles){
        $product = $this->getById($id);

        return $product->update($varibles);
    }
    public function delete($varibles){

        $product = $this->getById($varibles['id']);
        return $product->delete();

    }
}
