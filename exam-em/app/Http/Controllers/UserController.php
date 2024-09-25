<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\SubTest;

class UserController extends Controller
{
    public function index(Request $request){
        $search = $request->input('search');
        $users = User::when($search, function ($query, $search) {
            return $query->where('firstname', 'like', '%' . $search . '%')
                         ->orWhere('lastname', 'like', '%' . $search . '%');
        })
        ->get();
        return view('welcome',[
            'users' => $users
        ]);
    }

    public function create(){
        return view('user.create');
    }

    public function insert(Request $request){

        $validate = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required'
        ],[
            'firstname' => 'กรุณากรอกข้อมูล',
            'lastname' => 'กรุณากรอกข้อมูล'
        ]);

        $users = User::create([
            'firstname' => $validate['firstname'],
            'lastname' => $validate['lastname'],
        ]);

        return redirect()->route('index');
    }

    public function edit($id){
        $user = User::where(['id' => $id])->first();
        return view('user.edit',[
            'user' => $user
        ]);
    }

    public function update(Request $request,$id){
        $validate = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required'
        ],[
            'firstname' => 'กรุณากรอกข้อมูล',
            'lastname' => 'กรุณากรอกข้อมูล'
        ]);
        $user = User::findOrFail($id);
        $user->firstname = $validate['firstname'];
        $user->lastname = $validate['lastname'];
        $user->save();

        return redirect()->route('index')->with('success',"แก้ไข ".$validate['firstname']." สำเร็จ");
    }

    public function delete(Request $request,$id){
        $user = User::findOrFail($id)->delete();
        return redirect()->route('index')->with('success',"ลบข้อมูลสำเร็จ");
    }
}
