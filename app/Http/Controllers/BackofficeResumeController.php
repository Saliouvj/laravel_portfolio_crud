<?php

namespace App\Http\Controllers;

use App\Models\Resume2;
use App\Models\Resume3;
use App\Models\ResumeList1;
use App\Models\ResumeTitre;
use App\Models\ResumeTitre2;
use Illuminate\Http\Request;

class BackofficeResumeController extends Controller
{
    public function index(){
        $reLists=ResumeList1::all();
        $reTitres=ResumeTitre::all();
        $resumeTitres=ResumeTitre2::all();
        $resume_list=Resume2::all();
        $resumeList=Resume3::all();
        return view('backoffice.pages.resume',compact('reLists','reTitres','resumeTitres','resume_list','resumeList'));
    }
    public function storeResumeTitre(Request $request)
    {

        $validResumeTitre2=$request->validate([
            'titre'=>'required',
            'subtitre'=>'required',
            'text'=>'required',
        ]);


        $storeResumeTitre = new ResumeTitre;
        $storeResumeTitre->titre = $request->titre;
        $storeResumeTitre->subtitre = $request->subtitre;
        $storeResumeTitre->text = $request->text;
        $storeResumeTitre->save();
        return redirect()->back();
    }
    public function showResumeTitre($id){
        $showResumeTitre=ResumeTitre::find($id);
        return view('backoffice.partials.show.showResumeTitre',compact('showResumeTitre'));
    }
    public function destroyResumeTitre($id){
        $destroyResumeTitre=ResumeTitre::find($id);
        $destroyResumeTitre->delete();
        return redirect()->back();
    }
    public function editResumeTitre($id){
        $editResumeTitre = ResumeTitre::find($id);
        return view('backoffice.partials.edit.editResumeTitre',compact('editResumeTitre'));
    }

    public function updateResumeTitre(Request $request, $id)
    {

        $validResumeTitre=$request->validate([
            'titre'=>'required',
            'subtitre'=>'required',
            'text'=>'required',
        ]);

        $updateResumeTitre = ResumeTitre::find($id);
        $updateResumeTitre->titre = $request->titre;
        $updateResumeTitre->subtitre = $request->subtitre;
        $updateResumeTitre->text = $request->text;
        $updateResumeTitre->save();
        return redirect()->back();
    }








    public function storeResumeTitre2(Request $request)
    {

        $validResumeTitre2=$request->validate([
            'titre'=>'required',
        ]);


        $storeResumeTitre2 = new ResumeTitre2;
        $storeResumeTitre2->titre = $request->titre;
        $storeResumeTitre2->save();
        return redirect()->back();
    }
    public function showResumeTitre2($id){
        $showResumeTitre2=ResumeTitre2::find($id);
        return view('backoffice.partials.show.showResumeTitre2',compact('showResumeTitre2'));
    }
    public function destroyResumeTitre2($id){
        $destroyResumeTitre2=ResumeTitre2::find($id);
        $destroyResumeTitre2->delete();
        return redirect()->back();
    }
    public function editResumeTitre2($id){
        $editResumeTitre2 = ResumeTitre2::find($id);
        return view('backoffice.partials.edit.editResumeTitre2',compact('editResumeTitre2'));
    }

    public function updateResumeTitre2(Request $request, $id)
    {
        $validResumeTitre2=$request->validate([
            'titre'=>'required',
        ]);


        $updateResumeTitre2 = ResumeTitre2::find($id);
        $updateResumeTitre2->titre = $request->titre;
        $updateResumeTitre2->save();
        return redirect()->back();
    }









    public function storeResumeList1(Request $request)
    {

        $validResumeList1=$request->validate([
            'text'=>'required',
        ]);

        $storeResumeList1 = new ResumeList1;
        $storeResumeList1->text = $request->text;
        $storeResumeList1->save();
        return redirect()->back();
    }
    public function showResumeList1($id){
        $showResumeList1=ResumeList1::find($id);
        return view('backoffice.partials.show.showResumeList1',compact('showResumeList1'));
    }
    public function destroyResumeList1($id){
        $destroyResumeList1=ResumeList1::find($id);
        $destroyResumeList1->delete();
        return redirect()->back();
    }
    public function editResumeList1($id){
        $editResumeList1 = ResumeList1::find($id);
        return view('backoffice.partials.edit.editResumeList1',compact('editResumeList1'));
    }

    public function updateResumeList1(Request $request, $id)
    {

        $validResumeList1=$request->validate([
            'text'=>'required',
        ]);

        $updateResumeList1 = ResumeList1::find($id);
        $updateResumeList1->text = $request->text;
        $updateResumeList1->save();
        return redirect()->back();
    }








    public function storeResume2(Request $request)
    {

        $validResume2=$request->validate([
            'titre1'=>'required',
            'titre2'=>'required',
            'text1'=>'required',
            'text2'=>'required',
        ]);

        $storeResume2 = new Resume2;
        $storeResume2->titre1 = $request->titre1;
        $storeResume2->titre2 = $request->titre2;
        $storeResume2->text1 = $request->text1;
        $storeResume2->text2 = $request->text2;
        $storeResume2->save();
        return redirect()->back();
    }
    public function showResume2($id){
        $showResume2=Resume2::find($id);
        return view('backoffice.partials.show.showResume2',compact('showResume2'));
    }
    public function destroyResume2($id){
        $destroyResume2=Resume2::find($id);
        $destroyResume2->delete();
        return redirect()->back();
    }
    public function editResume2($id){
        $editResume2 = Resume2::find($id);
        return view('backoffice.partials.edit.editResume2',compact('editResume2'));
    }

    public function updateResume2(Request $request, $id)
    {

        $validResume2=$request->validate([
            'titre1'=>'required',
            'titre2'=>'required',
            'text1'=>'required',
            'text2'=>'required',
        ]);

        $updateResume2 = Resume2::find($id);
        $updateResume2->titre1 = $request->titre1;
        $updateResume2->titre2 = $request->titre2;
        $updateResume2->text1 = $request->text1;
        $updateResume2->text2 = $request->text2;
        $updateResume2->save();
        return redirect()->back();
    }







    public function storeResume3(Request $request)
    {

        $validation=$request->validate([
            'titre'=>'required',
            'subtitre1'=>'required',
            'subtitre2'=>'required',
            'text1'=>'required',
            'text2'=>'required',
            'text3'=>'required',
            'text4'=>'required',
        ]);

        $storeResume3 = new Resume3;
        $storeResume3->titre = $request->titre;
        $storeResume3->subtitre1 = $request->subtitre1;
        $storeResume3->subtitre2 = $request->subtitre2;
        $storeResume3->text1 = $request->text1;
        $storeResume3->text2 = $request->text2;
        $storeResume3->text3 = $request->text3;
        $storeResume3->text4 = $request->text4;
        $storeResume3->save();
        return redirect()->back();
    }
    public function showResume3($id){
        $showResume3=Resume3::find($id);
        return view('backoffice.partials.show.showResume3',compact('showResume3'));
    }
    public function destroyResume3($id){
        $destroyResume3=Resume3::find($id);
        $destroyResume3->delete();
        return redirect()->back();
    }
    public function editResume3($id){
        $editResume3 = Resume3::find($id);
        return view('backoffice.partials.edit.editResume3',compact('editResume3'));
    }

    public function updateResume3(Request $request, $id)
    {

        $validation=$request->validate([
            'titre'=>'required',
            'subtitre1'=>'required',
            'subtitre2'=>'required',
            'text1'=>'required',
            'text2'=>'required',
            'text3'=>'required',
            'text4'=>'required',
        ]);

        $updateResume3 = Resume3::find($id);
        $updateResume3->titre = $request->titre;
        $updateResume3->subtitre1 = $request->subtitre1;
        $updateResume3->subtitre2 = $request->subtitre2;
        $updateResume3->text1 = $request->text1;
        $updateResume3->text2 = $request->text2;
        $updateResume3->text3 = $request->text3;
        $updateResume3->text4 = $request->text4;
        $updateResume3->save();
        return redirect()->back();
    }


}