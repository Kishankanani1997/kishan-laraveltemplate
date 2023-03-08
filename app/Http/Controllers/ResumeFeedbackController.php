<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ResumeFeedbackModel;

class ResumeFeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('resume.feedback');
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
        //Here we apply validation on feedback form
        $request->validate([
            "Name"=>'required',
            "Email"=>'required|email',
            "Number"=>'required|min:10|max:10',
            "Subject"=>'required',
            "Message"=>'required',
        ]);

        // here we insert data into tblcontact

        $data=array(
            "name"=>$request->Name,
            "email"=>$request->Email,
            "number"=>$request->Number,
            "subject"=>$request->Subject,
            "message"=>$request->Message,
        );

        // elequent ORM (object relational mapping) model or query builder
        ResumeFeedbackModel::create($data);
        return redirect('/Feedback')->with('success','Thank you for giving us a valuable feedback');
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
