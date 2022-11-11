<?php

namespace App\Http\Controllers;

use App\Models\encoder;
use Illuminate\Http\Request;

class encController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("encoder/encoder",[
            "encoder" => encoder::latest()->filter(request(['search']))->paginate(10)->withQueryString()
            ,"title"=>"encoder"]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('encoder.input_enc',["title"=>"add"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $enc = new encoder;
        $enc -> merk = $request -> merk;
        $enc -> type = $request -> type;
        $enc -> sn = $request -> sn;
        $enc -> control = $request -> control;
        $enc -> owner = $request -> owner;
        $enc -> used = $request -> used;
        $enc->save();
        return redirect('/encoder');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $encoder=encoder::find($id);
        return view('encoder.edit',compact('encoder'),[
            'title'=>"edit_encoder"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,request $request)
    {
        $enc = encoder::find($id);
        $enc -> merk = $request -> merk;
        $enc -> type = $request -> type;
        $enc -> sn = $request -> sn;
        $enc -> control = $request -> control;
        $enc -> owner = $request -> owner;
        $enc -> used = $request -> used;
        $enc->update();
        return redirect('/encoder')->with('berhasil','berhasil ubah data');
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
        $encoder=encoder::find($id);
         if ($encoder === null) {
            return redirect('/')->with('bandel', 'id tidak di temukan');
        }
        $encoder->delete();
        return redirect()->back();
    }
}
