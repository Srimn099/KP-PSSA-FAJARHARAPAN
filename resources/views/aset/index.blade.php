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
                                <th>Barang</th>
                                <th>Satuan</th>
                                <th>Harga</th>
                                <th>Qty</th>
                                <th>Total</th>
                                <th>Tgl Peroleh</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($list as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama_aset }}</td>
                                    <td>{{ $item->satuan }}</td>
                                    <td>@formatRupiah($item->harga)</td>
                                    <td>{{ $item->qty }}</td>
                                    <td>@formatRupiah($item->total)</td>
                                    <td>@tglLengkap($item->tgl_peroleh)</td>
                                    <td>
                                        <div class="btn-group btn-sm">
                                            <a href="#detail{{ $item->id }}" data-bs-toggle="modal" class="btn btn-sm btn-outline-warning">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <a href="{{ url('aset/edit',$item->id) }}" class="btn btn-sm btn-outline-primary">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <a href="#hapus{{ $item->id }}" data-bs-toggle="modal" class="btn btn-sm btn-outline-danger">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Modal hapus -->
                                <x-modals.modalconfirm id="hapus{{ $item->id }}" action="{{ url('aset/delete/'.$item->id) }}"/>
                                <!-- Modal detail -->
                                <x-modals.modaldetail id="detail{{ $item->id }}" title="Detail Aset">
                                    <ul class="list-vertical">
                                        <x-lists.listvertical title="Kode" subtitle="{{ $item->kode_aset }}" />
                                        <x-lists.listvertical title="Nama Barang" subtitle="{{ $item->nama_aset }}" />
                                        <x-lists.listvertical title="Satuan" subtitle="{{ $item->satuan }}" />
                                        <x-lists.listvertical title="Harga" subtitle="<?php echo number_format($item->harga,0,',','.'); ?>" />
                                        <x-lists.listvertical title="Merk" subtitle="{{ $item->merk }}" />
                                        <x-lists.listvertical title="Satuan" subtitle="{{ $item->satuan }}" />
                                        <x-lists.listvertical title="Total" subtitle="<?php echo number_format($item->total,0,',','.'); ?>" />
                                        <x-lists.listvertical title="Bahan" subtitle="{{ $item->bahan }}" />
                                        <x-lists.listvertical title="Kondisi" subtitle="{{ $item->kondisi }}" />
                                        <x-lists.listvertical title="Diperoleh Tanggal" subtitle="{{ $item->tgl_peroleh }}" />
                                        <x-lists.listvertical title="Lokasi Simpan" subtitle="{{ $item->lokasi_simpan }}" />
                                        <x-lists.listvertical title="Keterangan" subtitle="{{ $item->keterangan }}" />
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
