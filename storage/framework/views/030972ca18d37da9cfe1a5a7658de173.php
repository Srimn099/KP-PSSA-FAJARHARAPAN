<div class="modal fade" id="<?php echo e($id); ?>" tabindex="-1" aria-labelledby="<?php echo e($id); ?>Label" aria-hidden="true">
    <div class="modal-dialog modal-post-data">
        <div class="modal-content">
            <form action="<?php echo e($action); ?>" method="POST" class="form-post-data" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="modal-header">
                    <h1 class="modal-title" id="<?php echo e($id); ?>Label"><?php echo e($title ?? ''); ?></h1>
                </div>
                <div class="modal-body">
                    <?php echo e($slot); ?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">BATAL</button>
                    <button type="submit" class="btn btn-primary"><?php echo e($btnTitle ?? 'SIMPAN'); ?></button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\KP-PSSA-FAJARHARAPAN\resources\views/components/modals/modalpost.blade.php ENDPATH**/ ?>