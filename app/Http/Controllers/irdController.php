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
        return view('list_ird',[
            "title" => "List IRD",
            "active" => 'list_ird',
            "irds" => ird::latest()->filter(request(['search']))->paginate(10)->withQueryString(),
            "title"=>'list_ird'
        ]);
    }

    public function index()
    {
        $irds = new ird;
        return view('input.input_ird', compact('irds'), [
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
}
