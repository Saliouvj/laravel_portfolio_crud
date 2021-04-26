<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\Header;
use App\Models\Resume2;
use App\Models\Resume3;
use App\Models\ResumeList1;
use App\Models\ResumeTitre;
use App\Models\ResumeTitre2;
use App\Models\Titre;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index(){
        $headers= Header::all();
        $footers=Footer::all();
        $titres=Titre::all();
        $reLists=ResumeList1::all();
        $reTitres=ResumeTitre::all();
        $resumeTitres=ResumeTitre2::all();
        $resume_list=Resume2::all();
        $resumeList=Resume3::all();
        
        return view('pages.resume', compact('headers','footers','titres','reLists','reTitres','resumeTitres','resume_list','resumeList'));
    }
}
