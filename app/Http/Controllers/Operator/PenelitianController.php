<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\Penelitian;

class PenelitianController extends Controller
{
    function index(){


        $data['list'] = Penelitian::with('dosen')->get();
        return view('operator.penelitian.index', $data);
    }

    function create(){
        $data['dosen'] = Dosen::where('status', 'Dosen')->get();
        return view('operator.penelitian.create', $data);
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
        return redirect('operator/penelitian')->with('success', 'Data Penelitian berhasil disimpan');
    }

    function edit(Penelitian $penelitian){
        $data['list'] = $penelitian;
        $data['dosen'] = Dosen::where('status', 'Dosen')->get();
        return view('operator.penelitian.edit', $data);
    }

    function update(Request $request, Penelitian $penelitian){

        if($request->berkas != null){
            $penelitian->id_dosen =  $request->id_dosen;
            $penelitian->ketua =   $request->ketua;
            $penelitian->bidang =  $request->bidang;
            $penelitian->tahun =  $request->tahun;
            $penelitian->peran =  $request->peran;
            $penelitian->berkas =  $penelitian->simpanBerkas($request);
            $penelitian->penilaian =  $request->penilaian;
            $penelitian->status_penelitian =  $request->status_penelitian;
            $penelitian->update();
            return redirect('operator/penelitian')->with('success', 'Data Penelitian berhasil dupdate');
        }else{
            $penelitian->id_dosen =  $request->id_dosen;
            $penelitian->ketua =   $request->ketua;
            $penelitian->bidang =  $request->bidang;
            $penelitian->tahun =  $request->tahun;
            $penelitian->peran =  $request->peran;
            $penelitian->penilaian =  $request->penilaian;
            $penelitian->status_penelitian =  $request->status_penelitian;
            $penelitian->update();
            return redirect('operator/penelitian')->with('success', 'Data Penelitian berhasil dupdate');
        }


    }

    function delete(Penelitian $penelitian){
        $penelitian->delete();
        return redirect('operator/penelitian')->with('success', 'Data Penelitian berhasil dihapus');
    }
}
