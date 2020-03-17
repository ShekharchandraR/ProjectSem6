<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\teacher;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stu  = teacher::all()->toarray();
        return view('/student.teacher',compact('stu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
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
            'First_name' => 'required',
            'Last_name' => 'required',
            'Address' => 'required',
            'Email' => 'required',
            'Mobile_No' => 'required',
            'Password' => 'required',
            'Dob' => 'required',
            'Qualification'    => 'required'
            ]);

            
            $photo = $request->file('image');
            $Image = time().'.'.$photo->getClientOriginalExtension();
            Image::make($photo)->resize(300,300)->save(public_path('/upload/'.$Image));   
    
            
            $photo = $request->file('Qualification');
            $quali = time().'.'.$photo->getClientOriginalExtension();
            Image::make($photo)->resize(300,300)->save(public_path('/upload/'.$quali));   
    


        $company = new teacher([
            'Firstname' =>  $request->get('First_name'),
            'Lastname' =>  $request->get('Last_name'),
            'Address' =>  $request->get('Address'),
            'Email' =>  $request->get('Email'), 
            'Mobile_no' =>  $request->get('Mobile_No'),
            'Password' =>  $request->get('Password'),
            'DOB' =>  $request->get('Dob'),
            'Image' =>  $Image,
            'Qualification' =>  $quali
            ]);

        $company->save();
        return view('teacher.logine')->with('success','Data Added');  
   
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
        $re=  $request->session()->get('heyT');
       
        $er =  DB::table('teachers')->where(['id'=>$re])->pluck('id');
    
        $stu = teacher::find($re);  
        
        return view('Teacher.profile',compact('stu' , 're'));;
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

    public function loginTe(Request $request){

        $email = $request->get('email');
        $pass = $request->get('pass');

        $check = DB::table('teachers')->where(['Email'=>$email,'Password'=>$pass])->get();
    

        $log = '';

        if(count($check)>0)  {
            $che = DB::table('teachers')->where(['Email'=>$email,'Password'=>$pass])->first();
        
            $request->session()->put('heyT', $che->id);
        $name = $che->Firstname . " " . $che->Lastname;
                
        $request->session()->put('nameT', $name);
        $request->session()->put('imageT', $che->Image);
  
            return view('/teacher.index1');
        }
        else{
            $log = 'Incorrect Details..';        
            return view('teacher.logine',compact('log'));
        }   
    }


}
