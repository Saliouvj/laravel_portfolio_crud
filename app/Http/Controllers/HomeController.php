<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\Header;
use App\Models\Home;
use App\Models\Titre;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $headers= Header::all();
        $footers=Footer::all();
        $homes=Home::all();
        $titres=Titre::all();
        return view('welcome', compact('headers','footers','homes','titres'));
    }
}
