<x-layouts.apps>
    <div class="col-span-12">
        <div class="sections-header">
            <h2 class="title">DATA SISWA</h2>
        </div>
    </div>
    <div class="col-span-12">
        <div class="box">
            <div class="header">
                <span></span>
                <a href="{{ url('siswa/create') }}" class="btn btn-sm btn-success">
                    <i class="bi bi-plus"></i> Tambah
                </a>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Tempat Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Tgl Masuk</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($list as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->ttl() }}</td>
                                    <td>{{ $item->jk }}</td>
                                    <td>@tglLengkap($item->tgl_masuk)</td>
                                    <td>
                                        <div class="btn-group btn-sm">
                                            <a href="#detail{{ $item->id }}" data-bs-toggle="modal" class="btn btn-sm btn-outline-warning">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <a href="{{ url('siswa/edit',$item->id) }}" class="btn btn-sm btn-outline-primary">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <a href="#hapus{{ $item->id }}" data-bs-toggle="modal" class="btn btn-sm btn-outline-danger">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Modal hapus -->
                                <x-modals.modalconfirm id="hapus{{ $item->id }}" action="{{ url('siswa/delete/'.$item->id) }}"/>
                                <!-- Modal detail -->
                                <x-modals.modaldetail id="detail{{ $item->id }}" title="Detail Siswa">
                                    <ul class="list-vertical">
                                        <img src="{{ $item->foto }}" alt="Foto" class="w-full h-auto rounded-lg">
                                        <x-lists.listvertical title="Nama" subtitle="{{ $item->nama }}" />
                                        <x-lists.listvertical title="Tempat Tanggal Lahir" subtitle="{{ $item->ttl() }}" />
                                        <x-lists.listvertical title="Jenis Kelamin" subtitle="{{ $item->jk }}" />
                                        <x-lists.listvertical title="Pendidikan Terakhir" subtitle="{{ $item->pendidikan_terakhir }}" />
                                        <x-lists.listvertical title="Nama Ayah" subtitle="{{ $item->nama_ayah }}" />
                                        <x-lists.listvertical title="Nama Ibu" subtitle="{{ $item->nama_ibu }}" />
                                        <x-lists.listvertical title="Pekerjaan Orang Tua" subtitle="{{ $item->pk_ortu }}" />
                                        <x-lists.listvertical title="Alamat" subtitle="{{ $item->alamat }}" />
                                        <x-lists.listvertical title="Tanggal Masuk" subtitle="{{ $item->tgl_masuk }}" />
                                        <x-lists.listvertical title="Tanggal Keluar" subtitle="{{ $item->tgl_keluar }}" />
                                    </ul>
                                </x-modals.modaldetail>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-layouts.apps>
