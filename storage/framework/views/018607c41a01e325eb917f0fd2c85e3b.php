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
            <h2 class="title">DATA TRANSAKSI</h2>
        </div>
    </div>
    <div class="col-span-12">
        <div class="box">
            <div class="header">
                <span></span>
                <div class="btn-group">
                    <a href="#modallaporan" data-bs-toggle="modal" class="btn btn-danger">
                        <i class="bi bi-file-pdf"></i> Cetak Laporan
                    </a>
                    <a href="#create" data-bs-toggle="modal" class="btn btn-success">
                        <i class="bi bi-plus"></i> Tambah
                    </a>
                </div>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Keterangan</th>
                                <th>Jenis</th>
                                <th>Nominal</th>
                                <th>Saldo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo '26 November 2024'; ?></td>
                                    <td><?php echo e($item->keterangan_trx); ?></td>
                                    <td><?php echo e($item->jenis_trx); ?></td>
                                    <td>Rp. <?php echo number_format($item->nominal_trx,0,',','.'); ?></td>
                                    <td>Rp. <?php echo number_format($item->saldo_trx,0,',','.'); ?></td>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modals.modalconfirm','data' => ['id' => 'hapus'.e($item->id).'','action' => ''.e(url('transaksi/delete/' . $item->id)).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modals.modalconfirm'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'hapus'.e($item->id).'','action' => ''.e(url('transaksi/delete/' . $item->id)).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modals.modalpost','data' => ['id' => 'edit'.e($item->id).'','title' => 'Form Update Data Transaksi','action' => ''.e(url('transaksi/update', $item->id)).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modals.modalpost'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'edit'.e($item->id).'','title' => 'Form Update Data Transaksi','action' => ''.e(url('transaksi/update', $item->id)).'']); ?>
                                    <?php if (isset($component)) { $__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.input','data' => ['readonly' => true,'label' => 'Kode Transaksi','name' => 'kode_trx','placeholder' => 'Kode Transaksi','value' => ''.e($item->kode_trx).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['readonly' => true,'label' => 'Kode Transaksi','name' => 'kode_trx','placeholder' => 'Kode Transaksi','value' => ''.e($item->kode_trx).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.input','data' => ['label' => 'Keterangan','name' => 'keterangan_trx','value' => ''.e($item->keterangan_trx).'','placeholder' => 'Keterangan Transaksi']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Keterangan','name' => 'keterangan_trx','value' => ''.e($item->keterangan_trx).'','placeholder' => 'Keterangan Transaksi']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.select','data' => ['label' => 'Jenis Transaksi','name' => 'jenis_trx']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Jenis Transaksi','name' => 'jenis_trx']); ?>
                                        <option value="">--- Pilih ---</option>
                                        <option value="DEBET" <?php if($item->jenis_trx == 'DEBET'): ?> selected <?php endif; ?>>DEBET
                                        </option>
                                        <option value="KREDIT" <?php if($item->jenis_trx == 'KREDIT'): ?> selected <?php endif; ?>>KREDIT
                                        </option>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.input','data' => ['label' => 'Nominal','name' => 'nominal_trx','value' => ''.e($item->nominal_trx).'','placeholder' => 'Nominal Transaksi']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Nominal','name' => 'nominal_trx','value' => ''.e($item->nominal_trx).'','placeholder' => 'Nominal Transaksi']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.input','data' => ['label' => 'Saldo','name' => 'saldo_trx','value' => ''.e($item->saldo_trx).'','placeholder' => 'Saldo Transaksi']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Saldo','name' => 'saldo_trx','value' => ''.e($item->saldo_trx).'','placeholder' => 'Saldo Transaksi']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.input','data' => ['label' => 'Tanggal Transaksi','name' => 'tgl_trx','value' => ''.e($item->tgl_trx).'','type' => 'date','placeholder' => 'Tanggal Transaksi']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Tanggal Transaksi','name' => 'tgl_trx','value' => ''.e($item->tgl_trx).'','type' => 'date','placeholder' => 'Tanggal Transaksi']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modals.modalpost','data' => ['id' => 'create','title' => 'Form Tambah Data Transaksi','action' => ''.e(url('transaksi/store')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modals.modalpost'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'create','title' => 'Form Tambah Data Transaksi','action' => ''.e(url('transaksi/store')).'']); ?>
        <?php if (isset($component)) { $__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.input','data' => ['readonly' => true,'label' => 'Kode Transaksi','name' => 'kode_trx','placeholder' => 'Kode Transaksi','value' => ''.e($kode).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['readonly' => true,'label' => 'Kode Transaksi','name' => 'kode_trx','placeholder' => 'Kode Transaksi','value' => ''.e($kode).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.input','data' => ['label' => 'Keterangan','name' => 'keterangan_trx','placeholder' => 'Keterangan Transaksi']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Keterangan','name' => 'keterangan_trx','placeholder' => 'Keterangan Transaksi']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.select','data' => ['label' => 'Jenis Transaksi','name' => 'jenis_trx']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Jenis Transaksi','name' => 'jenis_trx']); ?>
            <option value="">--- Pilih ---</option>
            <option value="DEBET">DEBET</option>
            <option value="KREDIT">KREDIT</option>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.input','data' => ['label' => 'Nominal','name' => 'nominal_trx','placeholder' => 'Nominal Transaksi']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Nominal','name' => 'nominal_trx','placeholder' => 'Nominal Transaksi']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.input','data' => ['label' => 'Saldo Awal','name' => 'saldo_trx','placeholder' => 'Saldo Transaksi']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Saldo Awal','name' => 'saldo_trx','placeholder' => 'Saldo Transaksi']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.input','data' => ['label' => 'Tanggal Transaksi','name' => 'tgl_trx','type' => 'date','placeholder' => 'Tanggal Transaksi']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Tanggal Transaksi','name' => 'tgl_trx','type' => 'date','placeholder' => 'Tanggal Transaksi']); ?>
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

    <!-- Modal Cetak Laporan -->
    <?php if (isset($component)) { $__componentOriginal1a788d6f4a49300361bb2870af4c996a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1a788d6f4a49300361bb2870af4c996a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modals.modalpost','data' => ['id' => 'modallaporan','title' => 'CETAK LAPORAN TRANSAKSI','action' => ''.e(url('laporan/laptransaksi')).'','btnTitle' => 'CETAK LAPORAN']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modals.modalpost'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'modallaporan','title' => 'CETAK LAPORAN TRANSAKSI','action' => ''.e(url('laporan/laptransaksi')).'','btnTitle' => 'CETAK LAPORAN']); ?>

        <?php if (isset($component)) { $__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.input','data' => ['label' => 'Dari Tanggal','type' => 'date','name' => 'tgl_mulai','placeholder' => 'Dari tanggal']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Dari Tanggal','type' => 'date','name' => 'tgl_mulai','placeholder' => 'Dari tanggal']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.input','data' => ['label' => 'Sampai Tanggal','type' => 'date','name' => 'tgl_akhir','placeholder' => 'Sampai tanggal']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Sampai Tanggal','type' => 'date','name' => 'tgl_akhir','placeholder' => 'Sampai tanggal']); ?>
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
            $('#nominal_trx').formatRupiah();
            $('#saldo_trx').formatRupiah();
            var jenistrx = $('#jenis_trx').val();
        </script>
        <?php if($errors->any()): ?>
            <script>
                $(document).ready(function() {
                    var errorsArray = <?php echo json_encode($errors->all()); ?>;
                    var str1 = "Harap masukkan Tgl Mulai";
                    var str2 = "Harap masukkan Tgl Mulai";
                    if (errorsArray[0] == str1 || errorsArray[1] == str2) {
                        var modal = new bootstrap.Modal(document.getElementById('modallaporan'));
                        modal.show();
                    } else {
                        var modal = new bootstrap.Modal(document.getElementById('create'));
                        modal.show();
                    }
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
<?php /**PATH C:\laragon\www\KP-PSSA-FAJARHARAPAN\resources\views/transaksi/index.blade.php ENDPATH**/ ?>