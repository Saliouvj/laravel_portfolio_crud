<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\Header;
use App\Models\Titre;
use App\Models\UserList1;
use App\Models\UserList2;
use App\Models\UserList4;
use App\Models\UserTimeList;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $headers= Header::all();
        $footers=Footer::all();
        $userList1=UserList1::all();
        $userList2=UserList2::all();
        $titres=Titre::all();
        $userList4=UserList4::all();
        $userTime=UserTimeList::all();
        return view('pages.about', compact('headers','footers','userList1','userList2','titres','userList4','userTime'));
    }
}
