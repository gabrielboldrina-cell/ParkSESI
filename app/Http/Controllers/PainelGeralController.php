<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PainelGeralController extends Controller
{
    public function PainelGeral(Request $request){
        return view('PainelGeral');
    }
}
