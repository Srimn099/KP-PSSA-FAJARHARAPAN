<x-layouts.apps>
    <div class="col-span-12">
        <div class="sections-header">
            <h2 class="title">DATA AKUN</h2>
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
                                <th>Jenis Akun</th>
                                <th>Saldo</th>
                                <th>Tgl Awal Akun</th>
                                <th>Tgl Akhir Akun</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->jenis_kategori }}</td>
                                    <td>@formatRupiah($item->saldo_awal)</td>
                                    <td>{{ App\models\Tbkategoritransaksi::tglIndo($item->tgl_awal) }}</td>
                                    <td>{{ App\models\Tbkategoritransaksi::tglIndo($item->tgl_akhir) }}</td>
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
                                <x-modals.modalconfirm id="hapus{{ $item->id }}"
                                    action="{{ url('kategori/delete/' . $item->id) }}" />
                                <!-- Modal update -->
                                <x-modals.modalpost id="edit{{ $item->id }}" title="Form Tambah Data Akun" action="{{ url('kategori/update', $item->id) }}">

                                    <x-inputs.input label="Kode Akun" name="kode_kategori" value="{{ $item->kode_kategori }}"
                                        placeholder="Masukan kode ..." readonly />

                                    <x-inputs.input label="Jenis Kategori" name="jenis_kategori" value="{{ $item->jenis_kategori }}" placeholder="Masukan jenis kategori ..." />
                                    <x-inputs.input label="Saldo" name="saldo_awals" placeholder="Masukan saldo awal ..." value="{{ $item->saldo_awal }}" />
                                    <x-inputs.input type="date" label="Tanggal awal saldo" name="tgl_awal" value="{{ $item->tgl_awal }}"
                                        placeholder="Masukan tanggal awal saldo ..." />
                                    <x-inputs.input type="date" label="Tanggal akhir saldo" name="tgl_akhir" value="{{ $item->tgl_akhir }}"
                                        placeholder="Masukan tanggal akhir saldo ..." />
                                </x-modals.modalpost>


                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal create -->
    <x-modals.modalpost id="create" title="Form Tambah Data Akun" action="{{ url('kategori/store') }}">

        <x-inputs.input label="Kode Akun" name="kode_kategori" value="{{ $kode }}"
            placeholder="Masukan kode ..." readonly />

        <x-inputs.input label="Jenis Kategori" name="jenis_kategori" placeholder="Masukan jenis kategori ..." />
        <x-inputs.input label="Saldo" name="saldo_awal" placeholder="Masukan saldo awal ..." />
        <x-inputs.input type="date" label="Tanggal awal saldo" name="tgl_awal"
            placeholder="Masukan tanggal awal saldo ..." />
        <x-inputs.input type="date" label="Tanggal akhir saldo" name="tgl_akhir"
            placeholder="Masukan tanggal akhir saldo ..." />
    </x-modals.modalpost>

    @push('js')
        <script src="{{ asset('public/assets/js/currencyFormater.js') }}"></script>
        <script>
            $('#saldo_awal').formatRupiah();
            $('#saldo_awals').formatRupiah();
        </script>
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
