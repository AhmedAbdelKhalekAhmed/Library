<?php

namespace App\Http\Controllers;
use App\Category;
use App\Book;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index(){
        $books=Book::latest()->paginate(3);
        return view('welcome')->with('books',$books );

    }

    public function viewCategory($id){
        $category=Category::find($id);
        $books=$category->books;
        return view('viewcategory')->with(['books'=>$books , 'category'=>$category]);

    }

    public function viewBook($id){
        $book=Book::find($id);
        return view('book')->with('book',$book);

    }
}
