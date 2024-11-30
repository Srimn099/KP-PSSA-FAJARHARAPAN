<x-layouts.apps>
    <div class="col-span-12">
        <div class="sections-header">
            <h2 class="title">DATA PENGELOLA</h2>
        </div>
    </div>
    <div class="col-span-12">
        <div class="box">
            <div class="header">
                <span></span>
                <a href="#create" data-bs-toggle="modal" class="btn btn-sm btn-success">
                    <i class="bi bi-plus"></i> Tambah
                </a>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No KTP</th>
                                <th>Nama</th>
                                <th>Jensis Kelamin</th>
                                <th>Jabatan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->no_ktp }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->jk }}</td>
                                    <td>{{ $item->jabatan }}</td>
                                    <td>
                                        <div class="btn-group btn-sm">
                                            <a href="#detail{{ $item->id }}" data-bs-toggle="modal"
                                                class="btn btn-sm btn-outline-warning">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <a href="#edit{{ $item->id }}" data-bs-toggle="modal"
                                                class="btn btn-sm btn-outline-primary">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <a href="#hapus{{ $item->id }}" data-bs-toggle="modal"
                                                class="btn btn-sm btn-outline-danger">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Modal hapus -->
                                <x-modals.modalconfirm id="hapus{{ $item->id }}" action="{{ url('keuangan/delete/' . $item->id) }}" />

                                 <!-- Modal detail -->
                                 <x-modals.modaldetail id="detail{{ $item->id }}" title="Detail Siswa">
                                    <ul class="list-vertical">
                                        <img src="{{ $item->foto }}" alt="Foto" class="w-full h-auto rounded-lg">
                                        <x-lists.listvertical title="Nama" subtitle="{{ $item->nama }}" />
                                        <x-lists.listvertical title="Nomor KTP" subtitle="{{ $item->no_ktp }}" />
                                        <x-lists.listvertical title="Jenis Kelamin" subtitle="{{ $item->jk }}" />
                                        <x-lists.listvertical title="Jabatan" subtitle="{{ $item->jabatan }}" />
                                        <x-lists.listvertical title="Usia" subtitle="{{ $item->usia }}" />
                                        <x-lists.listvertical title="Alamat" subtitle="{{ $item->alamat }}" />
                                    </ul>
                                </x-modals.modaldetail>
                                <!-- Modal Update -->
                                <x-modals.modalpost id="edit{{ $item->id }}" title="Form Edit Data Pengelola" action="{{ url('pengelola/update', $item->id) }}">

                                    <x-inputs.input type="file" label="Update Foto" name="foto" placeholder="Masukan foto baru ..." />
                                    <x-inputs.input label="No KTP" name="no_ktp" value="{{ $item->no_ktp }}" placeholder="Masukan no ktp ..." />
                                    <x-inputs.input label="Nama" name="nama" value="{{ $item->nama }}" placeholder="Masukan nama ..." />
                                    <x-inputs.select label="Jenis Kelamin" name="jk">
                                        <option value="">--- Pilih ---</option>
                                        <option value="Laki-laki" @if ($item->jk == 'Laki-laki')
                                            selected
                                        @endif>Laki-laki</option>
                                        <option value="Perempuan" @if ($item->jk == 'Perempuan')
                                            selected

                                        @endif>Perempuan</option>
                                    </x-inputs.select>
                                    <x-inputs.input label="Usia" name="usia" value="{{ $item->usia }}" placeholder="Masukan usia ..." />
                                    <x-inputs.input label="Jabatan" name="jabatan" value="{{ $item->jabatan }}" placeholder="Masukan jabatan ..." />
                                    <x-inputs.input label="Alamat" name="alamat" value="{{ $item->alamat }}" placeholder="Masukan alamat" />
                                </x-modals.modalpost>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal create -->
    <x-modals.modalpost id="create" title="Form Tambah Data Pengelola" action="{{ url('pengelola/store') }}">

        <x-inputs.input type="file" label="Foto" name="foto" placeholder="Masukan foto ..." />
        <x-inputs.input label="No KTP" name="no_ktp" placeholder="Masukan no ktp ..." />
        <x-inputs.input label="Nama" name="nama" placeholder="Masukan nama ..." />
        <x-inputs.select label="Jenis Kelamin" name="jk">
            <option value="">--- Pilih ---</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </x-inputs.select>
        <x-inputs.input label="Usia" name="usia" placeholder="Masukan usia ..." />
        <x-inputs.input label="Jabatan" name="jabatan" placeholder="Masukan jabatan ..." />
        <x-inputs.input label="Alamat" name="alamat" placeholder="Masukan alamat" />
    </x-modals.modalpost>

    @push('js')
        @if ($errors->any())
            <script>
                $(document).ready(function() {
                    var modal = new bootstrap.Modal(document.getElementById('create'));
                    modal.show(); // Tampilkan modal secara otomatis saat halaman dimuat
                });
            </script>
        @endif
    @endpush
</x-layouts.apps>
