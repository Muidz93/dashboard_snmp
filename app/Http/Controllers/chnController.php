<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;
use App\Models\channel;
use Illuminate\Validation\Rules\Unique;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
class chnController extends Controller
{
    public function readData()
    {
        $channels = DB::table('channels')->get();
        return view('channel',compact('channels')); 
    }

    public function input()
    {
        return view('channels.input_chn', [
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
    public function hapus($id)
    {
        $channel=channel::find($id);
         if ($channel === null) {
            return redirect('/')->with('bandel', 'id tidak di temukan');
        }
        $channel->delete();
        return redirect()->back();
    }
    public function edit($id)
    {
        $channel=channel::find($id);
        return view('channels.edit',compact('channel'));
    }
    public function postEdit($id,Request $request)
    {
        $chn = channel::find($id);
        $chn->nmr = $request->nmr;
        $chn->nama_chn = $request->nama_chn;
        $chn->kualitas = $request->kualitas;
        $chn->downlink = $request->downlink;
        $chn->source = $request->source;
        $chn->freq = $request->freq;
        $chn->pol = $request->pol;
        $chn->sr = $request->sr;
        $chn->metro = $request->metro;
        $chn->multicast = $request->multicast;
        $chn->port = $request->port;
        $chn->update();
        return redirect('/channels')->with('berhasil','berhasil ubah data');
        // return $chn;
    }
    public function err($er)
    {
        return view('error', compact('er'));
    }
    
}
