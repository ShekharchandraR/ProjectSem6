<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\teacher;
use App\complain;
use App\Student;

class complainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   
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



    public function loadStudent(){
        $fetchTeacher = teacher::all()->toArray();
        return view('student.complain',compact('fetchTeacher'));
    }

    public function loadTeacher(){
        $fetchTeacher = student::all()->toArray();
        return view('Teacher.complain',compact('fetchTeacher'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
     {
        $this->validate($request , [
            'Sub' => 'required',
            'Msg' => 'required'
            ]);

        $complain = new complain([
            'Stu_ID' =>  '45' ,
            'Tutor_ID' => $request->get('tutorID'),
            'Sub' => $request->get('Sub'),
            'Msg' => $request->get('Msg'),
            'SendBy' => $request->get('SendBy'), 
        ]);

        $complain->save();

        $fetchTeacher = teacher::all()->toArray();
        return view('student.complain',compact('fetchTeacher'))->with('success','Data Added');
       

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
