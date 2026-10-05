<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
   public function Dashboard(Request $request){
        return view('Dashboard_Admin');}

}