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
            <h2 class="title">DATA KEUANGAN</h2>
        </div>
    </div>
    <div class="col-span-12">
        <div class="box">
            <div class="header">
                <span></span>
                <a href="#create" data-bs-toggle="modal" class="btn btn-sm btn-success">
                    <i class="bi bi-plus"></i> Tambah
                </a>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pos</th>
                                <th>Jenis</th>
                                <th>Saldo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($item->nama_pos); ?></td>
                                    <td><?php echo e($item->jenis_pos); ?></td>
                                    <td>Rp. <?php echo number_format($item->saldo_pos,0,',','.'); ?></td>
                                    <td>
                                        <div class="btn-group btn-sm">
                                            <a href="#edit<?php echo e($item->id); ?>" data-bs-toggle="modal"
                                                class="btn btn-sm btn-outline-primary">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <a href="#hapus<?php echo e($item->id); ?>" data-bs-toggle="modal"
                                                class="btn btn-sm btn-outline-danger">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Modal hapus -->
                                <?php if (isset($component)) { $__componentOriginalc95193a0f874341629d7ab0bd36cbdd5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc95193a0f874341629d7ab0bd36cbdd5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modals.modalconfirm','data' => ['id' => 'hapus'.e($item->id).'','action' => ''.e(url('keuangan/delete/' . $item->id)).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modals.modalconfirm'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'hapus'.e($item->id).'','action' => ''.e(url('keuangan/delete/' . $item->id)).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc95193a0f874341629d7ab0bd36cbdd5)): ?>
<?php $attributes = $__attributesOriginalc95193a0f874341629d7ab0bd36cbdd5; ?>
<?php unset($__attributesOriginalc95193a0f874341629d7ab0bd36cbdd5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc95193a0f874341629d7ab0bd36cbdd5)): ?>
<?php $component = $__componentOriginalc95193a0f874341629d7ab0bd36cbdd5; ?>
<?php unset($__componentOriginalc95193a0f874341629d7ab0bd36cbdd5); ?>
<?php endif; ?>
                                <!-- Modal detail -->
                                 <!-- Modal create -->
                                <?php if (isset($component)) { $__componentOriginal1a788d6f4a49300361bb2870af4c996a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1a788d6f4a49300361bb2870af4c996a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modals.modalpost','data' => ['id' => 'edit'.e($item->id).'','title' => 'Form Update Data Keuangan','action' => ''.e(url('keuangan/update', $item->id)).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modals.modalpost'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'edit'.e($item->id).'','title' => 'Form Update Data Keuangan','action' => ''.e(url('keuangan/update', $item->id)).'']); ?>
                                    <?php if (isset($component)) { $__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.input','data' => ['readonly' => true,'label' => 'Kode Pos Keuangan','name' => 'kode_pos','placeholder' => 'Kode Keuangan','value' => ''.e($item->kode_pos).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['readonly' => true,'label' => 'Kode Pos Keuangan','name' => 'kode_pos','placeholder' => 'Kode Keuangan','value' => ''.e($item->kode_pos).'']); ?>
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
                                    <?php if (isset($component)) { $__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.input','data' => ['label' => 'Nama Pos Keuangan','name' => 'nama_pos','value' => ''.e($item->nama_pos).'','placeholder' => 'Nama Pos Keuangan']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Nama Pos Keuangan','name' => 'nama_pos','value' => ''.e($item->nama_pos).'','placeholder' => 'Nama Pos Keuangan']); ?>
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
                                    <?php if (isset($component)) { $__componentOriginal4e150f034db9bd45fe1495cb5234d541 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4e150f034db9bd45fe1495cb5234d541 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.select','data' => ['label' => 'Jenis Pos Keuangan','name' => 'jenis_pos']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Jenis Pos Keuangan','name' => 'jenis_pos']); ?>
                                        <option value="">--- Pilih ---</option>
                                        <option value="ASET LANCAR" <?php if($item->jenis_pos == 'ASET LANCAR'): ?> selected <?php endif; ?>>ASET LANCAR</option>
                                        <option value="ASET TIDAK LANCAR" <?php if($item->jenis_pos == 'ASET TIDAK LANCAR'): ?> selected <?php endif; ?>>ASET TIDAK LANCAR</option>
                                        <option value="HUTANG DAN ASET BERSIH" <?php if($item->jenis_pos == 'HUTANG DAN ASET BERSIH'): ?> selected <?php endif; ?>>HUTANG DAN ASET BERSIH</option>
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
                                    <?php if (isset($component)) { $__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.input','data' => ['label' => 'Nominal','name' => 'saldo_pos','value' => ''.e($item->saldo_pos).'','placeholder' => 'Nominal Pos Keuangan']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Nominal','name' => 'saldo_pos','value' => ''.e($item->saldo_pos).'','placeholder' => 'Nominal Pos Keuangan']); ?>
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
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1a788d6f4a49300361bb2870af4c996a)): ?>
<?php $attributes = $__attributesOriginal1a788d6f4a49300361bb2870af4c996a; ?>
<?php unset($__attributesOriginal1a788d6f4a49300361bb2870af4c996a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1a788d6f4a49300361bb2870af4c996a)): ?>
<?php $component = $__componentOriginal1a788d6f4a49300361bb2870af4c996a; ?>
<?php unset($__componentOriginal1a788d6f4a49300361bb2870af4c996a); ?>
<?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal create -->
    <?php if (isset($component)) { $__componentOriginal1a788d6f4a49300361bb2870af4c996a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1a788d6f4a49300361bb2870af4c996a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modals.modalpost','data' => ['id' => 'create','title' => 'Form Tambah Data Keuangan','action' => ''.e(url('keuangan/store')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modals.modalpost'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'create','title' => 'Form Tambah Data Keuangan','action' => ''.e(url('keuangan/store')).'']); ?>
        <?php if (isset($component)) { $__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.input','data' => ['readonly' => true,'label' => 'Kode Pos Keuangan','name' => 'kode_pos','placeholder' => 'Kode Keuangan','value' => ''.e($kode).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['readonly' => true,'label' => 'Kode Pos Keuangan','name' => 'kode_pos','placeholder' => 'Kode Keuangan','value' => ''.e($kode).'']); ?>
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
        <?php if (isset($component)) { $__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.input','data' => ['label' => 'Nama Pos Keuangan','name' => 'nama_pos','placeholder' => 'Nama Pos Keuangan']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Nama Pos Keuangan','name' => 'nama_pos','placeholder' => 'Nama Pos Keuangan']); ?>
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
        <?php if (isset($component)) { $__componentOriginal4e150f034db9bd45fe1495cb5234d541 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4e150f034db9bd45fe1495cb5234d541 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.select','data' => ['label' => 'Jenis Pos Keuangan','name' => 'jenis_pos']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Jenis Pos Keuangan','name' => 'jenis_pos']); ?>
            <option value="">--- Pilih ---</option>
            <option value="ASET LANCAR">ASET LANCAR</option>
            <option value="ASET TIDAK LANCAR">ASET TIDAK LANCAR</option>
            <option value="HUTANG DAN ASET BERSIH">HUTANG DAN ASET BERSIH</option>
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
        <?php if (isset($component)) { $__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.input','data' => ['label' => 'Nominal','name' => 'saldo_pos','placeholder' => 'Nominal Pos Keuangan']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Nominal','name' => 'saldo_pos','placeholder' => 'Nominal Pos Keuangan']); ?>
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
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1a788d6f4a49300361bb2870af4c996a)): ?>
<?php $attributes = $__attributesOriginal1a788d6f4a49300361bb2870af4c996a; ?>
<?php unset($__attributesOriginal1a788d6f4a49300361bb2870af4c996a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1a788d6f4a49300361bb2870af4c996a)): ?>
<?php $component = $__componentOriginal1a788d6f4a49300361bb2870af4c996a; ?>
<?php unset($__componentOriginal1a788d6f4a49300361bb2870af4c996a); ?>
<?php endif; ?>

    <?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('assets/js/currencyFormater.js')); ?>"></script>
        <script>
            $('#saldo_pos').formatRupiah();
        </script>
        <?php if($errors->any()): ?>
            <script>
                $(document).ready(function() {
                    var modal = new bootstrap.Modal(document.getElementById('create'));
                    modal.show(); // Tampilkan modal secara otomatis saat halaman dimuat
                });
            </script>
        <?php endif; ?>
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
<?php /**PATH C:\laragon\www\KP-PSSA-FAJARHARAPAN\resources\views/postkeuangan/index.blade.php ENDPATH**/ ?>