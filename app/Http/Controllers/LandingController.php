<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class LandingController extends Controller
{
    /**
     * Landing Page - IADR
     */
    public function index(){
        return view('landingPage');
    }
    /**
     * Buscar Articulo - IADR
     */
    public function article(){
        return view('article.list');
    }
    /**
     * Quienes Somos - IADR
     */
    public function about(){
        return view('about.list');
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
    /**
     * Lista de Articulos - IADR
     */
    public function directorySearch($name=''){
        $data = 'Staff::first()';
        // return view('directory.search',[
        //     'data'  => $data
        // ]);
        return view('directory.search');
    }
}
