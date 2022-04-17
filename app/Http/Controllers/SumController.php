<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Number;

class SumController extends Controller
{
    public function index(Request $request)
    {
        return view('add-number');
    }

    public function sum(Request $request)
    {
        // dd($request->all());
        $num1  =$request->num1;
        $num2  =$request->num2;
        $result  =$request->result;

        $data = array(
            'num1'=>$num1,
            'num2'=>$num2,
            'result'=>$result,
        );

       $res =  Number::create($data);
       if($res)
       {
            return back()->with('success','Item created successfully!');
        //    return redirect('/')->with('msg','addedd succesfully');
       }else{
        return back()->with('error','Item created successfully!');
       }

    }
}
