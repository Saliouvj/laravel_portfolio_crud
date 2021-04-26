<?php

namespace App\Http\Controllers;

use App\Models\UserList1;
use App\Models\UserList2;
use App\Models\UserList4;
use App\Models\UserTimeList;
use Illuminate\Http\Request;

class BackofficeAboutController extends Controller
{
    public function index(){
        $userList1=UserList1::all();
        $userList2=UserList2::all();
        $userList4=UserList4::all();
        $userTime=UserTimeList::all();
        return view('backoffice.pages.about', compact('userList1','userList2','userList4','userTime'));
    }
    public function storeUserList1(Request $request)
    {

        $validUserList=$request->validate([
            'titre'=>'required',
            'subtitre'=>'required'

        ]);

        $storeUserList1 = new UserList1;
        $storeUserList1->titre = $request->titre;
        $storeUserList1->subtitre = $request->subtitre;
        $storeUserList1->save();
        return redirect()->back();
    }
    public function showUserList1($id){
        $showUserList1=UserList1::find($id);
        return view('backoffice.partials.show.showUserList1',compact('showUserList1'));
    }
    public function destroyUserList1($id){
        $destroyUserList1=UserList1::find($id);
        $destroyUserList1->delete();
        return redirect()->back();
    }
    public function storeUserList2(Request $request)
    {
        $validUserList=$request->validate([
            'titre'=>'required',
            'subtitre'=>'required'

        ]);

        $storeUserList2 = new UserList2;
        $storeUserList2->titre = $request->titre;
        $storeUserList2->subtitre = $request->subtitre;
        $storeUserList2->save();
        return redirect()->back();
    }
    public function storeUserTimeList(Request $request)
    {

        $validTimeList=$request->validate([
            'chiffre'=>'required',
            'text1'=>'required',
            'text2'=>'required',
            'icon'=>'required',
            'color'=>'required'

        ]);

        $storeUserTimeList = new UserTimeList;
        $storeUserTimeList->chiffre = $request->chiffre;
        $storeUserTimeList->text1 = $request->text1;
        $storeUserTimeList->text2 = $request->text2;
        $storeUserTimeList->icon = $request->icon;
        $storeUserTimeList->color = $request->color;
        $storeUserTimeList->save();
        return redirect()->back();
    }
    public function showUserTimeList($id){
        $showUserTimeList=UserTimeList::find($id);
        return view('backoffice.partials.show.showUserTimeList',compact('showUserTimeList'));
    }
    public function showUserList2($id){
        $showUserList2=UserList2::find($id);
        return view('backoffice.partials.show.showUserList2',compact('showUserList2'));
    }
    public function destroyUserList2($id){
        $destroyUserList2=UserList2::find($id);
        $destroyUserList2->delete();
        return redirect()->back();
    }
    public function destroyUserTimeList($id){
        $destroyUserTimeList=UserTimeList::find($id);
        $destroyUserTimeList->delete();
        return redirect()->back();
    }
    public function storeUserList4(Request $request)
    {

        $validUserList4=$request->validate([
            'titre'=>'required',
            'chiffre'=>'required'
        ]);

        $storeUserList4 = new UserList4;
        $storeUserList4->titre = $request->titre;
        $storeUserList4->chiffre = $request->chiffre;
        $storeUserList4->save();
        return redirect()->back();
    }
    public function showUserList4($id){
        $showUserList4=UserList4::find($id);
        return view('backoffice.partials.show.showUserList4',compact('showUserList4'));
    }
    public function destroyUserList4($id){
        $destroyUserList4=UserList4::find($id);
        $destroyUserList4->delete();
        return redirect()->back();
    }
    public function editUserList1($id){
        $editUserList1 = UserList1::find($id);
        return view('backoffice.partials.edit.editUserList1',compact('editUserList1'));
    }

    public function updateUserList1(Request $request, $id)
    {
        $validUserList1=$request->validate([
            'titre'=>'required',
            'subtitre'=>'required',

        ]);

        $updateUserList1 = UserList1::find($id);
        $updateUserList1->titre = $request->titre;
        $updateUserList1->subtitre = $request->subtitre;
        $updateUserList1->save();
        return redirect()->back();
    }
    public function editUserList2($id){
        $editUserList2 = UserList2::find($id);
        return view('backoffice.partials.edit.editUserList2',compact('editUserList2'));
    }

    public function updateUserList2(Request $request, $id)
    {
        $validTimeList=$request->validate([
            'titre'=>'required',
            'subtitre'=>'required',

        ]);

        $updateUserList2 = UserList2::find($id);
        $updateUserList2->titre = $request->titre;
        $updateUserList2->subtitre = $request->subtitre;
        $updateUserList2->save();
        return redirect()->back();
    }
    public function editUserList4($id){
        $editUserList4 = UserList4::find($id);
        return view('backoffice.partials.edit.editUserList4',compact('editUserList4'));
    }

    public function updateUserList4(Request $request, $id)
    {
        $validUserList4=$request->validate([
            'titre'=>'required',
            'chiffre'=>'required',

        ]);

        $updateUserList4 = UserList4::find($id);
        $updateUserList4->titre = $request->titre;
        $updateUserList4->chiffre = $request->chiffre;
        $updateUserList4->save();
        return redirect()->back();
    }
    public function editUserTimeList($id){
        $editUserTimeList = UserTimeList::find($id);
        return view('backoffice.partials.edit.editUserTimeList',compact('editUserTimeList'));
    }

    public function updateUserTimeList(Request $request, $id)
    {
        $validTimeList=$request->validate([
            'titre'=>'required',
            'chiffre'=>'required',

        ]);

        $updateUserTimeList4 = UserList4::find($id);
        $updateUserTimeList4->titre = $request->titre;
        $updateUserTimeList4->chiffre = $request->chiffre;
        $updateUserTimeList4->save();
        return redirect()->back();
    }
}


