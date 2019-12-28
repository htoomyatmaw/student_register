<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registeration;
use App\SelectedBook;
use App\SelectedActivity;

class StudentListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function storeStudent(Request $request) 
    {

        $student = $request['student'];

        $name = $student['name'];
        $profile = $student['profile'];
        $rollno = $student['rollno'];
        $student_nrc = $student['student_nrc'];
        $father_name = $student['father_name'];
        $father_nrc = $student['father_nrc'];
        $dob = $student['dob'];
        $phone = $student['phone'];
        $student_email = $student['student_email'];
        $address = $student['address'];

        $register_fee = $request['registerFee'];
        $user_id = $request['userId'];
        $year_id = $request['yearId'];
        $major_id = $request['major_id'];

        $book_id =$request['selectedBookId'];
        $activity_id =$request['activityId'];

        $register= Registeration::create([
            "rollno"        =>$rollno,
            "name"          =>$name,
            "student_nrc"   =>$student_nrc,
            "father_name"   =>$father_name,
            "father_nrc"    =>$father_nrc,
            "profile"       =>$profile,
            "dob"           =>$dob,
            "phone"         =>$phone,
            "student_email" =>$student_email,
            "address"       =>$address,
            "register_fee"  =>$register_fee,
            "year_id"       =>$year_id,          
            "major_id"      =>$major_id,
            "user_id"       =>$user_id
        ]);

        foreach($book_id as $bid) {
            SelectedBook::create([
                "registeration_id" => $register->id,
                "book_id"      => $bid,
    
            ]);
        }


        foreach($activity_id as $aid) {
            SelectedActivity::create([
                "registeration_id" => $register->id,
                "activity_id"      => $aid,
    
            ]);
        }

        return response()->json('success');

    }

    public function studentList($id){

        $registrations = Registeration::where('year_id','=', $id)->get();

        return view('studentlist', compact('registrations'));

        // return response()->json($registrations);
    }


}
