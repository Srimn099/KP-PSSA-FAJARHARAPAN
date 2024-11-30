<x-layouts.apps>
    <div class="col-span-12 md:col-span-12">
        <div class="sections-header">
            <h2 class="title">DASHBOARD</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <x-cards.infocard title="Total Aset" counter="{{ $totalaset }}" icon="layers" colors="primary" />
        </div>
        <div class="col-md-3">
            <x-cards.infocard title="Total Siswa" counter="{{ $totalsiswa }}" icon="person-standing-dress"
                colors="success" />
        </div>
        <div class="col-md-3">
            <x-cards.infocard title="Total Pengelola" counter="{{ $totalpengelola }}" icon="person-arms-up"
                colors="warning" />
        </div>
        <div class="col-md-3">
            <x-cards.infocard title="Total Transaksi" counter="{{ $totaltransaksi }}" icon="file-earmark-spreadsheet"
                colors="purple" />
        </div>
        <div class="col-md-12">
            <div class="box">
                <div class="header">
                    <span>STATISTIK DATA TRANSAKSI</span>
                </div>
                <div class="body">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script src="{{ asset('public/assets/js/chart.js') }}"></script>
        <script>
            const transaksiData = <?php echo json_encode($chartTransaksi); ?>;

            // Mengambil label (Bulantransaksi) dan data (nominal_transaksi) dari transaksiData
            const labels = transaksiData.map(item => item.bulan);
            const data = transaksiData.map(item => item.nominal);

            const ctx = document.getElementById('myChart');

            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels, // Bulan sebagai label
                    datasets: [{
                        label: 'Nominal Transaksi',
                        data: data, // Nominal transaksi sebagai data
                        borderWidth: 1,
                        backgroundColor: 'rgba(54, 162, 235, 0.2)', // Warna latar belakang grafik
                        borderColor: 'rgba(54, 162, 235, 1)', // Warna batas grafik
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true, // Mulai sumbu Y dari 0
                            ticks: {
                                stepSize: 50000, // Menentukan jarak langkah pada sumbu Y (misalnya setiap 50.000)
                            }
                        }
                    }
                }
            });
        </script>
    @endpush
</x-layouts.apps>
