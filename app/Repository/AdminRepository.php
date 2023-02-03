<?php
namespace App\Repository;

use App\Models\Product;
use App\Models\Comment;


class AdminRepository implements IAdminRepository{
  
 public function admingetAllProducts()
 {
   return Product::all();

 }

 public function adminGetAllComments()
 {

    return Comment::all();
 }


 public function adminDeleteProduct($id)
 {
    return Product::find($id)->delete();
 }

 public function adminDeleteComment($id)
 {
    return Comment::find($id)->delete();
 }

   
}


?>