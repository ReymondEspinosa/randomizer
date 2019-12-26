<?php

namespace App\Http\Controllers;

use App\Member;
use App\MemberPicked;
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

        $matchPicked = MemberPicked::where('member_id', $match->id)->first();

        if($matchPicked){
            return response()->json([
                'message' => 'error-2',
            ]);
        }
        // $random_keys = array_rand($matchPicked, 1);
        
        $memberCount =  Member::count();

        $number = mt_rand(1, $memberCount);

        $returnId = $this->checker($number, $memberCount, $match->id);
        
        $memberPicker = MemberPicked::create([
            'member_id' => $match->id,
            'member_id_picked' => $returnId,
        ]);

        $memberNamePicked =  Member::where('id', $returnId)->first();

        return response()->json([
            'message' => 'success',
            'member_name' => $memberNamePicked->name,
        ]);
    }

    public function checker($id, $memberCount, $legitId){

        if($id == $legitId){
            $id = mt_rand(1, $memberCount);

            return $this->checker($id, $memberCount, $legitId);
        }

        $matchPicked = MemberPicked::where('member_id_picked', $id)->first();
        
        if(!$matchPicked){
            return $id;
        }

        $number = mt_rand(1, $memberCount);
        
        return $this->checker($number, $memberCount, $legitId);
    }
    
}
