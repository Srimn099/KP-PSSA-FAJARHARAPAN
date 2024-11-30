<x-layouts.apps>
    <div class="col-span-12">
        <div class="sections-header">
            <h2 class="title">DATA LAPORAN TRANSAKSI</h2>
        </div>
    </div>
    <div class="col-span-12">
        <div class="box">
            <div class="header">
                <span></span>
                <div class="btn-group">

                    <a href="#filtermodal" data-bs-toggle="modal" class="btn btn-success">
                        <i class="bi bi-filter-left"></i> Filter
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

    <x-modals.modalpost id="filtermodal" title="CETAK DATA TRANSAKSI" action="{{ url('laporan/transaksiCetak') }}">

        <x-inputs.input type="date" label="Dari Tanggal" name="dari" placeholder="Masukan tanggal ..." />
        <x-inputs.input type="date" label="Sampai Tanggal" name="sampai" placeholder="Masukan tanggal ..." />
        <x-inputs.select label="Jenis Akun" name="jenis_kategori">
            <option value="">--- Pilih ---</option>
            @foreach ($kategori as $kategoris)
                <option value="{{ $kategoris->id }}">{{ $kategoris->jenis_kategori }}</option>
            @endforeach
        </x-inputs.select>
        <x-inputs.select label="Jenis Akun" name="newselect">

        </x-inputs.select>
    </x-modals.modalpost>
    @push('js')
    <script src="{{ asset('public/assets/js/currencyFormater.js') }}"></script>
    <script src="{{ asset('public/assets/js/createTransaksi.js') }}"></script>
    <script>

        $('#box-select').hide();
        var setId = 0;
        $('#jenis_kategori').on('change', function() {
            var id = $(this).val()
            $('#newselect').empty();
            $('#box-select').hide();

            createTransaksi(`{{ url('transaksi/getDataKategori/${id}') }}`, function(isi) {
                var selectoption = '';
                var isiData = isi.isiData;
                var jenisData = isi.jenisData;
                $('#kode_kategori').val(isi.jenisData.kode_kategori);
                if (isiData != null) {

                    for (const data of isi.isiData) {

                        selectoption += `
                        <option value="${data.name}">${data.name}</option>
                    `
                    }
                    $('#box-select').show();
                    $('#newselect').html(selectoption);
                }
            });
        });
    </script>
@endpush
</x-layouts.apps>
