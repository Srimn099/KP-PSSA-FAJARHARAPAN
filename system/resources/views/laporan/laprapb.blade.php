<x-layouts.apps>
    <div class="col-span-12">
        <div class="sections-header">
            <h2 class="title">DATA LAPORAN RAPB</h2>
            <a href="#filtermodal" data-bs-toggle="modal" class="btn btn-success">
                <i class="bi bi-file-pdf"></i> Cetak Rapb
            </a>
        </div>
    </div>
    <div class="col-span-12">
        <div class="box">

            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>KODE</th>
                                <th>DESKRIPSI</th>
                                <th>ANGGARAN</th>
                                <th>REALISASI</th>
                                <th>SELISIH</th>
                                <th>%</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item['kode'] }}</td>
                                    <td>{{ $item['deskripsi'] }}</td>
                                    <td>@formatRupiah($item['anggaran'])</td>
                                    <td>@formatRupiah($item['realisasi'])</td>
                                    <td>@formatRupiah($item['selisih'])</td>
                                    <td>{{ $item['persentase'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <x-modals.modalpost id="filtermodal" title="CETAK DATA RAPB" action="{{ url('laporan/cetakLaprapb') }}">
        <x-inputs.input type="date" label="Dari Tanggal" name="dari" placeholder="Masukan tanggal ..." />
        <x-inputs.input type="date" label="Sampai Tanggal" name="sampai" placeholder="Masukan tanggal ..." />
    </x-modals.modalpost>
</x-layouts.apps>
