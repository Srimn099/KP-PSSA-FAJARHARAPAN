<div class="modal fade" id="<?php echo e($id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-confirm">
        <div class="modal-content">
           <form action="<?php echo e($action); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="modal-icons">
                    <i class="bi bi-question-circle"></i>
                </div>
                <div class="container-modal">
                    <h2>Yakin Ingin Menghapus Data ?</h2>
                    <p>Data yang dihapus tidak dapat dikembalikan</p>
                </div>
                <div class="modal-actions">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">BATAL</button>
                    <button type="submit" class="btn btn-danger">TETAP HAPUS</button>
                </div>
           </form>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\KP-PSSA-FAJARHARAPAN\resources\views/components/modals/modalconfirm.blade.php ENDPATH**/ ?>