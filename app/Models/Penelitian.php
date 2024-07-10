<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Penelitian extends Model
{
    use HasFactory;

    protected $table = 'tb_penelitian';
    protected $fillable = [
        'id_dosen',
        'ketua',
        'bidang',
        'tahun',
        'peran',
        'berkas',
        'penilaian',
        'status_penelitian'
    ];

    static $rules = [
        'id_dosen' => 'required',
        'ketua' => 'required',
        'bidang' => 'required',
        'tahun' => 'required',
        'peran' => 'required',
        'berkas' => 'required',
        'penilaian' => 'required',
        'status_penelitian' => 'required'
    ];
    static $messages = [
        'id_dosen.required' => 'Dosen wajib diisi',
        'ketua.required' => 'ketua wajib diisi',
        'bidang.required' => 'bidang wajib diisi',
        'tahun.required' => 'tahun wajib diisi',
        'peran.required' => 'Program Studi wajib diisi',
        'berkas.required' => 'berkas wajib diisi',
        'penilaian.required' => 'Penilaian wajib diisi',
        'status_penelitian.required' => 'Status Penelitian wajib diisi'
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
            $path = $file->store('berkas_penelitian');
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
