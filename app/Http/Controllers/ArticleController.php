<?php

namespace App\Http\Controllers;

Class ArticleController extends Controller
{
    public function articles($id){
        return "Article Page with ID $id";
    }
}
