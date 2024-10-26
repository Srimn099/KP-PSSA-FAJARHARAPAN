@push('css')
    <link rel="stylesheet" href="{{ asset('node_modules/sweetalert2/dist/sweetalert2.min.css') }}">
@endpush
@push('js')
    <script src="{{ asset('node_modules/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>
    @if (session('success'))
        <script>
            swal.fire({
                icon: 'success',
                title: 'Sukses',
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 3000
            });

        </script>
        @elseif (session('error'))
        <script>
            swal.fire({
                icon: 'error',
                title: 'Error',
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 3000
            });
        </script>
    @endif
@endpush
