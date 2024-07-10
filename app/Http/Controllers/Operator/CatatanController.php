<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use App\Models\Catatan;
use App\Models\Dosen;
use Illuminate\Http\Request;

class CatatanController extends Controller
{
    function index(){
        $data['list'] = Catatan::with('dosen')->get();
        return view('operator.catatan.index', $data);
    }

    function create(){
        $data['dosen'] = Dosen::where('status', 'Dosen')->get();
        return view('operator.catatan.create', $data);
    }

    function store(Request $request){

        $request->validate(Catatan::$rules,Catatan::$messages);
        $catatan = new Catatan();
        $catatan->id_dosen =  $request->id_dosen;
        $catatan->jenis_catatan =   $request->jenis_catatan;
        $catatan->judul =  $request->judul;
        $catatan->keterangan =  $request->keterangan;
        $catatan->save();
        return redirect('operator/catatan')->with('success', 'Data Catatan berhasil disimpan');
    }

    function edit(Catatan $catatan){
        $data['list'] = $catatan;
        $data['dosen'] = Dosen::where('status', 'Dosen')->get();
        return view('operator.catatan.edit', $data);
    }

    function update(Request $request, Catatan $catatan){


        $catatan->id_dosen =  $request->id_dosen;
        $catatan->jenis_catatan =   $request->jenis_catatan;
        $catatan->judul =  $request->judul;
        $catatan->keterangan =  $request->keterangan;
        $catatan->update();
        return redirect('operator/catatan')->with('success', 'Data Catatan berhasil diupdate');

    }

    function delete(Catatan $catatan){
        $catatan->delete();
        return redirect('operator/catatan')->with('success', 'Data Catatan berhasil dihapus');
    }
}
