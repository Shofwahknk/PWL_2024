<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Welcome';
    }

    public function about(){
        return 'Name    : Shofwah Kanaka Ebsa Anargya
        <br> NIM    : 2241720254';
    }

    public function articles($id){
        return "Article Page with ID $id";
    }
}

    

