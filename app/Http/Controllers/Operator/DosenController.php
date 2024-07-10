<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dosen;


class DosenController extends Controller
{
    function index(){
        $data['list'] = Dosen::all();
        return view('operator.dosen.index', $data);
    }

    function create(){
        return view('operator.dosen.create');
    }

    function store(Request $request){
        $request->validate(Dosen::$rules, Dosen::$messages);
        Dosen::create([
            'nama' => $request->nama,
            'nidn' => $request->nidn,
            'klaster' => $request->klaster,
            'institusi' => $request->institusi,
            'program_studi' => $request->program_studi,
            'ktp' => $request->ktp,
            'jabatan' => $request->jabatan,
            'alamat' => $request->alamat,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'tlp' => $request->tlp,
            'website' => $request->website,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'status' => $request->status

        ]);
        return redirect('operator/dosen')->with('success', 'Data Dosen berhasil disimpan');
    }

    function edit(Dosen $dosen){
        $data['list'] = $dosen;
        return view('operator.dosen.edit', $data);
    }

    function update(Request $request, Dosen $dosen){

        if($request->password != null){
            $dosen->update([
                'nama' => $request->nama,
                'nidn' => $request->nidn,
                'klaster' => $request->klaster,
                'institusi' => $request->institusi,
                'program_studi' => $request->program_studi,
                'ktp' => $request->ktp,
                'jabatan' => $request->jabatan,
                'alamat' => $request->alamat,
                'tmp_lahir' => $request->tmp_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'tlp' => $request->tlp,
                'website' => $request->website,
                'username' => $request->username,
                'password' => bcrypt($request->password)
            ]);
            return redirect('operator/dosen')->with('success', 'Data Dosen berhasil dupdate');
        }else{
            $dosen->update([
                'nama' => $request->nama,
                'nidn' => $request->nidn,
                'klaster' => $request->klaster,
                'institusi' => $request->institusi,
                'program_studi' => $request->program_studi,
                'ktp' => $request->ktp,
                'jabatan' => $request->jabatan,
                'alamat' => $request->alamat,
                'tmp_lahir' => $request->tmp_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'tlp' => $request->tlp,
                'website' => $request->website,
                'username' => $request->username
            ]);
            return redirect('operator/dosen')->with('success', 'Data Dosen berhasil dupdate');
        }


    }

    function delete(Dosen $dosen){
        $dosen->delete();
        return redirect('operator/dosen')->with('success', 'Data Dosen berhasil dihapus');
    }
}
