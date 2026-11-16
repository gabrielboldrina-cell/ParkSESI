<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sem_acesso_testeController extends Controller
{
     public function sem_acesso_teste(Request $request){
        return view('sem_acesso_teste');
    } 
}
