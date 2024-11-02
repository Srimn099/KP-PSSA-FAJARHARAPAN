<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tbpengelola extends Model
{
    protected $table = 'tb_pengelola';
    protected $fillable = [
       'foto',
       'no_ktp',
       'nama',
       'jk',
       'usia',
       'alamat',
       'jabatan',
    ];
    static $rules = [
        'foto' => 'required',
        'no_ktp' => 'required',
        'nama' => 'required',
        'jk' => 'required',
        'usia' => 'required',
        'alamat' => 'required',
        'jabatan' => 'required',
    ];
    static $messages = [
       'foto.required' => 'Foto wajib diisi',
        'no_ktp.required' => 'No KTP wajib diisi',
        'nama.required' => 'Nama wajib diisi',
        'jk.required' => 'Jenis Kelamin wajib dipilih',
        'usia.required' => 'Usia wajib diisi',
        'alamat.required' => 'Alamat wajib diisi',
        'jabatan.required' => 'Jabatan wajib diisi',
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];



    public static function handleUpload($file)
    {
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $tmp = $file->move('assets/images/fotopengelola/', $fileName);
        return $tmp;
    }
    public static function handleDelete($file)
    {
        if ($file) {
            if (file_exists($file)) {
                unlink($file);
                return true;
            }
        }
    }
}
