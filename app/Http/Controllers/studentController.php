<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use App\student;
use App\teacher;
use Image;

use Illuminate\Support\Facades\Mail;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('/student.login');
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
        
        $this->validate($request , [
            'First_name' => 'required',
            'Last_name' => 'required',
            'Address' => 'required',
            'Email' => 'required',
            'Mobile_No' => 'required',
            'Password' => 'required',
            'Dob' => 'required'     ,
            'image' => 'required'
            ]);


            $photo = $request->file('image');
            $filename = time().'.'.$photo->getClientOriginalExtension();
            Image::make($photo)->resize(300,300)->save(public_path('/upload/'.$filename));   
    

        $company = new student([
            'First_name' =>  $request->get('First_name'),
            'Last_name' =>  $request->get('Last_name'),
            'Address' =>  $request->get('Address'),
            'Email' =>  $request->get('Email'), 
            'Mobile_No' =>  $request->get('Mobile_No'),
            'Password' =>  $request->get('Password'),
            'Dob' =>  $request->get('Dob'),
            'image' => $filename  
            ]);

        $company->save();
        return view('/student.login')->with('success','Data Added');

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
        $this->validate($request , [
            'First_name' => 'required',
            'Last_name' => 'required',
            'Address' => 'required',
            'Email' => 'required',
            'Mobile_No' => 'required',
            'Password' => 'required',
            'Dob' => 'required'     
            ]);

       
       $check =  DB::table('students')->where(['id'=>$id])->update(
           [ 'First_name' =>  $request->get('First_name'),
        'Last_name' =>  $request->get('Last_name'),
        'Address' =>  $request->get('Address'),
        'Email' =>  $request->get('Email'), 
        'Mobile_No' =>  $request->get('Mobile_No'),
        'Password' =>  $request->get('Password'),
        'Dob' =>  $request->get('Dob')]);

   
        

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


   

    public function logins(Request $request){

            $email = $request->get('email');
            $pass = $request->get('pass');

            $check = DB::table('students')->where(['Email'=>$email,'Password'=>$pass])->get('id');
           
          
            $log = '';
            
            
            if(count($check)>0){
                $ids =   DB::table('students')->where(['Email'=>$email,'Password'=>$pass])->first();
                $request->session()->put('Student_id', $ids->id);

                $name = $ids->First_name . " " . $ids->Last_name;
                
                $request->session()->put('name', $name);
                $request->session()->put('image', $ids->image);
            //    $request->session()->put('hey', $ids);
                return view('/student.index');
            }
            else{
                $log = 'Incorrect Details..';        
                return view('/student.login',compact('log'));
            }   
    }



    public function forget(Request $request){
        $email = $request->get('email');


        $check = DB::table('students')->where(['Email'=>$email])->get('Stu_id');
         

       
        if(count($check)>0){
            Mail::send('student.change',['name','Ripon Uddin Arman'],function($message){
                $message->to('shekharsuthar456@gmail.com')->subject("About change your password : ");
                $message->from('shekharsuthar456@gmail.com','Online Tutor Managenment System');
            });

            return view('/student.forget')->with('success','Email sent to your ID : ');
     
        }
        else{     
            return view('/student.forget')->with('success','Please Check your email ID ');
        }   


   
    }


    
    public function ProfileStudent( Request $request){

        $id =   session()->get('Student_id');
        $er =  DB::table('students')->where(['id'=>$id])->pluck('id');

        $stu = student::find($er);

        return view('student.profile',compact('stu' , 'id'));
    }


      
    public function StudentUpdate(Request $request, $id)
    {

    }

}