<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cource;
use App\subject;
use Facade\FlareClient\View;
use DB;


class CourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $fetchData  = cource::
                            join('subjects','subjects.cource_id','=','cources.id')
                            ->select('cources.C_Name','cources.C_Desc','subjects.subject_Name')
                            ->get();

        return view('/student.courses',compact('fetchData'));
     //   return view('Teacher.courses');
    }






    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Teacher.courses');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =   implode(",",$request->vehicle);
        $lala =   explode(",",$data); 

        $cource = new cource([
            'C_Name' => $request->get('C_Name'),
            'C_Desc' => $request->get('C_Desc')
        ]);

        $cource->save();

        $id = DB::table('cources')->where(['C_Name'=>$request->get('C_Name')])->pluck('id')->first();


        for($i = 0; $i< sizeof($lala) ; $i++){
            $subject = new subject([
                'Subject_Name' => $lala[$i],
                'cource_id' => $id
            ]);

            $subject->save();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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


    
    /**Teacher Side Page Load for Add**/
    public function loadAddCourcePage(){
        return view('Teacher.courses');
    }


}
