<?php

namespace App\Http\Controllers;

use App\Models\Contact1;
use App\Models\Contact2;
use App\Models\ContactIcon;
use App\Models\Footer;
use App\Models\Header;
use App\Models\Titre;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $headers= Header::all();
        $footers=Footer::all();
        $titres=Titre::all();
        $contactList=Contact1::all();
        $contactIcons=ContactIcon::all();
        $contactList2=Contact2::all();
        return view('pages.contact', compact('headers', 'footers','titres','contactList','contactIcons','contactList2'));
    }    

}
