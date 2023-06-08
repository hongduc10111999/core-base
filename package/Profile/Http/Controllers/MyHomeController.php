<?php

namespace Corebase\Profile\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile.user.index');
    }

}
