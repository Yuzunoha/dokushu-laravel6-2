<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        return 'こんにちは、世界！';
    }

    public function view()
    {
        $data = [
            'msg' => 'こんにちは、世界！view',
        ];
        return view('hello.view', $data);
    }

    public function list()
    {
        return view('hello.list', [
            'records' => Book::all(),
        ]);
    }
}
