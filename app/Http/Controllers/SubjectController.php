<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
public function index(){
   // $sub=subject::all();
    $sub=subject::getsubject();

    return view('subject.subject',compact(['sub']));
}

    public function add(){

        return view('subject.add');
    }
    public function insert(Request $request){
        $class=new subject();
        $class['name']=$request['name'];
        $class['type']=$request['type'];
        $class['status']=$request['status'];

        $class->save();
        return redirect()->back()->with('nice');

    }







}
