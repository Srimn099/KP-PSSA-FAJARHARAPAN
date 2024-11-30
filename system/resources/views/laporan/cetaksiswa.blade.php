<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LAPORAN DATA SISWA</title>
    <link rel="stylesheet" href="{{ asset('public/node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/node_modules/bootstrap-icons/font/bootstrap-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('public/assets/css/tailwind.css') }}">
</head>
<body class="body-print">

    @foreach ($list as $dd)@endforeach
    <div class="print-header">
        <h2>FAJAR HARAPAN</h2>
        <h4>LAPORAN DATA SISWA</h4>
    </div>
    <div>
        <table class="table table-bordered table-striped dataTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Tempat Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Pendidikan Terakhir</th>
                    <th>Nama Ayah</th>
                    <th>Nama Ibu</th>
                    <th>Pekerjaan Orang Tua</th>
                    <th>Alamat</th>
                    <th>Tgl Masuk</th>
                    <th>Tgl Keluar</th>
                    <th>Status</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($list as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img src="{{ asset('public/'.$item->foto) }}" alt="Foto" class="w-full h-auto rounded-lg"></td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->tmp_lahir }}</td>
                        <td>{{ $item->jk }}</td>
                        <td>{{ $item->pendidikan_terakhir }}</td>
                        <td>{{ $item->nama_ayah }}</td>
                        <td>{{ $item->nama_ibu }}</td>
                        <td>{{ $item->pk_ortu }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>@tglLengkap($item->tgl_masuk)</td>
                        <td>
                            @if ($item->tgl_keluar != null)
                                @tglLengkap($item->tgl_keluar)
                            @else
                                -
                            @endif
                        </td>
                        <td>{{ $item->status }}</td>
                        <td>{{ $item->keterangan }}</td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
