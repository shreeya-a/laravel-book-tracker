<?php

namespace App\Http\Controllers;

use App\Models\Booklist;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public  function login()
    {
        return view('login');
    }
    
    public  function dashboard()
    {
        return view('dashboard', ['list' =>Booklist::all()]);

    }
    public  function register()
    {
        return view('register');

    }
    public  function addBook()
    {
        return view('addBook');

    }
    
}
   

