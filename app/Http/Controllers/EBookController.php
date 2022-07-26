<?php

namespace App\Http\Controllers;

use App\Models\EBook;
use Illuminate\Http\Request;

class EBookController extends Controller
{
    public function viewHome(){

    	$e_books = EBook::all();

    	return view('home',compact('e_books'));
    }

    public function viewDetail($id){

    	$e_books = EBook::find($id);

    	return view('detail',compact('e_books'));
    }
}
