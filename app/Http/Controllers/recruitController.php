<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recruit;
use App\Headhunter;
use App\Candidate;

class recruitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $headhunter = HeadHunter::all();
        $candidate = Candidate::all();
        $recruit = Recruit::all();
       // return view('headhunter', compact('headhunter'));
        return view('recruit', compact('headhunter','candidate', 'recruit'));

       
       // return view('headhunter', compact('headhunter'));
        //return view('recruit', compact('candidate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $recruit = new Recruit();
        $recruit->headhunterName = $request->headhunterRecruit;
        $recruit->position = $request->positionRecruit;
        $recruit->candidateName = $request->candidateRecruit;
        $recruit->recruited = $request->statusRecruit;
        $recruit->save();

        return redirect('/recruit');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
