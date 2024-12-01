<div class="modal fade" id="<?php echo e($id); ?>" tabindex="-1" aria-labelledby="<?php echo e($id); ?>Label" aria-hidden="true">
    <div class="modal-dialog modal-detail">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="<?php echo e($id); ?>Label"><?php echo e($title ?? ''); ?></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php echo e($slot); ?>

            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\KP-PSSA-FAJARHARAPAN\resources\views/components/modals/modaldetail.blade.php ENDPATH**/ ?>