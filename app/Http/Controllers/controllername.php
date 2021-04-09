<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\facultymodel;

class controllername extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $faculty=facultymodel::all();
        return view('faculty',compact('faculty'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
         $getFname=request('fname');
         $faculty=facultymodel::query()->where('fname','LIKE',"%{$getFname}%")->get();

        return view('faculty',compact('faculty'));
    }

    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getName=request('fname');
        $getDes=request('fdes');
        $getContact=request('cname');
        $getCollege=request('cno');
         
        echo $getName;
        echo "<br>";
        echo $getDes;
        echo "<br>";
        echo $getContact;
        echo "<br>";
        echo $getCollege;

        $faculty=new facultymodel();
        $faculty->fname=$getName;
        $faculty->designation=$getDes;
        $faculty->Collegename=$getContact;
        $faculty->contactno=$getCollege;

        $faculty->save();

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
