
<?php $__env->startPush('js'); ?>

    <?php if(session('success')): ?>
        <script>
            swal.fire({
                icon: 'success',
                title: 'Sukses',
                text: "<?php echo e(session('success')); ?>",
                showConfirmButton: false,
                timer: 1500
            });

        </script>
        <?php elseif(session('error')): ?>
        <script>
            swal.fire({
                icon: 'error',
                title: 'Error',
                text: "<?php echo e(session('error')); ?>",
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    <?php endif; ?>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\laragon\www\KP-PSSA-FAJARHARAPAN\resources\views/components/notifs/notif.blade.php ENDPATH**/ ?>