<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function if()
    {
        $random = random_int(0, 100);
        return view('view.if', ['random' => $random]);
    }

    public function switch()
    {
        return view('view.switch', ['msg' => 'aaa']);
    }
}
