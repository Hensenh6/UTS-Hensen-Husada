<?php

namespace App\Http\Controllers;
use App\Models\books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    function searchbook($id){
        $book =DB::table('books')
        ->where('book_id','=',$id)
        ->get();
        return view("detailbooks",["row"=>$book[0]]);
       // dd($book[0]);
    }

    function searchpublisher($id){
        $publisher =DB::table('publishers')
        ->where('publisher_id','=',$id)
        ->get();
        return view("detailpublisher",["row"=>$publisher[0]]);
       //dd($publisher[0]);
    }
    function searchcategory($id){
        $category = DB::table('book_categories')
        ->join('categories','book_categories.category_id','=','categories.category_id')
        ->join('books','book_categories.book_id','=','books.book_id')
        ->where('book_categories.category_id','=',$id)
        ->get();
        return view("category",["row"=>$category]);
        //dd($category);
    }

}
