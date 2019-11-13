<?php

namespace Lcss\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Lcss\Http\Controllers\Controller;

class TopController extends Controller
{
    /**
     * Top Page
     * @return \Illuminate\View\View
     */
    function index()
    {
        return view('default.top');
    }
}
