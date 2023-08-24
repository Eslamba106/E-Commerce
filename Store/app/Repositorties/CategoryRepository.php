<?php

namespace App\Repositorties;

use App\Models\Category;
use App\Utils\ImageUpload;

class CategoryRepository implements RepositoryInterface
{
    public $category ;
    public function __construct(Category $category){
        $this->category = $category ;
    }
    public function baseQuery($relations=[] ) {
        $query = $this->category->select('*')->with($relations);
        return $query ;
    }
    public function getMainCategory(){
        return $this->category->where('parent_id' , 0)->get();
    }
    public function store($varibles){
        return Category::create($varibles);
    }
    public function getById($id , $childcount = false){
        $query = Category::where('id' , $id);
        if( $childcount){
            $query->withCount('child');
        }
    
        return $query->firstOrFail();
    }
    public function update($id , $varibles){
        $category = $this->getById($id);
        $varibles['parent_id'] = $varibles['parent_id'] ?? 0 ;
        if(isset($varibles['image_path'])){
            $varibles['image_path'] = ImageUpload::imageuploade($varibles['image_path'] , 'Category');
        }
        return $category->update($varibles);
    }
    public function delete($varibles){

        $category = $this->getById($varibles['id']);
        return $category->delete();
        // Category::whereId($request->id)->delete();
    }

}
