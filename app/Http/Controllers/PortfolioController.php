<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\Header;
use App\Models\ImagePortfolio;
use App\Models\pricing;
use App\Models\Titre;
use App\Models\TitrePortfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        $headers= Header::all();
        $footers=Footer::all();
        $titres=Titre::all();
        $pricings=pricing::all();
        $titrePortfolios=TitrePortfolio::all();
        $imagePortfolios=ImagePortfolio::all();
        return view('pages.portfolio', compact('headers','footers','titres','pricings','titrePortfolios','imagePortfolios'));
    }
}
