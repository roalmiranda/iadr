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
        $staffs = Staff::with(['staffSocial' => function($query) {
                            $query->with('social');
                        }])
                        ->where('state', 1)
                        ->get();
        return view('landingPage',[
            'staffs' => $staffs
        ]);
    }
    /**
     * Buscar Articulo - IADR
     */
    public function article(){
        return view('article.list');
    }
    /**
     * Buscar de Articulos - IADR
     */
    public function articleSearch($name=''){
        $data = 'Staff::first()';
        // return view('directory.search',[
        //     'data'  => $data
        // ]);
        return view('article.search');
    }
    /**
     * Quienes Somos - IADR
     */
    public function about(){
        return view('about.list');
    }
    /**
     * Buscar directorio - IADR
     */
    public function directorySearch($name=''){
        $data = 'Staff::first()';
        // return view('directory.search',[
        //     'data'  => $data
        // ]);
        return view('directory.search');
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
