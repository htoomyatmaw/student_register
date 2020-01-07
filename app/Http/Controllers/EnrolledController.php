<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Auth;
use App\User;
use App\Registeration;
use App\SelectedActivity;
use App\SelectedBook;
use App\Year;
use App\Book;
use App\Major;


class EnrolledController extends Controller
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
        //
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


    public function authId(){

        $authid = Auth::user()->id;

        // dd($authid);

        $user = User::find($authid);

        // dd($user);

        return response()->json($user);
    }

    public function authuserId(){

        $authid = Auth::user()->id;
        $user = User::find($authid);
        
        return response()->json($user);
    }

    public function selectenrolled($id){

        $resInfo = Registeration::where('user_id',$id)->get();

        return view('/selectenrolled', compact('resInfo'));
    }

    public function viewenrolled($id){

        $registeration = Registeration::where('user_id', $id)->where('year_id',1)->first();
        if($registeration){
            $selectedbooks = SelectedBook::where('registeration_id', $registeration->id)->get();

            $books_array = array();
            foreach($selectedbooks as $selectedbook)
            {
                $book = $selectedbook->book;
                array_push($books_array, $book);
            }

            // return $books_array;
            // return $registeration;

            $relation_data = [
                'year_name' => $registeration->year->name,
                'year_fee'  => $registeration->year->fee,

                'bookdetail' => $books_array,//for books
            ];

            // dd($registeration->id);
            // dd($selectedbooks);


            return view('/viewenrolled',compact('registeration','relation_data'));
        }
        else{
            return redirect()->back();
        }
    }

    public function secondviewenrolled($id){

        $registeration = Registeration::where('user_id', $id)->where('year_id',2)->first();

        // return $registeration;
        if($registeration){
            $selectedbooks = SelectedBook::where('registeration_id', $registeration->id)->get();

            $books_array = array();
            foreach($selectedbooks as $selectedbook)
            {
                $book = $selectedbook->book;
                array_push($books_array, $book);
            }

            $relation_data = [
                'year_name' => $registeration->year->name,
                'year_fee'  => $registeration->year->fee,

                'bookdetail' => $books_array,//for books
            ];


            return view('/secondviewenrolled',compact('registeration','relation_data'));
        }
        else{
            return redirect()->back();
        }
    }

    public function thirdviewenrolled($id){

        $registeration = Registeration::where('user_id', $id)->where('year_id',3)->first();

        // return $registeration;
        if($registeration){
            $selectedbooks = SelectedBook::where('registeration_id', $registeration->id)->get();

            $books_array = array();
            foreach($selectedbooks as $selectedbook)
            {
                $book = $selectedbook->book;
                array_push($books_array, $book);
            }

            $relation_data = [
                'year_name' => $registeration->year->name,
                'year_fee'  => $registeration->year->fee,

                'bookdetail' => $books_array,//for books
            ];


            return view('/thirdviewenrolled',compact('registeration','relation_data'));
        }
        else{
            return redirect()->back();
        }
    }

    public function fourthviewenrolled($id){

        $registeration = Registeration::where('user_id', $id)->where('year_id',4)->first();

        // return $registeration;
        if($registeration){
            $selectedbooks = SelectedBook::where('registeration_id', $registeration->id)->get();

            $books_array = array();
            foreach($selectedbooks as $selectedbook)
            {
                $book = $selectedbook->book;
                array_push($books_array, $book);
            }

            $relation_data = [
                'year_name' => $registeration->year->name,
                'year_fee'  => $registeration->year->fee,

                'bookdetail' => $books_array,//for books
            ];


            return view('/fourthviewenrolled',compact('registeration','relation_data'));
        }
        else{
            return redirect()->back();
        }
    }

    public function fifthviewenrolled($id){

        $registeration = Registeration::where('user_id', $id)->where('year_id',5)->first();

        // return $registeration;
        if($registeration){
            $selectedbooks = SelectedBook::where('registeration_id', $registeration->id)->get();

            $books_array = array();
            foreach($selectedbooks as $selectedbook)
            {
                $book = $selectedbook->book;
                array_push($books_array, $book);
            }

            $relation_data = [
                'year_name' => $registeration->year->name,
                'year_fee'  => $registeration->year->fee,

                'bookdetail' => $books_array,//for books
            ];


            return view('/fifthviewenrolled',compact('registeration','relation_data'));
        }
        else{
            return redirect()->back();
        }
    }

    
    
}
