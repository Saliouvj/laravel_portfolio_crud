<?php

namespace App\Http\Controllers;

use App\Models\Contact1;
use App\Models\Contact2;
use App\Models\ContactIcon;
use Illuminate\Http\Request;

class BackofficeContactController extends Controller
{
    public function index(){
        $contactList=Contact1::all();
        $contactIcons=ContactIcon::all();
        $contactList2=Contact2::all();
        return view('backoffice.pages.contact', compact('contactList','contactIcons','contactList2'));
    }
    public function storeContact1(Request $request)
    {

        $validContact1=$request->validate([
            'ref'=>'required',
            'class'=>'required',
            'icon'=>'required',
        ]);

        $storeContact1 = new Contact1;
        $storeContact1->ref = $request->ref;
        $storeContact1->class = $request->class;
        $storeContact1->icon = $request->icon;
        $storeContact1->save();
        return redirect()->back();
    }
    public function storeContact2(Request $request)
    {

        $validContact2=$request->validate([
            'icon'=>'required',
            'titre'=>'required',
            'text'=>'required',
    
        ]);

        $storeContact2 = new Contact2;
        $storeContact2->icon = $request->icon;
        $storeContact2->titre = $request->titre;
        $storeContact2->text = $request->text;
        $storeContact2->save();
        return redirect()->back();
    }
    public function storeContactIcon(Request $request)
    {

        $validContactIcon=$request->validate([
            'icon'=>'required',
            'titre'=>'required',
        ]);

        $storeContactIcon = new ContactIcon;
        $storeContactIcon->icon = $request->icon;
        $storeContactIcon->titre = $request->titre;
        $storeContactIcon->save();
        return redirect()->back();
    }
    public function showContact1($id){
        $showContact1=Contact1::find($id);
        return view('backoffice.partials.show.showContact1',compact('showContact1'));
    }
    public function showContact2($id){
        $showContact2=Contact2::find($id);
        return view('backoffice.partials.show.showContact2',compact('showContact2'));
    }
    public function showContactIcon($id){
        $showContactIcon=ContactIcon::find($id);
        return view('backoffice.partials.show.showContactIcon',compact('showContactIcon'));
    }
    public function destroyContact1($id){
        $destroyContact1=Contact1::find($id);
        $destroyContact1->delete();
        return redirect()->back();
    }
    public function destroyContact2($id){
        $destroyContact2=Contact2::find($id);
        $destroyContact2->delete();
        return redirect()->back();
    }
    public function destroyContactIcon($id){
        $destroyContactIcon=ContactIcon::find($id);
        $destroyContactIcon->delete();
        return redirect()->back();
    }
    public function editContact1($id){
        $editContact1 = Contact1::find($id);
        return view('backoffice.partials.edit.editContact1',compact('editContact1'));
    }

    public function updateContact1(Request $request, $id)
    {

        $validContact1=$request->validate([
            'ref'=>'required',
            'class'=>'required',
            'icon'=>'class',
        ]);

        $updateContact1 = Contact1::find($id);
        $updateContact1->ref = $request->ref;
        $updateContact1->class = $request->class;
        $updateContact1->icon = $request->icon;
        $updateContact1->save();
        return redirect()->back();
    }
    public function editContact2($id){
        $editContact2 = Contact2::find($id);
        return view('backoffice.partials.edit.editContact2',compact('editContact2'));
    }

    public function updateContact2(Request $request, $id)
    {

        $validContact2=$request->validate([
            'icon'=>'required',
            'subtitre'=>'required',
            'text'=>'required',
        ]);

        $updateContact2 = Contact2::find($id);
        $updateContact2->icon = $request->icon;
        $updateContact2->titre = $request->titre;
        $updateContact2->text = $request->text;
        $updateContact2->save();
        return redirect()->back();
    }
    public function editContactIcon($id){
        $editContactIcon = ContactIcon::find($id);
        return view('backoffice.partials.edit.editContactIcon',compact('editContactIcon'));
    }

    public function updateContactIcon(Request $request, $id)
    {

        $validContactIcon=$request->validate([
            'icon'=>'required',
            'subtitre'=>'required',
        ]);

        $updateContactIcon = ContactIcon::find($id);
        $updateContactIcon->icon = $request->icon;
        $updateContactIcon->titre = $request->titre;
        $updateContactIcon->save();
        return redirect()->back();
    }
}
