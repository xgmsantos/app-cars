<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarsController extends Controller
{
    /**
     * CarsController construct
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function add()
    {
        return view('cars/index');
    }
}
