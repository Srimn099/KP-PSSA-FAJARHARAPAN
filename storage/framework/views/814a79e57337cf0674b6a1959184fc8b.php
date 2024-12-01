<?php if (isset($component)) { $__componentOriginal2cfe54da9b3656e613e2c5b71ce91d4a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2cfe54da9b3656e613e2c5b71ce91d4a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.apps','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.apps'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="col-span-12">
        <div class="sections-header">
            <h2 class="title">DASHBOARD</h2>
        </div>
    </div>
    <div class="col-span-12">
        <div class="box">
            <div class="header">
                <h2 class="title">DATA TABLE</h2>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Launch demo modal
                  </button>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>No. Hp</th>
                                <th>Jenis Kelamin</th>
                                <th>Jenis Kelamin</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody class="bodyTable">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <?php if (isset($component)) { $__componentOriginalff7edcb41a9db454da6159d45629d2c5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalff7edcb41a9db454da6159d45629d2c5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modals.modalnotif','data' => ['id' => 'exampleModal','icon' => 'check-circle','title' => 'SUCCESS','message' => 'Data berhasil dihapus']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modals.modalnotif'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'exampleModal','icon' => 'check-circle','title' => 'SUCCESS','message' => 'Data berhasil dihapus']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalff7edcb41a9db454da6159d45629d2c5)): ?>
<?php $attributes = $__attributesOriginalff7edcb41a9db454da6159d45629d2c5; ?>
<?php unset($__attributesOriginalff7edcb41a9db454da6159d45629d2c5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalff7edcb41a9db454da6159d45629d2c5)): ?>
<?php $component = $__componentOriginalff7edcb41a9db454da6159d45629d2c5; ?>
<?php unset($__componentOriginalff7edcb41a9db454da6159d45629d2c5); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2cfe54da9b3656e613e2c5b71ce91d4a)): ?>
<?php $attributes = $__attributesOriginal2cfe54da9b3656e613e2c5b71ce91d4a; ?>
<?php unset($__attributesOriginal2cfe54da9b3656e613e2c5b71ce91d4a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2cfe54da9b3656e613e2c5b71ce91d4a)): ?>
<?php $component = $__componentOriginal2cfe54da9b3656e613e2c5b71ce91d4a; ?>
<?php unset($__componentOriginal2cfe54da9b3656e613e2c5b71ce91d4a); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\KP-PSSA-FAJARHARAPAN\resources\views/dashboard.blade.php ENDPATH**/ ?>