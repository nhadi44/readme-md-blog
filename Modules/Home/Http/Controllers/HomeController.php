<?php

namespace Modules\Home\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function homepage()
    {
        $number = [01, 02];
        return view('home::index', compact('number'));
    }
}
