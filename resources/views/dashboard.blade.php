<x-layouts.apps>
    <div class="col-span-12">
        <div class="sections-header">
            <h2 class="title">DASHBOARD</h2>
        </div>
    </div>
    <div class="col-span-12">
        <div class="box">
            <div class="header">
                <h2 class="title">DATA TABLE</h2>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Launch demo modal
                  </button>
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
    {{-- <x-modals.modalconfirm id="exampleModal" action=""/> --}}
    <x-modals.modalnotif id="exampleModal" icon="check-circle" title="SUCCESS" message="Data berhasil dihapus"/>
</x-layouts.apps>
