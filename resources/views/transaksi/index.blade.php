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
                                <th>Tanggal</th>
                                <th>Keterangan</th>
                                <th>Jenis</th>
                                <th>Nominal</th>
                                <th>Saldo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>@tglLengkap($item->tgl_trx)</td>
                                    <td>{{ $item->keterangan_trx }}</td>
                                    <td>{{ $item->jenis_trx }}</td>
                                    <td>@formatRupiah($item->nominal_trx)</td>
                                    <td>@formatRupiah($item->saldo_trx)</td>
                                    <td>
                                        <div class="btn-group btn-sm">
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
                                <x-modals.modalconfirm id="hapus{{ $item->id }}" action="{{ url('transaksi/delete/' . $item->id) }}" />
                                <!-- Modal detail -->
                                 <!-- Modal create -->
                                <x-modals.modalpost id="edit{{ $item->id }}" title="Form Update Data Transaksi" action="{{ url('transaksi/update', $item->id) }}">
                                    <x-inputs.input readonly label="Kode Transaksi" name="kode_trx" placeholder="Kode Transaksi"
                                    value="{{ $item->kode_trx }}" />
                                    <x-inputs.input label="Keterangan" name="keterangan_trx" value="{{ $item->keterangan_trx }}" placeholder="Keterangan Transaksi" />
                                    <x-inputs.select label="Jenis Transaksi" name="jenis_trx">
                                        <option value="">--- Pilih ---</option>
                                        <option value="DEBET" @if($item->jenis_trx == 'DEBET') selected @endif>DEBET</option>
                                        <option value="KREDIT" @if($item->jenis_trx == 'KREDIT') selected @endif>KREDIT</option>
                                    </x-inputs.select>
                                    <x-inputs.input label="Nominal" name="nominal_trx" value="{{ $item->nominal_trx }}" placeholder="Nominal Transaksi" />
                                    <x-inputs.input label="Saldo" name="saldo_trx" value="{{ $item->saldo_trx }}" placeholder="Saldo Transaksi" />
                                        <x-inputs.input label="Tanggal Transaksi" name="tgl_trx" value="{{ $item->tgl_trx }}" type="date" placeholder="Tanggal Transaksi" />
                                </x-modals.modalpost>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal create -->
    <x-modals.modalpost id="create" title="Form Tambah Data Transaksi" action="{{ url('transaksi/store') }}">
        <x-inputs.input readonly label="Kode Transaksi" name="kode_trx" placeholder="Kode Transaksi"
        value="{{ $kode }}" />
        <x-inputs.input label="Keterangan" name="keterangan_trx" placeholder="Keterangan Transaksi" />
        <x-inputs.select label="Jenis Transaksi" name="jenis_trx">
            <option value="">--- Pilih ---</option>
            <option value="DEBET">DEBET</option>
            <option value="KREDIT">KREDIT</option>
        </x-inputs.select>
        <x-inputs.input label="Nominal" name="nominal_trx"  placeholder="Nominal Transaksi" />
        <x-inputs.input label="Saldo Awal" name="saldo_trx" placeholder="Saldo Transaksi" />
        <x-inputs.input label="Tanggal Transaksi" name="tgl_trx" type="date" placeholder="Tanggal Transaksi" />
    </x-modals.modalpost>

    @push('js')
    <script src="{{ asset('assets/js/currencyFormater.js') }}"></script>
        <script>
            $('#nominal_trx').formatRupiah();
            $('#saldo_trx').formatRupiah();

            var jenistrx = $('#jenis_trx').val();


        </script>
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
