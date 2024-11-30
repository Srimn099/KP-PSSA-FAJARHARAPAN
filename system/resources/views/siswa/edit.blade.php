<x-layouts.apps>
    <div class="col-span-12">
        <div class="box">
            <div class="header">
                <h2 class="title">FORM TAMBAH DATA SISWA</h2>
            </div>
            <div class="body">
                <form action="{{ url('siswa/update', $list->id) }}" method="POST" class="form-post-data" enctype="multipart/form-data">
                    @csrf
                    <div class="col-span-12 md:col-span-3">
                        <x-inputs.input type="file" label="Update Foto" name="foto" placeholder="Masukan foto baru ..." />
                    </div>
                    <div class="col-span-12 md:col-span-3">
                        <x-inputs.input label="Nama" name="nama" value="{{ $list->nama }}" placeholder="Masukan nama ..." />
                    </div>
                    <div class="col-span-12 md:col-span-3">
                        <x-inputs.input label="Tempat Lahir" name="tmp_lahir" value="{{ $list->tmp_lahir }}" placeholder="Masukan tempat lahir ..." />
                    </div>
                    <div class="col-span-12 md:col-span-3">
                        <x-inputs.input type="date" label="Tanggal Lahir" name="tgl_lahir" value="{{ $list->tgl_lahir }}" placeholder="Masukan tanggal lahir ..." />
                    </div>
                    <div class="col-span-12 md:col-span-3">
                        <x-inputs.select label="Jenis Kelamin" name="jk">
                            <option value="">--- Pilih ---</option>
                            <option value="Laki-laki" @if ($list->jk == 'Laki-laki') selected @endif>Laki-laki</option>
                            <option value="Perempuan" @if ($list->jk == 'Perempuan') selected @endif>Perempuan</option>
                        </x-inputs.select>
                    </div>
                    <div class="col-span-12 md:col-span-3">
                        <x-inputs.input label="Pendidikan Terakhir" name="pendidikan_terakhir" value="{{ $list->pendidikan_terakhir }}" placeholder="Masukan pendidikan terakhir ..." />
                    </div>
                    <div class="col-span-12 md:col-span-3">
                        <x-inputs.input label="Nama Ayah" name="nama_ayah" value="{{ $list->nama_ayah }}" placeholder="Masukan nama ayah ..." />
                    </div>
                    <div class="col-span-12 md:col-span-3">
                        <x-inputs.input label="Nama Ibu" name="nama_ibu" value="{{ $list->nama_ibu }}" placeholder="Masukan nama ibu ..." />
                    </div>
                    <div class="col-span-12 md:col-span-3">
                        <x-inputs.input label="Pekerjaan Orang Tua" name="pk_ortu" value="{{ $list->pk_ortu }}" placeholder="Masukan pekerjaan orang tua ..." />
                    </div>
                    <div class="col-span-12 md:col-span-3">
                        <x-inputs.input type="date" label="Tanggal Masuk" name="tgl_masuk" value="{{ $list->tgl_masuk }}" placeholder="Masukan Tanggal Masuk ..." />
                    </div>
                    <div class="col-span-12 md:col-span-3">
                        <x-inputs.input  label="Tanggal Keluar" name="tgl_keluar" value="{{ $list->tgl_keluar }}" placeholder="Masukan Tanggal Keluar ..." />
                    </div>

                    <div class="col-span-12 md:col-span-3">
                        <x-inputs.input label="Alamat Lengkap" name="alamat" value="{{ $list->alamat }}" placeholder="Masukan alamat lengkap ..." />
                    </div>
                    <div class="col-span-12 md:col-span-12">
                        <div class="flex items-center justify-end space-x-2">
                            <a href="{{ url('siswa') }}" class="btn btn-secondary">KEMBALI</a>
                            <button class="btn btn-primary">UPDATE DATA</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layouts.apps>
