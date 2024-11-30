<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LAPORAN RAPB</title>
    <link rel="stylesheet" href="{{ asset('public/node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/node_modules/bootstrap-icons/font/bootstrap-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('public/assets/css/tailwind.css') }}">
</head>
<body class="body-print">

    @foreach ($list as $dd)@endforeach
    <div class="print-header">
        <h2>FAJAR HARAPAN</h2>
        <h4>REALISASI ANGGARAN PENDAPATAN DAN BIAYA</h4>
        <P>Periode {{ App\models\Tbkategoritransaksi::tglIndo($dd['dari']) }} - {{ App\models\Tbkategoritransaksi::tglIndo($dd['sampai']) }}</P>
    </div>
    <div>
        <table class="table">
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
</body>
</html>
