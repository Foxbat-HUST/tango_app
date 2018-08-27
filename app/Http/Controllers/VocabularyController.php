<?php

namespace App\Http\Controllers;

class VocabularyController extends Controller
{
    public function create(){
        return view('word/create');
    }
}
