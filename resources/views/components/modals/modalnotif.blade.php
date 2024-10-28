<div class="modal fade" id="#notif" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-notif">
        <div class="modal-content">
            @if (session('success'))
            <div class="modal-icons">
                <i class="bi bi-check-circle text-green-500"></i>
            </div>
            <div class="container-modal">
                <h2>SUCCESS</h2>
                <p>{{ session('success') }}</p>
            </div>
            @endif
            @if (session('danger'))
            <div class="modal-icons">
                <i class="bi bi-exclamation-circle text-red-500"></i>
            </div>
            <div class="container-modal">
                <h2>TERJADI KESALAHAN !</h2>
                <p>{{ session('danger') }}</p>
            </div>
            @endif
        </div>
    </div>
</div>


@push('js')
    <script>
        $(document).ready(function() {
            @if (session('success') || session('danger'))
                $('#notif').modal('show');
                setTimeout(() => {
                    $('#notif').modal('hide');
                }, 2000);
            @endif
        });
    </script>
@endpush

