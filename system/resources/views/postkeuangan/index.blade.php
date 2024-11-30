<x-layouts.apps>
    <div class="col-span-12">
        <div class="sections-header">
            <h2 class="title">DATA KEUANGAN</h2>
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
                                <th>Nama Pos</th>
                                <th>Jenis</th>
                                <th>Saldo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama_pos }}</td>
                                    <td>{{ $item->jenis_pos }}</td>
                                    <td>@formatRupiah($item->saldo_pos)</td>
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
                                <x-modals.modalconfirm id="hapus{{ $item->id }}" action="{{ url('keuangan/delete/' . $item->id) }}" />
                                <!-- Modal detail -->
                                 <!-- Modal create -->
                                <x-modals.modalpost id="edit{{ $item->id }}" title="Form Update Data Keuangan" action="{{ url('keuangan/update', $item->id) }}">
                                    <x-inputs.input readonly label="Kode Pos Keuangan" name="kode_pos" placeholder="Kode Keuangan"
                                    value="{{ $item->kode_pos }}" />
                                    <x-inputs.input label="Nama Pos Keuangan" name="nama_pos" value="{{ $item->nama_pos }}" placeholder="Nama Pos Keuangan" />
                                    <x-inputs.select label="Jenis Pos Keuangan" name="jenis_pos">
                                        <option value="">--- Pilih ---</option>
                                        <option value="ASET LANCAR" @if($item->jenis_pos == 'ASET LANCAR') selected @endif>ASET LANCAR</option>
                                        <option value="ASET TIDAK LANCAR" @if($item->jenis_pos == 'ASET TIDAK LANCAR') selected @endif>ASET TIDAK LANCAR</option>
                                        <option value="HUTANG DAN ASET BERSIH" @if($item->jenis_pos == 'HUTANG DAN ASET BERSIH') selected @endif>HUTANG DAN ASET BERSIH</option>
                                    </x-inputs.select>
                                    <x-inputs.input label="Nominal" name="saldo_pos" value="{{ $item->saldo_pos }}" placeholder="Nominal Pos Keuangan" />
                                </x-modals.modalpost>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal create -->
    <x-modals.modalpost id="create" title="Form Tambah Data Keuangan" action="{{ url('keuangan/store') }}">
        <x-inputs.input readonly label="Kode Pos Keuangan" name="kode_pos" placeholder="Kode Keuangan"
            value="{{ $kode }}" />
        <x-inputs.input label="Nama Pos Keuangan" name="nama_pos" placeholder="Nama Pos Keuangan" />
        <x-inputs.select label="Jenis Pos Keuangan" name="jenis_pos">
            <option value="">--- Pilih ---</option>
            <option value="ASET LANCAR">ASET LANCAR</option>
            <option value="ASET TIDAK LANCAR">ASET TIDAK LANCAR</option>
            <option value="HUTANG DAN ASET BERSIH">HUTANG DAN ASET BERSIH</option>
        </x-inputs.select>
        <x-inputs.input label="Nominal" name="saldo_pos" placeholder="Nominal Pos Keuangan" />
    </x-modals.modalpost>

    @push('js')
    <script src="{{ asset('assets/js/currencyFormater.js') }}"></script>
        <script>
            $('#saldo_pos').formatRupiah();
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
