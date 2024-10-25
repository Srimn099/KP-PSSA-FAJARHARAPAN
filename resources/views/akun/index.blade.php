@extends('layouts.template')
@section('title','Akun')
@section('content')
<div class="section-header">
    <h1><i class="fas fa-users"></i> Akun</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a>Akun</a></div>
    </div>
</div>
<div class="section-body">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <form action="#" id="form_filter" method="get" class="mr-2">
                        @csrf
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-auto mb-3">
                                    <button type="button" data-toggle="tooltip" title="Hapus data terpilih" class="btn btn-danger" id="delete" name="delete">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <a href="{{ route('akun.create') }}" class="btn btn-success" title="Tambah" data-toggle="tooltip"><i class="fas fa-plus"></i></a>

                                    </button>
                                    <button type="button" class="btn btn-info mb-1" data-toggle="modal" data-target="#import">
                                        <i class="fa fa-file-import mr-1"></i>Import
                                    </button>
                                    <a href="{{ route('akun.export') }}" class="btn btn-success mb-1" data-toggle="tooltip" title="Export Excel">
                                        <i class="fa fa-file-excel mr-1"></i>Export
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <div class="row px-3 py-3">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="datatable" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-center" width="20px">
                                                <input type="checkbox" id="check_all">
                                            </th>
                                            <th scope="col">Opsi</th>
                                            <th scope="col">Kode</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Post Saldo</th>
                                            <th scope="col">Post Penyesuaian</th>
                                            <th scope="col">Post Laporan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($akun as $item)
                                        <tr>
                                            <td class="text-center">
                                                <input type="checkbox" class="akun-checkbox" id="delete{{ $item->id }}" name="delete[]" value="{{ $item->id }}">
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ url('/buku-besar?kode_akun=' . $item->kode . '&kriteria=periode&periode=1-bulan-terakhir') }}" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Buku Besar"><i class="fas fa-book"></i></a>
                                                <a href="{{ route('akun.edit', $item) }}" class="btn btn-sm btn-success" data-toggle="tooltip" title="Edit"><i class="fas fa-edit"></i></a>
                                                <a class="btn btn-sm btn-danger hapus-data" data-nama="{{ $item->nama }}" data-action="{{ route("akun.destroy", $item) }}" data-toggle="tooltip" title="Hapus" href="#modal-hapus"><i class="fas fa-trash"></i></a>
                                            </td>
                                            <td class="text-center">{{ $item->kode }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td class="text-center">{{ $item->post_saldo == 1 ? 'Debit' : 'Kredit' }}</td>
                                            <td class="text-center">{{ $item->post_penyesuaian == 1 ? 'Debit' : 'Kredit' }}</td>
                                            <td class="text-center">{{ $item->post_laporan == 1 ? 'Neraca' : 'Laba Rugi' }}</td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="7" align="center">Data tidak tersedia</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@push('js')
<script>
    $(document).ready(function() {
        $('#btn-import').click(function(e) {
            e.preventDefault();
            $("#import").modal('show');
        });

        $(document).on('click', '#delete', function() {
            let id = [];
            if (confirm("Apakah anda yakin ingin menghapus data ini?")) {
                $(".akun-checkbox:checked").each(function() {
                    id.push($(this).val());
                });
                if (id.length > 0) {
                    $.ajax({
                        url: "{{ route('akun.destroys') }}",
                        method: 'delete',
                        data: {
                            _token: "{{ csrf_token() }}",
                            id: id,
                        },
                        success: function(data) {
                            alertSuccess(data.message);
                            location.reload();
                        }
                    });
                } else {
                    alertFail('Harap pilih salah satu akun');
                }
            }
        });

        $("#check_all").click(function() {
            if (this.checked) {
                $(".akun-checkbox").prop('checked', true);
            } else {
                $(".akun-checkbox").prop('checked', false);
            }
        });
    });
</script>
@endpush