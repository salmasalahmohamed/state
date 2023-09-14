<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClassController extends Controller
{
 public function index(){
     $class=Classe::all();
     $item=Classe::getClass();
     return view('class.class',compact(['class','item']));
 }
 public function add(){
     return view('class.add');

 }
 public function insert(Request $request){
      $class=new Classe();
      $class['name']=$request['name'];
      $class['status']=$request['status'];
      $class['created_by']=Auth::user()->id;
      $class->save();

 }
 public function assign(){
     return view('class.assignsubject');
 }

    public function assignindex(){
     $data=Classe::getClass();
     $item=subject::getsubject();
        return view('class.assignadd',compact(['data','item']));
    }
}
