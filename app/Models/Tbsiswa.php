<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tbsiswa extends Model
{
    protected $table = 'tb_siswa';
    protected $fillable = [
       'foto',
       'nama',
       'tmp_lahir',
       'tgl_lahir',
       'jk',
       'pendidikan_terakhir',
       'nama_ayah',
       'nama_ibu',
       'pk_ortu',
       'alamat',
       'tgl_masuk',
       'tgl_keluar',
       'status',
       'keterangan',
    ];
    static $rules = [
        'foto' => 'required',
        'nama' => 'required',
        'tmp_lahir' => 'required',
        'tgl_lahir' => 'required',
        'jk' => 'required',
        'pendidikan_terakhir' => 'required',
        'nama_ayah' => 'required',
        'nama_ibu' => 'required',
        'pk_ortu' => 'required',
        'alamat' => 'required',
        'tgl_masuk' => 'required',
        'tgl_keluar' => 'required',
        'status' => 'required',
        'keterangan' => 'required',
    ];
    static $messages = [
       'foto.required' => 'Foto wajib diisi',
        'nama.required' => 'Nama wajib diisi',
        'tmp_lahir.required' => 'Tempat Lahir wajib diisi',
        'tgl_lahir.required' => 'Tanggal Lahir wajib diisi',
        'jk.required' => 'Jenis Kelamin wajib dipilih',
        'pendidikan_terakhir.required' => 'Pendidikan Terakhir wajib diisi',
        'nama_ayah.required' => 'Nama Ayah wajib diisi',
        'nama_ibu.required' => 'Nama Ibu wajib diisi',
        'pk_ortu.required' => 'Pekerjaan Ortu wajib diisi',
        'alamat.required' => 'Alamat wajib diisi',
        'tgl_masuk.required' => 'Tanggal Masuk wajib diisi',
        'tgl_keluar.required' => 'Tanggal Keluar wajib diisi',
        'status.required' => 'Status wajib diisi',
        'keterangan.required' => 'Keterangan wajib diisi',
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    static function handleUploadFoto($file){
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('foto'), $fileName);
        return $fileName;
    }

    static function handleDeleteFoto($fileName){
        $filePath = public_path('foto/' . $fileName);
        if(file_exists($filePath)){
            unlink($filePath);
        }
    }


}
