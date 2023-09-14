<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        return view('Layout.dashboard');
    }
    public function index2(){
        $data=User::getAdmin();
        $count=User::counting();
        return view('index',compact(['data','count']));
    }
    public function index3(){
        return view('parent');
    }
    public function index4(){
    return view('student');
}
    public function index5(){
        $data['header_title']="Teacher List";

        return view('teacher',$data);
    }
    public function  add(){
        return view( 'Layout.addadmin');
    }
    public function insert(Request $request){

        $request->validate([
            'email'=>'required|unique:users'
        ]);
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'role' => $request['role'],
            'password' => Hash::make($request['password']),
        ]);
        $user->save();
        return redirect('index');

    }
    public function edit($id){
        $data=User::find($id);
        return view('editadmin',compact('data'));

    }
    public function update(Request $request ,$id){
        $data=User::find($id);
        $data['name']=$request['name'];
        $data['email']=$request['email'];
        $data['role']=$request['role'];
        $data['password']=Hash::make($request['password']);
        $data->update();
        return redirect('index');

    }
    public function delete($id){
        $data=User::find($id);
        $data->delete();
        return redirect('index');

    }
}
