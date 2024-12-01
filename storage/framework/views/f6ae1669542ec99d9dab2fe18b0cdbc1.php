<div class="form-group">
    <label for="<?php echo e($name); ?>"><?php echo e($label ?? ''); ?></label>
    <input
        type="<?php echo e($type ?? 'text'); ?>"
        name="<?php echo e($name); ?>"
        id="<?php echo e($name); ?>"
        class="form-control <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
        placeholder="<?php echo e($placeholder ?? ''); ?>"
        value="<?php if(isset($value)): ?><?php echo e($value); ?><?php else: ?><?php echo e(old($name)); ?><?php endif; ?>"
        <?php if(isset($readonly)): ?> readonly <?php endif; ?>
        autocomplete="off"
    >

    <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="text-red-500 text-sm float-end inline-block"><?php echo e($message); ?></span>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>
<?php /**PATH C:\laragon\www\KP-PSSA-FAJARHARAPAN\resources\views/components/inputs/input.blade.php ENDPATH**/ ?>