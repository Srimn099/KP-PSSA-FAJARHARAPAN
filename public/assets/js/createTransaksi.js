function createTransaksi(url, callback) {
    $.ajax({
        url: `${url}`, // Ganti dengan endpoint API Anda
        method: 'GET',
        success: function(response) {
            var jenis = response.jenis_kategori;
            var jenisSelect = [
                {
                    id: 1,
                    name: 'KAS BESAR'
                },
                {
                    id: 2,
                    name: 'KAS KECIL'
                }
            ];
            if (jenis == 'TABUNGAN') {
                $.ajax({
                    url: 'https://raw.githubusercontent.com/mul14/gudang-data/refs/heads/master/bank/bank.json', // Ganti dengan endpoint API Anda
                    method: 'GET',
                    success: function(res) {
                        var tojson = JSON.parse(res);
                        callback({
                            isiData: tojson,
                            jenisData: response,
                        }); // Panggil callback dengan data
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching bank data:', error.message);
                        callback(null); // Panggil callback dengan null jika terjadi error
                    }
                });
            } else if (jenis == 'KAS') {
                callback({
                    isiData: jenisSelect,
                    jenisData: response,
                }); // Panggil callback dengan data
            } else {
                callback({
                    isiData: null,
                    jenisData: response,
                }); // Panggil callback dengan data
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching data:', error.message);
            callback(null); // Panggil callback dengan null jika terjadi error
        }
    });
}

