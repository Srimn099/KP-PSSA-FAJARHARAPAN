<div class="modal fade" id="{{ $id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-notif">
        <div class="modal-content">
            <div class="modal-icons">
                <i class="bi bi-{{ $icon }}"></i>
            </div>
            <div class="container-modal">
                <h2>{{ $title }}</h2>
                <p>{{ $message }}</p>
            </div>
        </div>
    </div>
</div>
