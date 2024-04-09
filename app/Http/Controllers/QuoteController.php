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
            'color'=>'required',
            'quantity'=>'required',
        ]);

        $quote=new Quote();
        $quote->name=$request->input('name');
        $quote->destination=$request->input('destination');
        $quote->phone=$request->input('phone');
         $quote->goods_name=$request->input('goods_name');
         $quote->color=$request->input('color');
         $quote->quantity=$request->input('quantity');
         $quote->save();

         return redirect()->route('user')->with('success', 'Quote created successfully!');
    }
}

