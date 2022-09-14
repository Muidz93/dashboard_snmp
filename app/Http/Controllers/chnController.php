<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;
use App\Models\channel;
use App\Models\gdrive;
use App\Models\snmp;
use GuzzleHttp\Client;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use App\Models\website;


class chnController extends Controller
{
    public function readData()
    {
        // $channels = DB::table('channels')->get();
        return view('channel',[
            "channels" => channel::orderBy('nmr','asc')->latest()->filter(request(['search']))->paginate(10)->withQueryString(),
            "title"=>'channels'
        ]);
    }

    public function input()
    {
        return view('channels.input_chn', [
            'title'=>'Input_Channel'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nmr' => 'required|unique:channels|numeric|min:2',
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
        return redirect('/channels');
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
        return view('channels.edit',compact('channel'),[
            'title'=>"edit_ird"
        ]);
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
        return view('error', compact('er'),[
            'title'=>"error"
        ]);
    }
    public function website()
    {
        $website=website::all();
        return view("website",compact('website'),[
            "title"=>'website'
        ]);
    }
    public function websiteAdd()
    {
        return view("websites/input_website",[
            'title'=>"website_add"
        ]);
    }
    public function websitePost(Request $request)
    {
        $website = new website;
        if (website::count() === 0) {
            $website->id = 1;
            $usid = $website->id;
        } else {
            $user = website::latest()->first();
            $usid = $user->id + 1;
        }
        $file = $request->logo;
        $slug = Str::slug($request->nama);
        $filename = $slug . $usid . '.' . $file->extension();
        $file->move(public_path('images/logo'), $filename);
        $website->nama_web = $request->nama;
        $website->gambar = $filename;
        $website->link = $request->link;
        $website->save();
        Alert::success('berhasil masukan data', 'Thank You');
        return redirect('/website');
    }
    public function websiteDelete($id)
    {
        $website=website::find($id);
         if ($website === null) {
            return redirect('/')->with('bandel', 'id tidak di temukan');
        }
        if ($website != "") {
            unlink(public_path('images/logo') . '\\' . $website->gambar);
        }
        $website->delete();
        Alert::success('Delete successful', 'Thank You');
        return redirect()->back();
    }
    public function data()
    {
        return view('gdrive/data',[
            "gdrive" => gdrive::latest()->filter(request(['search']))->paginate(10)->withQueryString(),
            "title"=>'data'
        ]);
    }
    public function gdrive()
    {
        return view('gdrive/input_gdrive',[
            'title'=>"input_gdrive"
        ]);
    }
    public function gdrivepost(Request $request)
    {
        $gdrive=new gdrive;
        $gdrive->nama_file=$request->nama;
        $gdrive->owner=$request->owner;
        $gdrive->link=$request->link;
        $gdrive->save();
        Alert::success('input successful', 'Thank You');
        return redirect('/data');
    }
    public function gdriveedit($id)
    {
        $gdrive=gdrive::find($id);
        return view('gdrive/edit_gdrive',compact('gdrive'),[
            'title'=>"detail_gdrive"
        ]);
    }
    public function gdriveeditPost($id, Request $request)
    {
        $gdrive=gdrive::find($id);
        $gdrive->nama_file=$request->nama;
        $gdrive->owner=$request->owner;
        $gdrive->link=$request->link;
        $gdrive->update();
        Alert::success('edit successful', 'Thank You');
        return redirect('/data')->with('berhasil','berhasil ubah data');
    }
    public function gdriveDelete($id)
    {
        $gdrive=gdrive::find($id);
         if ($gdrive === null) {
            return redirect('/')->with('bandel', 'id tidak di temukan');
        }
        $gdrive->delete();
        Alert::success('Delete successful', 'Thank You');
        return redirect()->back();
    }
    public function encoder()
    {
        return view("encoder/encoder",["title"=>"encoder"]);
    }
    public function irdLiveAdd()
    {
        return view('input_irdlive',['title'=>'inputIrd']);
    }
    public function irdLivePost(Request $request)
    {
        $snmp=new snmp;
        $snmp->ip_control=$request->ipcontrol;
        $snmp->video_bitrate=0;
        $snmp->kualitas=0;
        $snmp->status_sat="DISCONNECTED";
        $snmp->margin=0;
        $snmp->status_ip="DISCONNECTED";
        $snmp->service="DISCONNECTED";
        $snmp->status_video="DISCONNECTED";
        $snmp->ts_bitrate=0;
        $snmp->PID_audio="DISCONNECTED";
        $snmp->PID_audio2="DISCONNECTED";
        $snmp->save();
        return redirect('/');
    }
}
