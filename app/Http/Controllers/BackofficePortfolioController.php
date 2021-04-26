<?php

namespace App\Http\Controllers;

use App\Models\ImagePortfolio;
use App\Models\pricing;
use App\Models\TitrePortfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BackofficePortfolioController extends Controller
{
    public function index(){
        $pricings=pricing::all();
        $titrePortfolios=TitrePortfolio::all();
        $imagePortfolios=ImagePortfolio::all();
        return view('backoffice.pages.portfolio', compact('pricings','titrePortfolios','imagePortfolios'));
    }



    public function storePricings(Request $request)
    {

        $validPricing=$request->validate([
            'titre'=>'required',
            'chiffre'=>'required',
            'text1'=>'required',
            'text2'=>'required',
            'text3'=>'required',
            'text4'=>'required',
            'text5'=>'required',
            'text6'=>'required',
            'btn'=>'required'
        ]);

        $storePricings = new Pricing;
        $storePricings->titre = $request->titre;
        $storePricings->chiffre = $request->chiffre;
        $storePricings->text1 = $request->text1;
        $storePricings->text2 = $request->text2;
        $storePricings->text3 = $request->text3;
        $storePricings->text4 = $request->text4;
        $storePricings->text5 = $request->text5;
        $storePricings->text6 = $request->text6;
        $storePricings->btn = $request->btn;
        $storePricings->save();
        return redirect()->back();
    }
    public function showPricings($id){
        $showPricings=Pricing::find($id);
        return view('backoffice.partials.show.showPricings',compact('showPricings'));
    }
    public function destroyPricings($id){
        $destroyPricings=Pricing::find($id);
        $destroyPricings->delete();
        return redirect()->back();
    }
    public function editPricings($id){
        $editPricings = pricing::find($id);
        return view('backoffice.partials.edit.editPricings',compact('editPricings'));
    }

    public function updatePricings(Request $request, $id)
    {

        $validPricings=$request->validate([
            'titre'=>'required',
            'chiffre'=>'required',
            'text1'=>'required',
            'text2'=>'required',
            'text3'=>'required',
            'text4'=>'required',
            'text5'=>'required',
            'text6'=>'required',
            'btn'=>'required'
        ]);

        $updatePricings = Pricing::find($id);
        $updatePricings->titre = $request->titre;
        $updatePricings->chiffre = $request->chiffre;
        $updatePricings->text1 = $request->text1;
        $updatePricings->text2 = $request->text2;
        $updatePricings->text3 = $request->text3;
        $updatePricings->text4 = $request->text4;
        $updatePricings->text5 = $request->text5;
        $updatePricings->text6 = $request->text6;
        $updatePricings->btn = $request->btn;
        $updatePricings->save();
        return redirect()->back();
    }







    public function storePortfolioImg(Request $request)
    {
        $validPortfolioImg=$request->validate([
            'filter'=>'required',
            'imgsrc'=>'required',
            'titre1'=>'required',
            'desc'=>'required',
            'titre2'=>'required',
            'ref'=>'required'
        ]);

        $storePortfolioImg = new ImagePortfolio;
        $storePortfolioImg->filter = $request->filter;
        $storePortfolioImg->imgsrc = $request->file('imgsrc')->hashName();
        Storage::put('public/img/', $request->file('imgsrc'));
        $storePortfolioImg->titre1 = $request->titre1;
        $storePortfolioImg->desc = $request->desc;
        $storePortfolioImg->titre2 = $request->titre2;
        $storePortfolioImg->ref = $request->ref;
        $storePortfolioImg->save();
        return redirect()->back();
    }
    public function showPortfolioImg($id){
        $showPortfolioImg=ImagePortfolio::find($id);
        return view('backoffice.partials.show.showPortfolioImg',compact('showPortfolioImg'));
    }
    public function destroyPortfolioImg($id){
        $destroyPortfolioImg=ImagePortfolio::find($id);
        $destroyPortfolioImg->delete();
        return redirect()->back();
    }
    public function editPortfolioImg($id){
        $editPortfolioImg = ImagePortfolio::find($id);
        return view('backoffice.partials.edit.editPortfolioImg',compact('editPortfolioImg'));
    }

    public function updatePortfolioImg(Request $request, $id)
    {
        $validPortfolioImg=$request->validate([
            'filter'=>'required',
            'imgsrc'=>'required',
            'titre1'=>'required',
            'desc'=>'required',
            'titre2'=>'required',
            'ref'=>'required'
        ]);



        $updatePortfolioImg = ImagePortfolio::find($id);
        $updatePortfolioImg->filter = $request->filter;
        $updatePortfolioImg->imgsrc = $request->imgsrc;
        $updatePortfolioImg->titre1 = $request->titre1;
        $updatePortfolioImg->desc = $request->desc;
        $updatePortfolioImg->titre2 = $request->titre2;
        $updatePortfolioImg->ref = $request->ref;
        $updatePortfolioImg->save();
        return redirect()->back();
    }
    public function download($id)
    {
        $down = ImagePortfolio::find($id);
        return Storage::download('public/img/'.$down->imgsrc);
    }




    public function storePortfolioTitre(Request $request)
    {

        $validPortfolioTitre=$request->validate([
            'titre'=>'required'
        ]);

        $storePortfolioTitre = new TitrePortfolio;
        $storePortfolioTitre->titre = $request->titre;
        $storePortfolioTitre->save();
        return redirect()->back();
    }
    public function showPortfolioTitre($id){
        $showPortfolioTitre=TitrePortfolio::find($id);
        return view('backoffice.partials.show.showPortfolioTitre',compact('showPortfolioTitre'));
    }
    public function destroyPortfolioTitre($id){
        $destroyPortfolioTitre=TitrePortfolio::find($id);
        $destroyPortfolioTitre->delete();
        return redirect()->back();
    }
    public function editPortfolioTitre($id){
        $editPortfolioTitre = TitrePortfolio::find($id);
        return view('backoffice.partials.edit.editPortfolioTitre',compact('editPortfolioTitre'));
    }

    public function updatePortfolioTitre(Request $request, $id)
    {
        $validPortfolioTitre=$request->validate([
            'titre'=>'required'
        ]);

        $updatePortfolioTitre = TitrePortfolio::find($id);
        $updatePortfolioTitre->titre = $request->titre;
        $updatePortfolioTitre->save();
        return redirect()->back();
    }


}
