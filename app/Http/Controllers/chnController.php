<?php

namespace App\Http\Controllers;
use App\Models\channel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;
use Illuminate\Validation\Rules\Unique;

class chnController extends Controller
{
    public function readData()
    {
        $channels = DB::table('channels')->get();
        return view('channel',compact('channels')); 
    }

    public function index()
    {
        $chn = new channel;
        return view('channels.input_chn', compact('chn'), [
            'title'=>'Input Channel'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nmr' => 'required|unique:channels',
            'nama_chn' => 'required',
            'kualitas' => 'required',
            'downlink' => 'required',
            'source' => 'required',
            'freq' => 'required',
            'pol' => 'required',
            'sr' => 'required',
            'metro' => 'required',
            'multicast' => 'required|unique:channels',
            'port' => 'required'
        ]);

        $chn = new channel;

        $chn -> nmr = $request -> nmr;
        $chn -> nama_chn = $request -> nama_chn;
        $chn -> kualitas = $request -> kualitas;
        $chn -> downlink = $request -> downlink;
        $chn -> source = $request -> source;
        $chn -> freq = $request -> freq;
        $chn -> pol = $request -> pol;
        $chn -> sr = $request -> sr;
        $chn -> metro = $request -> metro;
        $chn -> multicast = $request -> multicast;
        $chn -> port = $request -> port;
        $chn -> save($validatedData);

        return redirect('channel');
    }
}
