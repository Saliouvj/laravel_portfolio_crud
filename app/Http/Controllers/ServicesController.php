<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\Header;
use App\Models\Service1;
use App\Models\Service2;
use App\Models\Titre;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(){
        $headers= Header::all();
        $footers=Footer::all();
        $titres=Titre::all();
        $service_list=Service1::all();
        $serviceList=Service2::all();
        return view('pages.services', compact('headers','footers','titres','service_list','serviceList'));
    }
}
