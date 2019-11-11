<?php

namespace Lcss\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Lcss\Http\Controllers\Controller;

class TopController extends Controller
{
    function index()
    {
        return view('default/top');
    }
}
