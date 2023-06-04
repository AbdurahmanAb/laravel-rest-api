<?php

namespace App\Http\Controllers;

use App\Models\feedback;
use Illuminate\Http\Request;

class feedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return feedback::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//         $request->validation([
//   'username'  => 'required',
//   'comment' => 'required',
//   'Rating' => 'required',
//         ]

//         );
       return feedback::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
     return feedback::find($id);   //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {feedback::find($id)->update($request->all());
        return "Feedback Updated";

        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {feedback::destroy($id);
        return  "Feedback Deleted Successflully";
        //
    }

    public function search($username){
        return feedback::where('username',$username)->get(); //not need but for learning purpose
    }
}
