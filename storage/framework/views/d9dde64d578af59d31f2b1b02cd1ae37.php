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
        <div class="box">
            <div class="header">
                <h2 class="title">FORM TAMBAH DATA ASET</h2>
            </div>
            <div class="body">
                <form action="<?php echo e(url('aset/store')); ?>" method="POST" class="form-post-data" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="col-span-12 md:col-span-3">
                        <?php if (isset($component)) { $__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.input','data' => ['readonly' => true,'label' => 'Kode Barang','name' => 'kode_aset','placeholder' => 'Kode Aset','value' => ''.e($kode).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['readonly' => true,'label' => 'Kode Barang','name' => 'kode_aset','placeholder' => 'Kode Aset','value' => ''.e($kode).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4)): ?>
<?php $attributes = $__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4; ?>
<?php unset($__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4)): ?>
<?php $component = $__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4; ?>
<?php unset($__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4); ?>
<?php endif; ?>
                    </div>
                    <div class="col-span-12 md:col-span-3">
                        <?php if (isset($component)) { $__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.input','data' => ['label' => 'Nama Barang','name' => 'nama_aset','placeholder' => 'Masukan nama barang ...']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Nama Barang','name' => 'nama_aset','placeholder' => 'Masukan nama barang ...']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4)): ?>
<?php $attributes = $__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4; ?>
<?php unset($__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4)): ?>
<?php $component = $__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4; ?>
<?php unset($__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4); ?>
<?php endif; ?>
                    </div>
                    <div class="col-span-12 md:col-span-3">
                        <?php if (isset($component)) { $__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.input','data' => ['label' => 'Bahan','name' => 'bahan','placeholder' => 'Masukan bahan ...']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Bahan','name' => 'bahan','placeholder' => 'Masukan bahan ...']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4)): ?>
<?php $attributes = $__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4; ?>
<?php unset($__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4)): ?>
<?php $component = $__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4; ?>
<?php unset($__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4); ?>
<?php endif; ?>
                    </div>
                    <div class="col-span-12 md:col-span-3">
                        <?php if (isset($component)) { $__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.input','data' => ['label' => 'Merk','name' => 'merk','placeholder' => 'Masukan merk ...']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Merk','name' => 'merk','placeholder' => 'Masukan merk ...']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4)): ?>
<?php $attributes = $__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4; ?>
<?php unset($__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4)): ?>
<?php $component = $__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4; ?>
<?php unset($__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4); ?>
<?php endif; ?>
                    </div>
                    <div class="col-span-12 md:col-span-3">
                        <?php if (isset($component)) { $__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.input','data' => ['label' => 'Satuan','name' => 'satuan','placeholder' => 'Masukan Satuan ...']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Satuan','name' => 'satuan','placeholder' => 'Masukan Satuan ...']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4)): ?>
<?php $attributes = $__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4; ?>
<?php unset($__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4)): ?>
<?php $component = $__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4; ?>
<?php unset($__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4); ?>
<?php endif; ?>
                    </div>
                    <div class="col-span-12 md:col-span-3">
                        <?php if (isset($component)) { $__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.input','data' => ['label' => 'Harga / Satuan','name' => 'harga','placeholder' => 'Masukan Satuan ...']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Harga / Satuan','name' => 'harga','placeholder' => 'Masukan Satuan ...']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4)): ?>
<?php $attributes = $__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4; ?>
<?php unset($__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4)): ?>
<?php $component = $__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4; ?>
<?php unset($__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4); ?>
<?php endif; ?>
                    </div>
                    <div class="col-span-12 md:col-span-3">
                        <?php if (isset($component)) { $__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.input','data' => ['label' => 'Qty','name' => 'qty','placeholder' => 'Masukan qty ...']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Qty','name' => 'qty','placeholder' => 'Masukan qty ...']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4)): ?>
<?php $attributes = $__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4; ?>
<?php unset($__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4)): ?>
<?php $component = $__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4; ?>
<?php unset($__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4); ?>
<?php endif; ?>
                    </div>
                    <div class="col-span-12 md:col-span-3">
                        <?php if (isset($component)) { $__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.input','data' => ['label' => 'Total','name' => 'total','placeholder' => 'Masukan total ...','readonly' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Total','name' => 'total','placeholder' => 'Masukan total ...','readonly' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4)): ?>
<?php $attributes = $__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4; ?>
<?php unset($__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4)): ?>
<?php $component = $__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4; ?>
<?php unset($__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4); ?>
<?php endif; ?>
                    </div>
                    <div class="col-span-12 md:col-span-3">
                        <?php if (isset($component)) { $__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.input','data' => ['label' => 'Kondisi','name' => 'kondisi','placeholder' => 'Masukan Kondisi ...']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Kondisi','name' => 'kondisi','placeholder' => 'Masukan Kondisi ...']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4)): ?>
<?php $attributes = $__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4; ?>
<?php unset($__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4)): ?>
<?php $component = $__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4; ?>
<?php unset($__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4); ?>
<?php endif; ?>
                    </div>
                    <div class="col-span-12 md:col-span-3">
                        <?php if (isset($component)) { $__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.input','data' => ['label' => 'Lokasi Simpan','name' => 'lokasi_simpan','placeholder' => 'Masukan lokasi penyimpanan ...']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Lokasi Simpan','name' => 'lokasi_simpan','placeholder' => 'Masukan lokasi penyimpanan ...']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4)): ?>
<?php $attributes = $__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4; ?>
<?php unset($__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4)): ?>
<?php $component = $__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4; ?>
<?php unset($__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4); ?>
<?php endif; ?>
                    </div>
                    <div class="col-span-12 md:col-span-3">
                        <?php if (isset($component)) { $__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.input','data' => ['type' => 'date','label' => 'Diperoleh Tanggal','name' => 'tgl_peroleh','placeholder' => 'Masukan tanggal ...']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'date','label' => 'Diperoleh Tanggal','name' => 'tgl_peroleh','placeholder' => 'Masukan tanggal ...']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4)): ?>
<?php $attributes = $__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4; ?>
<?php unset($__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4)): ?>
<?php $component = $__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4; ?>
<?php unset($__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4); ?>
<?php endif; ?>
                    </div>
                    <div class="col-span-12 md:col-span-3">
                        <?php if (isset($component)) { $__componentOriginal4e150f034db9bd45fe1495cb5234d541 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4e150f034db9bd45fe1495cb5234d541 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.select','data' => ['label' => 'Jenis Aset','name' => 'jenis_aset']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Jenis Aset','name' => 'jenis_aset']); ?>
                            <option value="">--- Pilih ---</option>
                            <option value="TETAP">TETAP</option>
                            <option value="TIDAK TETAP">TIDAK TETAP</option>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4e150f034db9bd45fe1495cb5234d541)): ?>
<?php $attributes = $__attributesOriginal4e150f034db9bd45fe1495cb5234d541; ?>
<?php unset($__attributesOriginal4e150f034db9bd45fe1495cb5234d541); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4e150f034db9bd45fe1495cb5234d541)): ?>
<?php $component = $__componentOriginal4e150f034db9bd45fe1495cb5234d541; ?>
<?php unset($__componentOriginal4e150f034db9bd45fe1495cb5234d541); ?>
<?php endif; ?>
                    </div>
                    <div class="col-span-12 md:col-span-12">
                        <?php if (isset($component)) { $__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.input','data' => ['label' => 'Keterangan','name' => 'keterangan','placeholder' => 'Masukan Keterangan ...']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Keterangan','name' => 'keterangan','placeholder' => 'Masukan Keterangan ...']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4)): ?>
<?php $attributes = $__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4; ?>
<?php unset($__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4)): ?>
<?php $component = $__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4; ?>
<?php unset($__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4); ?>
<?php endif; ?>
                    </div>
                    <div class="col-span-12 md:col-span-12">
                        <div class="flex items-center justify-end space-x-2">
                            <a href="<?php echo e(url('aset')); ?>" class="btn btn-secondary">KEMBALI</a>
                            <button class="btn btn-primary">SIMPAN DATA</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php $__env->startPush('js'); ?>
        <script src="<?php echo e(asset('assets/js/currencyCalculator.js')); ?>"></script>
        <script>
            $('#harga, #qty').dynamicMultiplier({
                inputSelectors: ['#harga', '#qty'],
                resultSelector: '#total',
                formatCurrency: true // Format hasil sebagai mata uang
            });
        </script>
    <?php $__env->stopPush(); ?>
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
<?php /**PATH C:\laragon\www\KP-PSSA-FAJARHARAPAN\resources\views/aset/create.blade.php ENDPATH**/ ?>