<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Tasks::orderby('id','desc')->get();


        return view('Tasks.index',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Tasks.create');
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
        //
        $data =  $this->validate($request,
        [
            "title"  => "required|min:3",
            "info"   => "required|min:3",
          
        ]);


        //$data['password'] = bcrypt($data['password']);
        
        $op =  Tasks::create($data);
        
        
         if($op){
            $message = "User Inserted ";
         }else{
            $message = "Error Try Again";
         }
         session()->flash('Message',$message);
         return redirect(url('/Tasks'));
 

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
        $data = Tasks::find($id);
        return view('Tasks.edit',['data' => $data]);

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
        $data = $this->validate($request,[

            "title"  => "required|min:3",
            "info"   => "required|min:3",
           
        ]);
   
   
        $op = Tasks::where('id',$id)->update($data);
   
   
        if($op){
           $message = "task Updated ";
        }else{
           $message = "Error Try Again";
        }
   
   
       session()->flash('Message',$message);
       return redirect(url('/Tasks'));
   
   
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
        $op = Tasks::where('id',$id)->delete();

        if($op){
            $message = "task  Deleted ";
         }else{
            $message = "Error Try Again";
         }
    
        session()->flash('Message',$message);
        return redirect(url('/Tasks'));

    }
}
