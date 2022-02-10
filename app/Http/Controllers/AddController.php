<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info;
use App\Models\faculty;
use App\Models\module;

class AddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infos = faculty::all();
        return view('add')->with('infos',$infos);
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
        //save data to database
        {   $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'gender'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'nationality'=>'required',
            'dob'=>'required',
            'faculty'=>'required',
            'module'=>'required'
            ]);
            
            //store to db
            $info=new info;
            error_log($request);
            $info->name=$request->input('name');
            $info->email=$request->input('email');
            $info->gender=$request->input('gender');
            $info->phone=$request->input('phone');
            $info->address=$request->input('address');
            $info->nationality=$request->input('nationality');
            $info->dob=$request->input('dob');
            $info->faculty=$request->input('faculty');
            $info->module=$request->input('module');
            $info->save();
    
            return redirect('/add');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        // retrive data for module
        $data=module::select('mname')->where('id','=',$request->id)->get();
        error_log($data);
        return response()->json($data);
         
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
