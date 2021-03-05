<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function if()
    {
        return view('view.if', ['random' => 51]);
    }
}
