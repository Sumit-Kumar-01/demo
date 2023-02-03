<?php
namespace App\Repository;

use App\Models\Product;


class ProductRepository implements IProductRepository{
  
   public function getAllProducts()
   {
     return Product::all();
   }

   public function createProduct( $data)
   {
     Product::insert([
      'picture'=>$data['picture'],
      'title'=>$data['title'],
      'price'=>$data['price'],
      'description'=>$data['description']

     ]);
   }

   public function getSingleProduct($id)
   {
      return Product::find($id);
   }
  
   public function editProduct($id)
   {

      return Product::find($id);
   }

   public function updateProduct($id, $data)
   {
      Product::find($id)->update([
         'picture'=>$data['picture'],
         'title'=>$data['title'],
         'price'=>$data['price'],
         'description'=>$data['description']
   
        ]);

   }
}

?>