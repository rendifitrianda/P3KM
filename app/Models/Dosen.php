<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Dosen extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'tb_dosen';
    protected $fillable = [
        'nama',
        'nidn',
        'klaster',
        'institusi',
        'program_studi',
        'ktp',
        'jabatan',
        'alamat',
        'tmp_lahir',
        'tgl_lahir',
        'tlp',
        'website',
        'username',
        'password',
        'status'
    ];

    static $rules = [
        'nama' => 'required|unique:tb_dosen',
        'nidn' => 'required',
        'klaster' => 'required',
        'institusi' => 'required',
        'program_studi' => 'required',
        'ktp' => 'required',
        'jabatan' => 'required',
        'alamat' => 'required',
        'tmp_lahir' => 'required',
        'tgl_lahir' => 'required',
        'tlp' => 'required',
        'website' => 'required',
        'username' => 'required',
        'password' => 'required',
        'status' => 'required'
    ];

    static $messages = [
        'nama.required' => 'Nama Dosen wajib diisi',
        'nidn.required' => 'NIDN Dosen wajib diisi',
        'klaster.required' => 'Klaster Dosen wajib diisi',
        'institusi.required' => 'Institusi Dosen wajib diisi',
        'program_studi.required' => 'Program Studi Dosen wajib diisi',
        'ktp.required' => 'KTP Dosen wajib diisi',
        'jabatan.required' => 'Jabatan Dosen wajib diisi',
        'alamat.required' => 'Alamat Dosen wajib diisi',
        'tmp_lahir.required' => 'Tmp Lahir Dosen wajib diisi',
        'tgl_lahir.required' => 'Tgl Lahir Dosen wajib diisi',
        'tlp.required' => 'Tlp Dosen wajib diisi',
        'website.required' => 'Website Dosen wajib diisi',
        'username.required' => 'Username Dosen wajib diisi',
        'password.required' => 'Password Dosen wajib diisi',
        'status.required' => 'Status Dosen wajib diisi'
    ];

    public function ttl(){
        return $this->tmp_lahir.', '.$this->tgl_lahir;
    }


    protected $hidden = [
        'created_at',
        'updated_at',
        'password'
    ];
}
