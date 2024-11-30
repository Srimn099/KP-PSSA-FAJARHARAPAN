<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LAPORAN TRANSAKSI</title>
    <link rel="stylesheet" href="{{ asset('public/node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/node_modules/bootstrap-icons/font/bootstrap-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('public/assets/css/tailwind.css') }}">
</head>
<body class="body-print">


    <div class="print-header">
        <h2>FAJAR HARAPAN</h2>
        <h4>LAPORAN TRANSAKSI</h4>
        {{-- <P>Periode {{ App\models\Tbkategoritransaksi::tglIndo($dari) }} - {{ App\models\Tbkategoritransaksi::tglIndo($sampai) }}</P> --}}
    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>TANGGAL</th>
                    <th>KETERANGAN</th>
                    <th>DEBET</th>
                    <th>KREDIT</th>
                    <th>SALDO</th>
                </tr>
                {{-- <tr>
                    <td></td>
                    <td><center>SALDO AWAL</center></td>
                    <td colspan="3"></td>
                    <td><center>@formatRupiah($map_list->saldo_awal)</center></td>
                </tr> --}}
                @foreach ($map_list as $item)

                    <tr>
                        <td><center>{{ $loop->iteration }}</center></td>
                        <td><center>{{ App\models\Tbkategoritransaksi::tglIndo($item['tanggal']) }}</center></td>
                        <td><center>{{ $item['keterangan'] }}</center></td>
                        <td>
                            <center>
                            @if ($item['debet'] != "-")
                                @formatRupiah($item['debet'])
                                @else
                                -
                            @endif
                        </center>
                        </td>
                        <td>
                            <center>
                            @if ($item['kredit'] != "-")
                                @formatRupiah($item['kredit'])
                                @else
                                -
                            @endif
                        </center>
                        </td>
                        <td><center>@formatRupiah($item['saldo_akhir'])</center></td>
                    </tr>
                @endforeach
            </thead>
        </table>
    </div>
</body>
</html>
