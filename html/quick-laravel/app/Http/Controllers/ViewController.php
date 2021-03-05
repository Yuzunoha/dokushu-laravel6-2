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
        $num = random_int(1, 5);
        return view('view.switch', ['num' => $num]);
    }

    public function master()
    {
        return view('view.master', ['msg' => 'こんにちは、世界！']);
    }
}
