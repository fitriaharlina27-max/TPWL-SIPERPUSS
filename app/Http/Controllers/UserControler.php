<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControler extends Controller
{
    public function show($name){
        return"hello" .$name."...!";
    }
    //
}

