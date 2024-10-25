<script type="text/javascript">
    var oTable;
    $(document).ready(function() {
        oTable = $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                "url": "{{ asset('akun') }}", // Menggunakan url() untuk rute aplikasi
                "type": "get",
                "data": function(data) {
                    // Tambahkan data tambahan di sini jika diperlukan
                },
            },
            columns: [{
                    data: 'DT_RowIndex',
                    sClass: 'text-center',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'kode',
                    sClass: 'text-center'
                },
                {
                    data: 'nama',
                    sClass: 'text-center'
                },
                {
                    data: 'post_saldo',
                    sClass: 'text-center'
                },
                {
                    data: 'post_penyesuaian',
                    sClass: 'text-center'
                },
                {
                    data: 'post_laporan',
                    sClass: 'text-right'
                },
                {
                    data: 'act',
                    sClass: 'text-center',
                    // orderable: false,
                    // searchable: false
                }
            ],
            order: [] // Tidak ada urutan default
        });
    });

    // Create Data
    $('#data_form').on('submit', function(e) {
        e.preventDefault();
        var idata = new FormData($('#data_form')[0]);
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "{{ asset('akun/store') }}", // Menggunakan url() untuk rute aplikasi
            data: idata,
            processData: false,
            contentType: false,
            cache: false,
            beforeSend: function() {
                in_load(); // Fungsi untuk loading
            },
            success: function(data) {
                toastr.success('' + data.status + '', '' + data.messages + '', 'success');
                window.location.href = "{{ asset('akun') }}"; // Menggunakan url() untuk rute aplikasi
                out_load(); // Fungsi untuk menghentikan loading
            },
            error: function(error) {
                error_detail(error); // Fungsi untuk menampilkan detail error
                out_load(); // Fungsi untuk menghentikan loading
            }
        });
    });

    // Edit Data
    function edit_data(id) {
        var token = $("input[name=_token]").val();
        $('#swal-update-button').attr('data-id', id);
        $.ajax({
            type: "GET",
            dataType: "json",
            url: "{{ asset('akun/edit') }}/" + id, // Menggunakan url() untuk rute aplikasi
            data: {
                id: id,
                _token: token
            },
            beforeSend: function() {
                in_load(); // Fungsi untuk loading
            },
            success: function(data) {
                $('#kode_edit').val(data.data.kode);
                $('#nama_edit').val(data.data.nama);
                $('#post_saldo_edit').val(data.data.post_saldo);
                $('#post_penyesuaian_edit').val(data.data.post_penyesuaian);
            },
            error: function(error) {
                error_detail(error); // Fungsi untuk menampilkan detail error
                out_load(); // Fungsi untuk menghentikan loading
            }
        });

        // Update Data
        $('#swal-update-button').click(function(e) {
            e.preventDefault();
            var id = $('#swal-update-button').attr('data-id');
            var token = $("input[name=_token]").val();
            $.ajax({
                type: "PUT",
                dataType: "json",
                url: "{{ asset('akun/update') }}/" + id, // Menggunakan url() untuk rute aplikasi
                data: {
                    _token: token,
                    kode: $('#kode_edit').val(),
                    nama: $('#nama_edit').val(),
                    kredit: $('#post_saldo_edit').val(),
                    saldo: $('#post_penyesuaian_edit').val(),
                },
                cache: false,
                beforeSend: function() {
                    in_load(); // Fungsi untuk loading
                },
                success: function(data) {
                    toastr.success('' + data.status + '', '' + data.messages + '', 'success');
                    window.location.href = "{{ asset('akun') }}"; // Menggunakan url() untuk rute aplikasi
                    out_load(); // Fungsi untuk menghentikan loading
                },
                error: function(error) {
                    error_detail(error); // Fungsi untuk menampilkan detail error
                    out_load(); // Fungsi untuk menghentikan loading
                }
            });
        });
    }
</script>