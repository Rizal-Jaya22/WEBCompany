<?php

namespace App\Http\Controllers;
use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.Home', [
            'Homes'=>Home::all()
        ]);
    }
}
