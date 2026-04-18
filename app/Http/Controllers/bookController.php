<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bookController extends Controller
{
    public function show($id){
        $book = book::with('bookshelf')->where('id',$id)->firstOrFail();
        return
    }
}
