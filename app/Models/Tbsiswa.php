<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Tbsiswa extends Model
{
    use HasFactory;
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
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    function ttl()
    {
        return $this->tmp_lahir . ',' . $this->tgl_lahir;
    }

    public static function handleUpload($file)
    {
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $tmp = $file->move('assets/images/fotosiswa/', $fileName);
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
