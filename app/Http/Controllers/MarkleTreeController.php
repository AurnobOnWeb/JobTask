<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarkleTreeController extends Controller
{
    public function index()
    {
        return view('markle');
    }
}
