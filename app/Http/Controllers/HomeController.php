<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect()
    {
        $role = Auth::user()->role->name;
        $checkrole = explode(',', $role);
        
        if ($role === 'Admin') {
            return redirect('/admin');
        } elseif ($role === 'Associé') {
            return redirect('/associe');
        }
        elseif ($role === 'Salarié') {
            return redirect('/salarie');
        }
        elseif ($role === 'Visiteur') {
            return redirect('/visiteur');
        }

    }

    public function index() 
    {
        $role = Auth::user()->role->name;
        $checkrole = explode(',', $role);
        if ($role === 'Admin') {
            return view('pages.admin');
        } elseif ($role === 'Associé') {
            return view('pages.associe');
        }
        elseif ($role === 'Salarié') {
            return view('pages.salarie');
        }
        elseif ($role === 'Visiteur') {
            return redirect('pages.visiteur');
        }
     
    }
}
