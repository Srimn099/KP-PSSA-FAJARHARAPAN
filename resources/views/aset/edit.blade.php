<x-layouts.apps>
    <div class="col-span-12">
        <div class="box">
            <div class="header">
                <h2 class="title">FORM UPDATE DATA ASET</h2>
            </div>
            <div class="body">
                <form action="{{ url('aset/update', $list->id) }}" method="POST" class="form-post-data" enctype="multipart/form-data">
                    @csrf
                    <div class="col-span-12 md:col-span-4">
                        <x-inputs.input readonly label="Kode Barang" name="kode_aset" placeholder="Kode Aset"
                            value="{{ $list->kode_aset }}" />
                    </div>
                    <div class="col-span-12 md:col-span-4">
                        <x-inputs.input label="Nama Barang" name="nama_aset" value="{{ $list->nama_aset }}" placeholder="Masukan nama barang ..." />
                    </div>
                    <div class="col-span-12 md:col-span-4">
                        <x-inputs.input label="Bahan" name="bahan" value="{{ $list->bahan }}" placeholder="Masukan bahan ..." />
                    </div>
                    <div class="col-span-12 md:col-span-4">
                        <x-inputs.input  label="Merk" name="merk" value="{{ $list->merk }}" placeholder="Masukan merk ..." />
                    </div>
                    <div class="col-span-12 md:col-span-4">
                        <x-inputs.input label="Satuan" name="satuan" value="{{ $list->satuan }}" placeholder="Masukan Satuan ..." />
                    </div>
                    <div class="col-span-12 md:col-span-4">
                        <x-inputs.input label="Harga / Satuan" name="harga" value="{{ $list->harga }}" placeholder="Masukan Satuan ..." />
                    </div>
                    <div class="col-span-12 md:col-span-4">
                        <x-inputs.input label="Kondisi" name="kondisi" value="{{ $list->kondisi }}" placeholder="Masukan Kondisi ..." />
                    </div>
                    <div class="col-span-12 md:col-span-4">
                        <x-inputs.input label="Lokasi Simpan" name="lokasi_simpan" value="{{ $list->lokasi_simpan }}"
                            placeholder="Masukan lokasi penyimpanan ..." />
                    </div>
                    <div class="col-span-12 md:col-span-4">
                        <x-inputs.input type="date" label="Diperoleh Tanggal" name="tgl_peroleh" value="{{ $list->tgl_peroleh }}"
                            placeholder="Masukan tanggal ..." />
                    </div>
                    <div class="col-span-12 md:col-span-12">
                        <x-inputs.input label="Keterangan" name="keterangan" value="{{ $list->keterangan }}" placeholder="Masukan Keterangan ..." />
                    </div>
                    <div class="col-span-12 md:col-span-12">
                        <div class="flex items-center justify-end space-x-2">
                            <a href="{{ url('aset') }}" class="btn btn-secondary">KEMBALI</a>
                            <button class="btn btn-primary">UPDATE DATA</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.apps>
