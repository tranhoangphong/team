<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex(){
        return view('pages.body');
    }

    public function getTintuc(){
        return view('pages.tintuc');
    }

    public function getThanhtoan(){
        return view('pages.thanhtoan');
    }

    public function getRegister(){
        return view('pages.register');
    }

    public function getPhukien(){
        return view('pages.phukien');
    }

    public function getMauxe(){
        return view('pages.mauxe');
    }

    public function getLogin(){
        return view('pages.login');
    }

    public function getLienhe(){
        return view('pages.lienhe');
    }
    public function getChitiet(){
        return view('pages.chitiet');
    }
    public function getCar(){
        return view('pages.cart');
    }
}
