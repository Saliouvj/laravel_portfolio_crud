<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\Header;
use App\Models\Titre;
use Illuminate\Http\Request;

class BackofficeController extends Controller
{
    public function index(){
        $headers= Header::all();
        $footers=Footer::all();
        $titres=Titre::all();
        return view('backoffice.homeback', compact('headers','footers','titres'));
    }
    
    public function storeHeader(Request $request)
    {
        $validHeader=$request->validate([
            'ref'=>'required',
            'titre'=>'required',
        ]);

        $storeHeader = new Header;
        $storeHeader->ref = $request->ref;
        $storeHeader->titre = $request->titre;
        $storeHeader->save();
        return redirect()->back();
    }
    public function storeFooter(Request $request)
    {


        $validFooter=$request->validate([
            'titre'=>'required',
            'subtitre'=>'required',
            'copy'=>'required',
            'designed'=>'required',
            'img'=>'required'
        ]);

        $storeFooter = new Footer;
        $storeFooter->titre = $request->titre;
        $storeFooter->subtitre = $request->subtitre;
        $storeFooter->copy = $request->copy;
        $storeFooter->designed = $request->designed;
        $storeFooter->img = $request->img;
        $storeFooter->save();
        return redirect()->back();
    }
    public function storeTitre(Request $request)
    {
        $validTitre=$request->validate([
            'titre'=>'required',
            'subtitre'=>'required',
        ]);

        $storeTitre = new Titre;
        $storeTitre->titre = $request->titre;
        $storeTitre->subtitre = $request->subtitre;
        $storeTitre->save();
        return redirect()->back();
    }
    public function showHeader($id){
        $showHeader=Header::find($id);
        return view('backoffice.partials.show.showHeader',compact('showHeader'));
    }
    public function showFooter($id){
        $showFooter=Footer::find($id);
        return view('backoffice.partials.show.showFooter',compact('showFooter'));
    }
    public function showTitre($id){
        $showTitre=Titre::find($id);
        return view('backoffice.partials.show.showTitre',compact('showTitre'));
    }
    public function destroyHeader($id){
        $destroyHeader=Header::find($id);
        $destroyHeader->delete();
        return redirect()->back();
    }
    public function destroyFooter($id){
        $destroyFooter=Footer::find($id);
        $destroyFooter->delete();
        return redirect()->back();
    }
    public function destroyTitre($id){
        $destroyTitre=Titre::find($id);
        $destroyTitre->delete();
        return redirect()->back();
    }
    public function editHeader($id){
        $editHeader = Header::find($id);
        return view('backoffice.partials.edit.editHeader',compact('editHeader'));
    }

    public function updateHeader(Request $request, $id)
    {

        $validHeader=$request->validate([
            'ref'=>'required',
            'titre'=>'required',
        ]);

        $updateHeader = Header::find($id);
        $updateHeader->ref = $request->ref;
        $updateHeader->titre = $request->titre;
        $updateHeader->save();
        return redirect()->back();
    }
    public function editFooter($id){
        $editFooter = Footer::find($id);
        return view('backoffice.partials.edit.editFooter',compact('editFooter'));
    }

    public function updateFooter(Request $request, $id)
    {

        $validFooter=$request->validate([
            'titre'=>'required',
            'subtitre'=>'required',
            'copy'=>'required',
            'designed'=>'required',
            'img'=>'required'
        ]);

        $updateFooter = Footer::find($id);
        $updateFooter->titre = $request->titre;
        $updateFooter->subtitre = $request->subtitre;
        $updateFooter->copy = $request->copy;
        $updateFooter->designed = $request->designed;
        $updateFooter->img = $request->img;
        $updateFooter->save();
        return redirect()->back();
    }
    public function editTitre($id){
        $editTitre = Titre::find($id);
        return view('backoffice.partials.edit.editTitre',compact('editTitre'));
    }

    public function updateTitre(Request $request, $id)
    {

        $validTitre=$request->validate([
            'titre'=>'required',
            'subtitre'=>'required',
        ]);

        $updateTitre = Titre::find($id);
        $updateTitre->titre = $request->titre;
        $updateTitre->subtitre = $request->subtitre;
        $updateTitre->save();
        return redirect()->back();
    }

}
