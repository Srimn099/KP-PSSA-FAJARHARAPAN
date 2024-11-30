<x-layouts.apps>
    <div class="col-span-12">
        <div class="box">
            <div class="header">
                <h2 class="title">FORM UPDATE DATA ASET</h2>
            </div>
            <div class="body">
                <form action="{{ url('aset/update', $list->id) }}" method="POST" class="form-post-data" enctype="multipart/form-data">
                    @csrf
                    <div class="col-span-12 md:col-span-3">
                        <x-inputs.input readonly label="Kode Barang" name="kode_aset" placeholder="Kode Aset"
                            value="{{ $list->kode_aset }}" />
                    </div>
                    <div class="col-span-12 md:col-span-3">
                        <x-inputs.input label="Nama Barang" value="{{ $list->nama_aset }}" name="nama_aset" placeholder="Masukan nama barang ..." />
                    </div>
                    <div class="col-span-12 md:col-span-3">
                        <x-inputs.input label="Bahan" value="{{ $list->bahan }}" name="bahan" placeholder="Masukan bahan ..." />
                    </div>
                    <div class="col-span-12 md:col-span-3">
                        <x-inputs.input label="Merk" value="{{ $list->merk }}" name="merk" placeholder="Masukan merk ..." />
                    </div>
                    <div class="col-span-12 md:col-span-3">
                        <x-inputs.input label="Satuan" value="{{ $list->satuan }}" name="satuan" placeholder="Masukan Satuan ..." />
                    </div>
                    <div class="col-span-12 md:col-span-3">
                        <x-inputs.input label="Harga / Satuan" value="{{ $list->harga }}" name="harga" placeholder="Masukan Satuan ..." />
                    </div>
                    <div class="col-span-12 md:col-span-3">
                        <x-inputs.input label="Qty" value="{{ $list->qty }}" name="qty" placeholder="Masukan qty ..." />
                    </div>
                    <div class="col-span-12 md:col-span-3">
                        <x-inputs.input label="Total" value="{{ $list->total }}" name="total" placeholder="Masukan total ..." readonly />
                    </div>
                    <div class="col-span-12 md:col-span-3">
                        <x-inputs.input label="Kondisi" value="{{ $list->kondisi }}" name="kondisi" placeholder="Masukan Kondisi ..." />
                    </div>
                    <div class="col-span-12 md:col-span-3">
                        <x-inputs.input label="Lokasi Simpan" value="{{ $list->lokasi_simpan }}" name="lokasi_simpan"
                            placeholder="Masukan lokasi penyimpanan ..." />
                    </div>
                    <div class="col-span-12 md:col-span-3">
                        <x-inputs.input type="date" label="Diperoleh Tanggal" value="{{ $list->tgl_peroleh }}" name="tgl_peroleh"
                            placeholder="Masukan tanggal ..." />
                    </div>
                    <div class="col-span-12 md:col-span-3">
                        <x-inputs.select label="Jenis Aset" name="jenis_aset">
                            <option value="">--- Pilih ---</option>
                            <option value="TETAP" @if ($list->jenis_aset == 'TETAP')
                                selected

                            @endif>TETAP</option>
                            <option value="TIDAK TETAP" @if ($list->jenis_aset == 'TIDAK TETAP')
                                selected

                            @endif>TIDAK TETAP</option>
                        </x-inputs.select>
                    </div>
                    <div class="col-span-12 md:col-span-12">
                        <x-inputs.input label="Keterangan" value="{{ $list->keterangan }}" name="keterangan" placeholder="Masukan Keterangan ..." />
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
