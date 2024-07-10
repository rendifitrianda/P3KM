<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use App\Models\Pengabdian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengabdianController extends Controller
{
    function index(){

        $id = Auth::guard('role')->user()->id;
        $data['list'] = Pengabdian::with('dosen')->where('id_dosen', $id)->get();
        return view('dosen.pengabdian.index', $data);
    }

    function create(){
        $id = Auth::guard('role')->user()->id;
        $data['dosen'] = Dosen::where('id', $id)->first();
        return view('dosen.pengabdian.create', $data);
    }

    function store(Request $request){


        $request->validate(Pengabdian::$rules,Pengabdian::$messages);
        $pengabdian = new Pengabdian();
        $pengabdian->id_dosen =  $request->id_dosen;
        $pengabdian->skema =   $request->skema;
        $pengabdian->judul =  $request->judul;
        $pengabdian->tahun =  $request->tahun;
        $pengabdian->dana =  $request->dana;
        $pengabdian->berkas =   $pengabdian->simpanBerkas($request);
        $pengabdian->program =  $request->program;
        $pengabdian->status_pengapdian =  $request->status_pengapdian;
        $simpan = $pengabdian->save();
        if($simpan){
            return redirect('dosen/pengabdian')->with('success', 'Data Pengabdian berhasil disimpan');
        }else{
            return back()->with('danger', 'Data Pengabdian gagal disimpan');
        }
    }

    function edit(Pengabdian $pengabdian){
        $data['list'] = $pengabdian;
        $data['dosen'] = Dosen::where('status', 'Dosen')->get();
        return view('dosen.pengabdian.edit', $data);
    }

    function update(Request $request, Pengabdian $pengabdian){

        if($request->berkas != null){
            $pengabdian->skema =   $request->skema;
            $pengabdian->judul =  $request->judul;
            $pengabdian->tahun =  $request->tahun;
            $pengabdian->dana =  $request->dana;
            $pengabdian->berkas =   $pengabdian->simpanBerkas($request);
            $pengabdian->program =  $request->program;
            $pengabdian->update();
            return redirect('dosen/pengabdian')->with('success', 'Data Pengabdian berhasil dupdate');
        }else{


            $pengabdian->skema =   $request->skema;
            $pengabdian->judul =  $request->judul;
            $pengabdian->tahun =  $request->tahun;
            $pengabdian->dana =  $request->dana;
            $pengabdian->program =  $request->program;
            $pengabdian->update();
            return redirect('dosen/pengabdian')->with('success', 'Data Pengabdian berhasil dupdate');
        }


    }

}
