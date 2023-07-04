<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        if (view()->exists($id)) {
            return view('dashboard');
        } else {
            return view('404');
        }

        //   return view($id);
    }

}


