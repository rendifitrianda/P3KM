<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use App\Models\Pengabdian;
use Illuminate\Http\Request;

class PengabdianController extends Controller
{
    function index(){


        $data['list'] = Pengabdian::with('dosen')->get();
        return view('operator.pengabdian.index', $data);
    }

    function create(){
        $data['dosen'] = Dosen::where('status', 'Dosen')->get();
        return view('operator.pengabdian.create', $data);
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
            return redirect('operator/pengabdian')->with('success', 'Data Pengabdian berhasil disimpan');
        }else{
            return back()->with('danger', 'Data Pengabdian gagal disimpan');
        }
    }

    function edit(Pengabdian $pengabdian){
        $data['list'] = $pengabdian;
        $data['dosen'] = Dosen::where('status', 'Dosen')->get();
        return view('operator.pengabdian.edit', $data);
    }

    function update(Request $request, Pengabdian $pengabdian){

        if($request->berkas != null){
            $pengabdian->id_dosen =  $request->id_dosen;
            $pengabdian->skema =   $request->skema;
            $pengabdian->judul =  $request->judul;
            $pengabdian->tahun =  $request->tahun;
            $pengabdian->dana =  $request->dana;
            $pengabdian->berkas =   $pengabdian->simpanBerkas($request);
            $pengabdian->program =  $request->program;
            $pengabdian->status_pengapdian =  $request->status_pengapdian;
            $pengabdian->update();
            return redirect('operator/pengabdian')->with('success', 'Data Pengabdian berhasil dupdate');
        }else{

            $pengabdian->id_dosen =  $request->id_dosen;
            $pengabdian->skema =   $request->skema;
            $pengabdian->judul =  $request->judul;
            $pengabdian->tahun =  $request->tahun;
            $pengabdian->dana =  $request->dana;
            $pengabdian->program =  $request->program;
            $pengabdian->status_pengapdian =  $request->status_pengapdian;
            $pengabdian->update();
            return redirect('operator/pengabdian')->with('success', 'Data Pengabdian berhasil dupdate');
        }


    }

    function delete(Pengabdian $pengabdian){
        $pengabdian->delete();
        return redirect('operator/pengabdian')->with('success', 'Data Pengabdian berhasil dihapus');
    }
}
