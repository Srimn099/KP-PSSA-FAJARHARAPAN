<x-layouts.apps>
    <div class="col-span-12">
        <div class="sections-header">
            <h2 class="title">FORM TAMBAH TRANSAKSI</h2>
        </div>
    </div>
    <div class="col-span-12">
        <div class="box">

            <div class="body">
                <form action="{{ url('transaksi/store') }}" method="post">
                    @csrf
                    <div class="row">
                        <input type="hidden" name="kode_kategori" id="kode_kategori">

                        <div class="col-md-4">
                            <x-inputs.input readonly label="Kode Transaksi" name="kode_trx" placeholder="Kode Transaksi"
                                value="{{ $kode }}" />
                        </div>
                        <div class="col-md-4">
                            <x-inputs.select label="Akun Transaksi" name="kode_kategoris">
                                <option value="">--- Pilih ---</option>
                                @foreach ($kategori as $katgories)
                                    <option value="{{ $katgories->id }}">{{ $katgories->jenis_kategori }}</option>
                                @endforeach
                            </x-inputs.select>
                        </div>
                        <div class="col-md-4" id="box-select">
                            <x-inputs.select label="Jenis Akun" name="newselect">

                            </x-inputs.select>
                        </div>
                        <div class="col-md-4">
                            <x-inputs.input label="Keterangan" name="keterangan_trx"
                                placeholder="Keterangan Transaksi" />
                        </div>
                        <div class="col-md-4">
                            <x-inputs.select label="Jenis Transaksi" name="jenis_trx">
                                <option value="">--- Pilih ---</option>
                                <option value="DEBET">DEBET</option>
                                <option value="KREDIT">KREDIT</option>
                            </x-inputs.select>
                        </div>
                        <div class="col-md-4">
                            <x-inputs.input label="Nominal" name="nominal_trx" placeholder="Nominal Transaksi" />
                        </div>
                        <div class="col-md-4">
                            <x-inputs.input label="Tanggal Transaksi" name="tgl_trx" type="date"
                                placeholder="Tanggal Transaksi" />

                        </div>
                        <div class="col-md-12">
                            <div class="float-end">
                                <button class="btn btn-primary">SIMPAN</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('js')
        <script src="{{ asset('public/assets/js/currencyFormater.js') }}"></script>
        <script src="{{ asset('public/assets/js/createTransaksi.js') }}"></script>
        <script>
            $('#nominal_trx').formatRupiah();
            $('#box-select').hide();
            var setId = 0;
            $('#kode_kategoris').on('change', function() {
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
