<?php

namespace App\Http\Controllers;

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
            'memberName' => 'required'
        ]);

        if($validator->fails()){
            return response()->json([
                'message' => 'error',
                'messsages' => $validator->messages(),
            ]);
        }

        
    }
}
