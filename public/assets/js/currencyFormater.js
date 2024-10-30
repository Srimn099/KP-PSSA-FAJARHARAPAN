(function($) {
    $.fn.formatRupiah = function() {
        this.each(function() {
            const $input = $(this);

            $input.on('keyup', function() {
                // Mengubah nilai input menjadi format rupiah
                $input.val(formatRupiah($input.val(), 'Rp. '));
            });
        });

        return this; // Return this for chainability
    };

    /* Fungsi formatRupiah */
    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        // Tambahkan titik jika input sudah menjadi angka ribuan
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] !== undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix === undefined ? rupiah : (rupiah ? prefix + rupiah : '');
    }
}(jQuery));
