<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;

class QuoteController extends Controller
{



    public function create(){
        return view('create');
    }

    public function store(Request $request)

    {
        $validatedData = $request->validate([

            'name'=>'required',
            'destination'=>'required',
            'phone'=>'required',
            'goods_name'=>'required',
        ]);

        $quote=new Quote();
        $quote->name=$request->input('name');
        $quote->destination=$request->input('destination');
        $quote->phone=$request->input('phone');
         $quote->goods_name=$request->input('goods_name');
         $quote->save();

         return redirect()->route('user')->with('success', 'Quote created successfully!');
    }
}

