<x-layouts.apps>
    <div class="col-span-12">
        <div class="box">
            <div class="header">
                <h2 class="title">FORM TAMBAH DATA ASET</h2>
            </div>
            <div class="body">
                <form action="{{ url('aset/store') }}" method="POST" class="form-post-data" enctype="multipart/form-data">
                    @csrf
                    <div class="col-span-12 md:col-span-4">
                        <x-inputs.input readonly label="Kode Barang" name="kode_aset" placeholder="Kode Aset"
                            value="{{ $kode }}" />
                    </div>
                    <div class="col-span-12 md:col-span-4">
                        <x-inputs.input label="Nama Barang" name="nama_aset" placeholder="Masukan nama barang ..." />
                    </div>
                    <div class="col-span-12 md:col-span-4">
                        <x-inputs.input label="Bahan" name="bahan" placeholder="Masukan bahan ..." />
                    </div>
                    <div class="col-span-12 md:col-span-4">
                        <x-inputs.input  label="Merk" name="merk" placeholder="Masukan merk ..." />
                    </div>
                    <div class="col-span-12 md:col-span-4">
                        <x-inputs.input label="Satuan" name="satuan" placeholder="Masukan Satuan ..." />
                    </div>
                    <div class="col-span-12 md:col-span-4">
                        <x-inputs.input label="Harga / Satuan" name="harga" placeholder="Masukan Satuan ..." />
                    </div>
                    <div class="col-span-12 md:col-span-4">
                        <x-inputs.input label="Kondisi" name="kondisi" placeholder="Masukan Kondisi ..." />
                    </div>
                    <div class="col-span-12 md:col-span-4">
                        <x-inputs.input label="Lokasi SImpan" name="lokasi_simpan"
                            placeholder="Masukan lokasi penyimpanan ..." />
                    </div>
                    <div class="col-span-12 md:col-span-4">
                        <x-inputs.input type="date" label="Diperoleh Tanggal" name="tgl_peroleh"
                            placeholder="Masukan tanggal ..." />
                    </div>
                    <div class="col-span-12 md:col-span-12">
                        <x-inputs.input label="Keterangan" name="keterangan" placeholder="Masukan Keterangan ..." />
                    </div>
                    <div class="col-span-12 md:col-span-12">
                        <div class="flex items-center justify-end space-x-2">
                            <a href="{{ url('aset') }}" class="btn btn-secondary">KEMBALI</a>
                            <button class="btn btn-primary">SIMPAN DATA</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.apps>
