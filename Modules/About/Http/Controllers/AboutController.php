<?php

namespace Modules\About\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AboutController extends Controller
{
    public function aboutpage()
    {
        return view('about::index');
    }
}
