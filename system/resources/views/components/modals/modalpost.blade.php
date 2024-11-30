<div class="modal fade" id="{{ $id }}" tabindex="-1" aria-labelledby="{{ $id }}Label" aria-hidden="true">
    <div class="modal-dialog modal-post-data">
        <div class="modal-content">
            <form action="{{ $action }}" method="POST" class="form-post-data" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h1 class="modal-title" id="{{ $id }}Label">{{ $title ?? '' }}</h1>
                </div>
                <div class="modal-body">
                    {{ $slot }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">BATAL</button>
                    <button type="submit" class="btn btn-primary">{{ $btnTitle ?? 'SIMPAN' }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
