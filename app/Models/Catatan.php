<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Catatan extends Model
{
    use HasFactory;

    protected $table = 'tb_catatan_harian';
    protected $fillable = [
        'id_dosen',
        'jenis_catatan',
        'judul',
        'keterangan'
    ];

    static $rules = [
        'id_dosen' => 'required',
        'jenis_catatan' => 'required',
        'judul' => 'required',
        'keterangan' => 'required'
    ];
    static $messages = [
        'id_dosen.required' => 'ID Dosen wajib diisi',
        'jenis_catatan.required' => 'jenis_catatan wajib diisi',
        'judul.required' => 'Judul wajib diisi',
        'keterangan.required' => 'keterangan wajib diisi'
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
