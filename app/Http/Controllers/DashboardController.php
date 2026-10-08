<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Colaborador;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
   public function Dashboard(Request $request){
        return view('dashboard');
        }

    
    
    
    
}

        
