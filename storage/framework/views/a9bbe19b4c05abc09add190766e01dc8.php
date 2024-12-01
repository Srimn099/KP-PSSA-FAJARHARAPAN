<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <!-- Styles / Scripts -->
        <link rel="stylesheet" href="<?php echo e(asset('node_modules/bootstrap/dist/css/bootstrap.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('node_modules/bootstrap-icons/font/bootstrap-icons.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('node_modules/sweetalert2/dist/sweetalert2.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/tailwind.css')); ?>">

    </head>
    <body>
        <?php if (isset($component)) { $__componentOriginald6f8cf63b64f63eae3911d9cb8eb58d8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald6f8cf63b64f63eae3911d9cb8eb58d8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.navbars','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.navbars'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald6f8cf63b64f63eae3911d9cb8eb58d8)): ?>
<?php $attributes = $__attributesOriginald6f8cf63b64f63eae3911d9cb8eb58d8; ?>
<?php unset($__attributesOriginald6f8cf63b64f63eae3911d9cb8eb58d8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald6f8cf63b64f63eae3911d9cb8eb58d8)): ?>
<?php $component = $__componentOriginald6f8cf63b64f63eae3911d9cb8eb58d8; ?>
<?php unset($__componentOriginald6f8cf63b64f63eae3911d9cb8eb58d8); ?>
<?php endif; ?>
        <section class="section-contents">
            <?php echo e($slot); ?>

        </section>
        <?php if (isset($component)) { $__componentOriginal1d291dd2e780445c2accc9f8c9cfcf08 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1d291dd2e780445c2accc9f8c9cfcf08 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.notifs.notif','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('notifs.notif'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1d291dd2e780445c2accc9f8c9cfcf08)): ?>
<?php $attributes = $__attributesOriginal1d291dd2e780445c2accc9f8c9cfcf08; ?>
<?php unset($__attributesOriginal1d291dd2e780445c2accc9f8c9cfcf08); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1d291dd2e780445c2accc9f8c9cfcf08)): ?>
<?php $component = $__componentOriginal1d291dd2e780445c2accc9f8c9cfcf08; ?>
<?php unset($__componentOriginal1d291dd2e780445c2accc9f8c9cfcf08); ?>
<?php endif; ?>
    </body>

    <script src="<?php echo e(asset('assets/js/jquery-3.7.1.js')); ?>"></script>
    <script src="<?php echo e(asset('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('node_modules/datatables.net/js/dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('node_modules/datatables.net-dt/js/dataTables.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('node_modules/sweetalert2/dist/sweetalert2.all.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/app.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('js'); ?>

</html>
<?php /**PATH C:\laragon\www\KP-PSSA-FAJARHARAPAN\resources\views/components/layouts/apps.blade.php ENDPATH**/ ?>