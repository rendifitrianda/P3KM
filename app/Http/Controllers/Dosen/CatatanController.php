<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\Models\Catatan;
use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CatatanController extends Controller
{
    function index(){
        $id = Auth::guard('role')->user()->id;
        $data['list'] =  Catatan::with('dosen')->where('id_dosen', $id)->get();
        return view('dosen.catatan.index', $data);
    }

    function create(){
        $id = Auth::guard('role')->user()->id;
        $data['dosen'] = Dosen::where('id', $id)->first();
        return view('dosen.catatan.create', $data);
    }

    function store(Request $request){

        $request->validate(Catatan::$rules,Catatan::$messages);
        $catatan = new Catatan();
        $catatan->id_dosen =  $request->id_dosen;
        $catatan->jenis_catatan =   $request->jenis_catatan;
        $catatan->judul =  $request->judul;
        $catatan->keterangan =  $request->keterangan;
        $catatan->save();
        return redirect('dosen/catatan')->with('success', 'Data Catatan berhasil disimpan');
    }

    function edit(Catatan $catatan){
        $data['list'] = $catatan;
        $data['dosen'] = Dosen::where('status', 'Dosen')->get();
        return view('dosen.catatan.edit', $data);
    }

    function update(Request $request, Catatan $catatan){


        $catatan->jenis_catatan =   $request->jenis_catatan;
        $catatan->judul =  $request->judul;
        $catatan->keterangan =  $request->keterangan;
        $catatan->update();
        return redirect('dosen/catatan')->with('success', 'Data Catatan berhasil diupdate');

    }

    function delete(Catatan $catatan){
        $catatan->delete();
        return redirect('dosen/catatan')->with('success', 'Data Catatan berhasil dihapus');
    }
}
