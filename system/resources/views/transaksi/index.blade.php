<x-layouts.apps>
    <div class="col-span-12">
        <div class="sections-header">
            <h2 class="title">DATA TRANSAKSI</h2>
        </div>
    </div>
    <div class="col-span-12">
        <div class="box">
            <div class="header">
                <span></span>
                <div class="btn-group">
                    <a href="#modallaporan" data-bs-toggle="modal" class="btn btn-danger">
                        <i class="bi bi-file-pdf"></i> Cetak Laporan
                    </a>
                    <a href="{{ url('transaksi/create') }}" class="btn btn-success">
                        <i class="bi bi-plus"></i> Tambah
                    </a>
                </div>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Kategori Akun</th>
                                <th>Jenis Akun</th>
                                <th>Keterangan</th>
                                <th>Jenis</th>
                                <th>Nominal</th>
                                <th>Saldo Awal</th>
                                <th>Saldo Akhir</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $item)
                            @php
                                $total = $item->history->sum('saldo');
                            @endphp
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ App\models\Tbkategoritransaksi::tglIndo($item->tgl_trx) }}</td>
                                    <td>{{ $item->kategori->jenis_kategori }}</td>
                                    <td>
                                        @if ($item->jenis_akun != null)
                                            {{ $item->jenis_akun }}
                                            @else
                                            -
                                        @endif
                                    </td>
                                    <td>{{ $item->keterangan_trx }}</td>
                                    <td>{{ $item->jenis_trx }}</td>
                                    <td>@formatRupiah($item->nominal_trx)</td>
                                    <td>@formatRupiah($item->kategori->saldo_awal)</td>
                                    <td>@formatRupiah($item->history->saldo)</td>
                                    <td>
                                        <div class="btn-group btn-sm">
                                            <a href="{{ url('transaksi/edit/' . $item->id) }}"
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
                                <x-modals.modalconfirm id="hapus{{ $item->id }}"
                                    action="{{ url('transaksi/delete/' . $item->id) }}" />
                                <!-- Modal Update -->
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="8">TOTAL SALDO</td>
                                <td colspan="2">@formatRupiah($total)</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Cetak Laporan -->
    <x-modals.modalpost id="modallaporan" title="CETAK LAPORAN TRANSAKSI" action="{{ url('laporan/laptransaksi') }}"
        btnTitle="CETAK LAPORAN">

        <x-inputs.input label="Dari Tanggal" type="date" name="tgl_mulai" placeholder="Dari tanggal" />
        <x-inputs.input label="Sampai Tanggal" type="date" name="tgl_akhir" placeholder="Sampai tanggal" />
    </x-modals.modalpost>

    @push('js')

        @if ($errors->any())
            <script>
                $(document).ready(function() {
                    var modal = new bootstrap.Modal(document.getElementById('create'));
                    modal.show();
                });
            </script>
        @endif
    @endpush
</x-layouts.apps>
