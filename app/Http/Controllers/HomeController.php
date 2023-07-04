<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    }

    public function superAdminDashboard()
    {
        return view('super_admin_dashboard');
    }

    public function teacherDashboard()
    {
        return view('teacher_dashboard');
    }

    public function userDashboard()
    {
        return view('user_dashboard');
    }













}
