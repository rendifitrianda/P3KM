<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\Penelitian;
use Illuminate\Support\Facades\Auth;

class PenelitianController extends Controller
{
    function index(){

        $id = Auth::guard('role')->user()->id;
        $data['list'] = Penelitian::with('dosen')->where('id_dosen', $id)->get();
        return view('dosen.penelitian.index', $data);
    }

    function create(){
        $id = Auth::guard('role')->user()->id;
        $data['dosen'] = Dosen::where('id', $id)->first();
        return view('dosen.penelitian.create', $data);
    }

    function store(Request $request){


        $request->validate(Penelitian::$rules,Penelitian::$messages);
        $penelitian = new Penelitian();
        $penelitian->id_dosen =  $request->id_dosen;
        $penelitian->ketua =   $request->ketua;
        $penelitian->bidang =  $request->bidang;
        $penelitian->tahun =  $request->tahun;
        $penelitian->peran =  $request->peran;
        $penelitian->berkas =  $penelitian->simpanBerkas($request);
        $penelitian->penilaian =  $request->penilaian;
        $penelitian->status_penelitian =  $request->status_penelitian;
        $penelitian->save();
        return redirect('dosen/penelitian')->with('success', 'Data Penelitian berhasil disimpan');
    }

    function edit(Penelitian $penelitian){
        $data['list'] = $penelitian;
        $data['dosen'] = Dosen::where('status', 'Dosen')->get();
        return view('dosen.penelitian.edit', $data);
    }

    function update(Request $request, Penelitian $penelitian){

        if($request->berkas != null){
            $penelitian->ketua =   $request->ketua;
            $penelitian->bidang =  $request->bidang;
            $penelitian->tahun =  $request->tahun;
            $penelitian->peran =  $request->peran;
            $penelitian->berkas =  $penelitian->simpanBerkas($request);
            $penelitian->update();
            return redirect('dosen/penelitian')->with('success', 'Data Penelitian berhasil diperbaharui');
        }else{
            $penelitian->ketua =   $request->ketua;
            $penelitian->bidang =  $request->bidang;
            $penelitian->tahun =  $request->tahun;
            $penelitian->peran =  $request->peran;
            $penelitian->update();
            return redirect('dosen/penelitian')->with('success', 'Data Penelitian berhasil diperbaharui');
        }

    }

}
