<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    //

    public function addComment(Request $request,$id){
        Comment::create([
            'product_id'=>$id,
            'comment'=>$request->comment,
            'rating'=>$request->rating,
        ]);

        return redirect()->back();
    }
}
