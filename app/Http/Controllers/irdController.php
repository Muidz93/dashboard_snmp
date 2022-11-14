<?php

namespace App\Http\Controllers;

use App\Models\channel;
use App\Models\ird;
use App\Models\snmp;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client;

class irdController extends Controller
{
    public function readData()
    {
        return view('ird.list_ird',[
            "title" => "List IRD",
            "active" => 'list_ird',
            "irds" => ird::latest()->filter(request(['search']))->paginate(10)->withQueryString(),
            "title"=>'list_ird'
        ]);
    }

    public function index()
    {
        $irds = new ird;
        return view('ird.input_ird', compact('irds'), [
            'title' => 'Input_IRD'
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'sn' => 'required|unique:irds',
            'merk' => 'required',
            'type' => 'required',
            'owner' => 'required',
            'control' => 'required|unique:irds',
            'channel' => 'required',
        ]);

        $irds = new ird;
        $irds -> sn = $request -> sn;
        $irds -> merk = $request -> merk;
        $irds -> type = $request -> type;
        $irds -> owner = $request -> owner;
        $irds -> control = $request -> control;
        $irds -> channel = $request -> channel;
        $irds -> save($validatedData);

        return redirect('/list_ird');
    }

    public function hitung()
    {
        // Logic Hitung IRD
        $hitung = ird::count();
        $harmonic = ird::where('merk', 'Harmonic')->count();
        $ericsson = ird::where('merk', 'Ericsson')->count();
        // return view('home',compact('hitung'));
        // return $hitung;

        // Logic Hitung Channel
        $chn = channel::count();
        $hd = channel::where('kualitas', 'HD')->count();
        $sd = channel::where('kualitas', 'SD')->count();
        $snmp =snmp::all();
        // $client = new Client(); 
        // $url = "http://localhost:8080/api/ird";


        // $response = $client->request('GET', $url, [
        //     'verify'  => false,
        // ]);

        // $responseBody = json_decode($response->getBody());
        return view('home',compact('hd','hitung', 'harmonic','sd','chn','ericsson','snmp'),[
            'title'=>"home"
        ]);
    }

   public function detail($id)
   {
       $snmp=snmp::find($id);
        if ($snmp === null) {
            return redirect('/')->with('bandel', 'bandel');
        }
       return view('dashboard.snmp',compact('snmp'),[
            'title'=>"detail_ird"
        ]);
   }
   public function edit($id)
   {
        $snmp=snmp::find($id);
        if ($snmp === null) {
            return redirect('/')->with('bandel', 'bandel');
        }
       return view('dashboard.edit',compact('snmp'),[
            'title'=>"edit_ird"
        ]);
   }
   public function postEdit($id,request $request)
   {
        $snmp=snmp::findOrFail($id);
        $snmp->satelit1=$request->satelit1;
        $snmp->satelit2=$request->satelit2;
        $snmp->satelit3=$request->satelit3;
        $snmp->satelit4=$request->satelit4;
        $snmp->sdi_out1=$request->sdi_out1;
        $snmp->sdi_out2=$request->sdi_out2;
        $snmp->sdi_out3=$request->sdi_out3;
        $snmp->update();
        return redirect('/ird/'.$snmp->id);
   }
   public function editIrd($id)
   {
        $ird=ird::find($id);
        return view('ird.edit',compact('ird'),[
            'title'=>"edit_ird"
        ]);
   }
   public function postIrd($id,request $request)
   {
        $ird = ird::find($id);
        $ird->merk = $request->merk;
        $ird->type = $request->type;
        $ird->sn = $request->sn;
        $ird->control = $request->control;
        $ird->owner = $request->owner;
        $ird->channel = $request->channel;
        $ird->update();
        return redirect('/list_ird')->with('berhasil','berhasil ubah data');
   }
   public function hapus($id)
   {
        $ird=ird::find($id);
         if ($ird === null) {
            return redirect('/')->with('bandel', 'id tidak di temukan');
        }
        $ird->delete();
        return redirect()->back();
   }
}
