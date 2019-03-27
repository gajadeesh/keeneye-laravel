<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Headhunter;

class headhunterviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $headhunters = Headhunter::all();
        // console.log($headhunters);
        // return view('headhunter');
        $headhunter = HeadHunter::all();
        return view('headhunter', compact('headhunter'));
        return view('recruit', compact('headhunter'));
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
        // $this->validate($request, [
        //     'head_name' => 'required',
        //     'head_des' => 'required',
        // ]);
       // print_r($request->input('head_name'));
        
        $headhunter = new HeadHunter();
        $headhunter->name = $request->head_name;
        $headhunter->description = $request->head_des;
        $headhunter->save();

        return redirect('/headhunter');
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
