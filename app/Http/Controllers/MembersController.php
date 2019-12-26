<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MembersController extends Controller
{
    //
    public function index(){
        return view('welcome');
    }
    
    public function create(Request $request){
        $validator = Validator::make($request->all(),[
            'memberName' => 'required|unique:members,name'
        ]);

        if($validator->fails()){
            return response()->json([
                'message' => 'error',
                'messsages' => $validator->messages(),
            ]);
        }

        $member = Member::create([
            'name' => $request->memberName
        ]);

        return response()->json([
            'message' => 'success',
        ]);
    }

    public function indexAdmin(){
        $member = Member::all();
        return view('admin', compact('member'));
    }

    public function randomPick(){

        return view('random-pick');
    }

    public function randomPicked(Request $request){
        $validator = Validator::make($request->all(),[
            'memberName' => 'required'
        ]);

        if($validator->fails()){
            return response()->json([
                'message' => 'error',
                'messsages' => $validator->messages(),
            ]);
        }

        $match = Member::where('name',$request->memberName)->first();

        if(!$match){
            return response()->json([
                'message' => 'error-1',
            ]);
        }

        
    }
}
