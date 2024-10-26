<x-layouts.apps>
    <div class="col-span-12">
        <div class="sections-header">
            <h2 class="title">DATA ASET</h2>
        </div>
    </div>
    <div class="col-span-12">
        <div class="box">
            <div class="header">
                <span></span>
                <a href="{{ url('aset/create') }}" class="btn btn-sm btn-success">
                    <i class="bi bi-plus"></i> Tambah
                </a>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>No. Hp</th>
                                <th>Jenis Kelamin</th>
                                <th>Jenis Kelamin</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody class="bodyTable">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-layouts.apps>
