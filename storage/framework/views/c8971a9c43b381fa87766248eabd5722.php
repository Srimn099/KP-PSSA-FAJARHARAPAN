<div class="modal fade" id="#notif" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-notif">
        <div class="modal-content">
            <?php if(session('success')): ?>
            <div class="modal-icons">
                <i class="bi bi-check-circle text-green-500"></i>
            </div>
            <div class="container-modal">
                <h2>SUCCESS</h2>
                <p><?php echo e(session('success')); ?></p>
            </div>
            <?php endif; ?>
            <?php if(session('danger')): ?>
            <div class="modal-icons">
                <i class="bi bi-exclamation-circle text-red-500"></i>
            </div>
            <div class="container-modal">
                <h2>TERJADI KESALAHAN !</h2>
                <p><?php echo e(session('danger')); ?></p>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>


<?php $__env->startPush('js'); ?>
    <script>
        $(document).ready(function() {
            <?php if(session('success') || session('danger')): ?>
                $('#notif').modal('show');
                setTimeout(() => {
                    $('#notif').modal('hide');
                }, 2000);
            <?php endif; ?>
        });
    </script>
<?php $__env->stopPush(); ?>

<?php /**PATH C:\laragon\www\KP-PSSA-FAJARHARAPAN\resources\views/components/modals/modalnotif.blade.php ENDPATH**/ ?>