
@push('js')

    @if (session('success'))
        <script>
            swal.fire({
                icon: 'success',
                title: 'Sukses',
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 1500
            });

        </script>
        @elseif (session('error'))
        <script>
            swal.fire({
                icon: 'error',
                title: 'Error',
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif
@endpush
