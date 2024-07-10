<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Pengabdian extends Model
{
    use HasFactory;

    protected $table = 'tb_pengabdian';
    protected $fillable = [
        'id_dosen',
        'skema',
        'judul',
        'tahun',
        'dana',
        'berkas',
        'program',
        'status_pengapdian',
    ];

    static $rules = [
        'id_dosen' => 'required',
        'skema' => 'required',
        'judul' => 'required',
        'tahun' => 'required',
        'dana' => 'required',
        'berkas' => 'required',
        'program' => 'required',
    ];
    static $messages = [
        'id_dosen.required' => 'ID Dosen wajib diisi',
        'skema.required' => 'Skema wajib diisi',
        'judul.required' => 'Judul wajib diisi',
        'tahun.required' => 'Tahun wajib diisi',
        'dana.required' => 'Dana wajib diisi',
        'berkas.required' => 'Berkas wajib diisi',
        'program.required' => 'Program wajib diisi',
    ];

    function dosen(){
        return $this->belongsTo(Dosen::class, 'id_dosen', 'id');
    }

    public function dibuat(){
        return $this->created_at;
    }
    public function diperbaiki(){
        return $this->updated_at;
    }

    public function simpanBerkas(Request $request){
        if ($request->hasFile('berkas')) {
            $file = $request->file('berkas');
            $path = $file->store('berkas_pengabdian');
            return $path;
        }
        return null;
    }


    protected $hidden = [
        'created_at',
        'updated_at',
        'password'
    ];
}
