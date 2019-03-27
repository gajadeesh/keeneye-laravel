<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;

class CandidateController extends Controller
{
    //
    public function create(Request $request)
    {
        $candidate = new Candidate();

        $candidate->name = $request->name;
        $candidate->description = $request->description;
        $candidate->position = $request->position;

        $candidate->save();

       // return response()->json($candidate);
    }

    public function show(){
        $candidate = Candidate::all();
        return response()->json($candidate);
    }

    public function showbyid($id){
        $candidate = Candidate::find($id);
        return response()->json($candidate);
    }
}
