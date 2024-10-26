<x-layouts.apps>
    <div class="col-span-12">
        <div class="sections-header">
            <h2 class="title">DATA ASET</h2>
        </div>
    </div>
    <div class="col-span-12">
        <div class="box">
            <div class="header">
                <span></span>
                <a href="{{ url('aset/create') }}" class="btn btn-sm btn-success">
                    <i class="bi bi-plus"></i> Tambah
                </a>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>Nama Barang</th>
                                <th>Satuan</th>
                                <th>Harga</th>
                                <th>Merk</th>
                                <th>Diperoleh Tanggal</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($list as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->kode_aset }}</td>
                                    <td>{{ $item->nama_aset }}</td>
                                    <td>{{ $item->satuan }}</td>
                                    <td>@formatRupiah($item->harga)</td>
                                    <td>{{ $item->merk }}</td>
                                    <td>@tglLengkap($item->tgl_peroleh)</td>
                                    <td>
                                        <div class="btn-group btn-sm">
                                            <a href="{{ url('aset/edit',$item->id) }}" class="btn btn-sm btn-outline-warning">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <a href="{{ url('aset/edit',$item->id) }}" class="btn btn-sm btn-outline-primary">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-outline-danger">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-layouts.apps>
