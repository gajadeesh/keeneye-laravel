<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HeadHunter;
class HeadhunterController extends Controller
{
    //

    public function create()
    {
        $headhunter = new HeadHunter();
        $headhunter->name = $request->name;
        $headhunter->description = $request->description;

        $headhunter->save();

       // return response()->json($headhunter);
    }

    public function show(){
        $headhunter = HeadHunter::all();
        return response()->json($headhunter);
    }

    public function showbyid($id){
        $headhunter = HeadHunter::find($id);
        return response()->json($headhunter);
    }
}
