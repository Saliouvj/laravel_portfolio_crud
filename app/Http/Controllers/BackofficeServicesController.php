<?php

namespace App\Http\Controllers;

use App\Models\Service1;
use App\Models\Service2;
use Illuminate\Http\Request;

class BackofficeServicesController extends Controller
{
    public function index(){
        $service_list=Service1::all();
        $serviceList=Service2::all();
        return view('backoffice.pages.service',compact('service_list','serviceList'));
    }
    public function storeService1(Request $request)
    {

        $validService1=$request->validate([
            'ref'=>'required',
            'titre'=>'required',
        ]);

        $storeService1 = new Service1;
        $storeService1->ref = $request->ref;
        $storeService1->titre = $request->titre;
        $storeService1->save();
        return redirect()->back();
    }
    public function storeService2(Request $request)
    {

        $validService2=$request->validate([
            'titre'=>'required',
            'subtitre'=>'required',
            'text'=>'required',
            'imgsrc'=>'required'
        ]);

        $storeService2 = new Service2;
        $storeService2->titre = $request->titre;
        $storeService2->subtitre = $request->subtitre;
        $storeService2->text = $request->text;
        $storeService2->imgsrc = $request->imgsrc;
        $storeService2->save();
        return redirect()->back();
    }
    public function showService1($id){
        $showService1=Service1::find($id);
        return view('backoffice.partials.show.showService1',compact('showService1'));
    }
    public function showService2($id){
        $showService2=Service2::find($id);
        return view('backoffice.partials.show.showService2',compact('showService2'));
    }
    public function destroyService1($id){
        $destroyService1=Service1::find($id);
        $destroyService1->delete();
        return redirect()->back();
    }
    public function destroyService2($id){
        $destroyService2=Service2::find($id);
        $destroyService2->delete();
        return redirect()->back();
    }
    public function editService1($id){
        $editService1 = Service1::find($id);
        return view('backoffice.partials.edit.editService1',compact('editService1'));
    }

    public function updateService1(Request $request, $id)
    {

        $validService1=$request->validate([
            'titre'=>'required',
            'text'=>'required',
            'icon'=>'required',
        ]);


        $updateService1 = Service1::find($id);
        $updateService1->titre = $request->titre;
        $updateService1->text = $request->text;
        $updateService1->icon = $request->icon;
        $updateService1->save();
        return redirect()->back();
    }
    public function editService2($id){
        $editService2 = Service2::find($id);
        return view('backoffice.partials.edit.editService2',compact('editService2'));
    }

    public function updateService2(Request $request, $id)
    {

        $validService2=$request->validate([
            'titre'=>'required',
            'subtitre'=>'required',
            'text'=>'required',
            'imgsrc'=>'required'
        ]);


        $updateService2 = Service2::find($id);
        $updateService2->titre = $request->titre;
        $updateService2->subtitre = $request->subtitre;
        $updateService2->text = $request->text;
        $updateService2->imgsrc = $request->imgsrc;
        $updateService2->save();
        return redirect()->back();
    }
}
