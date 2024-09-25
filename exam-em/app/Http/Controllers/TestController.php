<?php

namespace App\Http\Controllers;

use App\Models\PointTest;
use App\Models\SubTest;
use App\Models\Test;
use Illuminate\Http\Request;
use App\Models\User;

class TestController extends Controller
{
    public function index($id){
        $user = User::findOrFail($id)->first();
        $tests = Test::get();
        return view('test.index',[
            'tests' => $tests,
            'user' => $user
        ]);
    }

    public function subTest($id){
        $subs = SubTest::where(['test_id'=>$id])->get();
        return view('test.sub-test',[
            'subs' => $subs,
            'user_id' => $id,
        ]);
    }

    public function answer(Request $request,$id){
        $validated = $request->validate([
            'ans.*' => 'required|in:0,1',
        ]);

        foreach ($validated['ans'] as $subId => $answer) {
            PointTest::create([
                'point' => $answer,
                'user_id' => $id,
                'sub_test_id' => $subId
            ]);
        }
    }
}
