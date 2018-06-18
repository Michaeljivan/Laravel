<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function login(){
        return view('pages.login');
    }

    public function landing(){
        return view('pages.landing');
    }

    public function deposit(){
        return view('pages.deposit');
    }

    public function withdraw(){
        return view('pages.withdraw');
    }
    
    public function transfer(){
        return view('pages.transfer');
    }

    public function transactions(){
        return view('pages.transactions');
    }

    public function newuser(){
        return view('pages.newuser');
    }

    public function newaccount(){
        return view('pages.newaccount');
    }

    public function store(){
        var_dump(request('fname'));
        var_dump(request('lname'));
        var_dump(request('user'));
        var_dump(request('pass'));
        var_dump(request('deposit'));
    }

}
?>