<x-layouts.apps>
    <div class="col-span-12">
        <div class="box">
            <div class="header">
                <h2 class="title">FORM TAMBAH DATA ASET</h2>
            </div>
            <div class="body">
                <form action="{{ url('aset/store') }}" class="form-post-data" enctype="multipart/form-data">
                    @csrf
                    <div class="col-span-12 md:col-span-4">
                        <x-inputs.input label="Kode Aset" name="kode_aset" placeholder="Kode Aset" value="{{ old('kode_aset') }}" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.apps>
