<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Landing Page - IADR
     */
    public function index(){
        return view('landingPage');
    }
    /**
     * Quienes Somos - IADR
     */
    public function about(){
        return view('about.list');
    }
    /**
     * Lista de Articulos - IADR
     */
    public function article(){
        return view('article.list');
    }
    /**
     * Membresía - IADR
     */
    public function membership(){
        return view('membership.list');
    }
    /**
     * Contactos - IADR
     */
    public function contact(){
        return view('contact.list');
    }
}
