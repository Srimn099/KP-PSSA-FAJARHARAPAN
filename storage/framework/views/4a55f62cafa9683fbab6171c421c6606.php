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
            <h2 class="title">DATA ASET</h2>
        </div>
    </div>
    <div class="col-span-12">
        <div class="box">
            <div class="header">
                <span></span>
                <a href="<?php echo e(url('aset/create')); ?>" class="btn btn-sm btn-success">
                    <i class="bi bi-plus"></i> Tambah
                </a>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Barang</th>
                                <th>Satuan</th>
                                <th>Harga</th>
                                <th>Qty</th>
                                <th>Total</th>
                                <th>Tgl Peroleh</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($item->nama_aset); ?></td>
                                    <td><?php echo e($item->satuan); ?></td>
                                    <td>Rp. <?php echo number_format($item->harga,0,',','.'); ?></td>
                                    <td><?php echo e($item->qty); ?></td>
                                    <td>Rp. <?php echo number_format($item->total,0,',','.'); ?></td>
                                    <td><?php echo '5 November 2024'; ?></td>
                                    <td>
                                        <div class="btn-group btn-sm">
                                            <a href="#detail<?php echo e($item->id); ?>" data-bs-toggle="modal" class="btn btn-sm btn-outline-warning">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <a href="<?php echo e(url('aset/edit',$item->id)); ?>" class="btn btn-sm btn-outline-primary">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <a href="#hapus<?php echo e($item->id); ?>" data-bs-toggle="modal" class="btn btn-sm btn-outline-danger">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Modal hapus -->
                                <?php if (isset($component)) { $__componentOriginalc95193a0f874341629d7ab0bd36cbdd5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc95193a0f874341629d7ab0bd36cbdd5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modals.modalconfirm','data' => ['id' => 'hapus'.e($item->id).'','action' => ''.e(url('aset/delete/'.$item->id)).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modals.modalconfirm'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'hapus'.e($item->id).'','action' => ''.e(url('aset/delete/'.$item->id)).'']); ?>
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
                                <?php if (isset($component)) { $__componentOriginal9c6d3d2089bd912f02944d63d5c3f1ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9c6d3d2089bd912f02944d63d5c3f1ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modals.modaldetail','data' => ['id' => 'detail'.e($item->id).'','title' => 'Detail Aset']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modals.modaldetail'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'detail'.e($item->id).'','title' => 'Detail Aset']); ?>
                                    <ul class="list-vertical">
                                        <?php if (isset($component)) { $__componentOriginal8931ce8d26d6952e8f1782a096807ed4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8931ce8d26d6952e8f1782a096807ed4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.lists.listvertical','data' => ['title' => 'Kode','subtitle' => ''.e($item->kode_aset).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('lists.listvertical'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Kode','subtitle' => ''.e($item->kode_aset).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8931ce8d26d6952e8f1782a096807ed4)): ?>
<?php $attributes = $__attributesOriginal8931ce8d26d6952e8f1782a096807ed4; ?>
<?php unset($__attributesOriginal8931ce8d26d6952e8f1782a096807ed4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8931ce8d26d6952e8f1782a096807ed4)): ?>
<?php $component = $__componentOriginal8931ce8d26d6952e8f1782a096807ed4; ?>
<?php unset($__componentOriginal8931ce8d26d6952e8f1782a096807ed4); ?>
<?php endif; ?>
                                        <?php if (isset($component)) { $__componentOriginal8931ce8d26d6952e8f1782a096807ed4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8931ce8d26d6952e8f1782a096807ed4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.lists.listvertical','data' => ['title' => 'Nama Barang','subtitle' => ''.e($item->nama_aset).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('lists.listvertical'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Nama Barang','subtitle' => ''.e($item->nama_aset).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8931ce8d26d6952e8f1782a096807ed4)): ?>
<?php $attributes = $__attributesOriginal8931ce8d26d6952e8f1782a096807ed4; ?>
<?php unset($__attributesOriginal8931ce8d26d6952e8f1782a096807ed4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8931ce8d26d6952e8f1782a096807ed4)): ?>
<?php $component = $__componentOriginal8931ce8d26d6952e8f1782a096807ed4; ?>
<?php unset($__componentOriginal8931ce8d26d6952e8f1782a096807ed4); ?>
<?php endif; ?>
                                        <?php if (isset($component)) { $__componentOriginal8931ce8d26d6952e8f1782a096807ed4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8931ce8d26d6952e8f1782a096807ed4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.lists.listvertical','data' => ['title' => 'Satuan','subtitle' => ''.e($item->satuan).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('lists.listvertical'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Satuan','subtitle' => ''.e($item->satuan).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8931ce8d26d6952e8f1782a096807ed4)): ?>
<?php $attributes = $__attributesOriginal8931ce8d26d6952e8f1782a096807ed4; ?>
<?php unset($__attributesOriginal8931ce8d26d6952e8f1782a096807ed4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8931ce8d26d6952e8f1782a096807ed4)): ?>
<?php $component = $__componentOriginal8931ce8d26d6952e8f1782a096807ed4; ?>
<?php unset($__componentOriginal8931ce8d26d6952e8f1782a096807ed4); ?>
<?php endif; ?>
                                        <?php if (isset($component)) { $__componentOriginal8931ce8d26d6952e8f1782a096807ed4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8931ce8d26d6952e8f1782a096807ed4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.lists.listvertical','data' => ['title' => 'Harga','subtitle' => ''.number_format($item->harga,0,',','.').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('lists.listvertical'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Harga','subtitle' => ''.number_format($item->harga,0,',','.').'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8931ce8d26d6952e8f1782a096807ed4)): ?>
<?php $attributes = $__attributesOriginal8931ce8d26d6952e8f1782a096807ed4; ?>
<?php unset($__attributesOriginal8931ce8d26d6952e8f1782a096807ed4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8931ce8d26d6952e8f1782a096807ed4)): ?>
<?php $component = $__componentOriginal8931ce8d26d6952e8f1782a096807ed4; ?>
<?php unset($__componentOriginal8931ce8d26d6952e8f1782a096807ed4); ?>
<?php endif; ?>
                                        <?php if (isset($component)) { $__componentOriginal8931ce8d26d6952e8f1782a096807ed4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8931ce8d26d6952e8f1782a096807ed4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.lists.listvertical','data' => ['title' => 'Merk','subtitle' => ''.e($item->merk).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('lists.listvertical'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Merk','subtitle' => ''.e($item->merk).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8931ce8d26d6952e8f1782a096807ed4)): ?>
<?php $attributes = $__attributesOriginal8931ce8d26d6952e8f1782a096807ed4; ?>
<?php unset($__attributesOriginal8931ce8d26d6952e8f1782a096807ed4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8931ce8d26d6952e8f1782a096807ed4)): ?>
<?php $component = $__componentOriginal8931ce8d26d6952e8f1782a096807ed4; ?>
<?php unset($__componentOriginal8931ce8d26d6952e8f1782a096807ed4); ?>
<?php endif; ?>
                                        <?php if (isset($component)) { $__componentOriginal8931ce8d26d6952e8f1782a096807ed4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8931ce8d26d6952e8f1782a096807ed4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.lists.listvertical','data' => ['title' => 'Satuan','subtitle' => ''.e($item->satuan).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('lists.listvertical'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Satuan','subtitle' => ''.e($item->satuan).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8931ce8d26d6952e8f1782a096807ed4)): ?>
<?php $attributes = $__attributesOriginal8931ce8d26d6952e8f1782a096807ed4; ?>
<?php unset($__attributesOriginal8931ce8d26d6952e8f1782a096807ed4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8931ce8d26d6952e8f1782a096807ed4)): ?>
<?php $component = $__componentOriginal8931ce8d26d6952e8f1782a096807ed4; ?>
<?php unset($__componentOriginal8931ce8d26d6952e8f1782a096807ed4); ?>
<?php endif; ?>
                                        <?php if (isset($component)) { $__componentOriginal8931ce8d26d6952e8f1782a096807ed4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8931ce8d26d6952e8f1782a096807ed4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.lists.listvertical','data' => ['title' => 'Total','subtitle' => ''.number_format($item->total,0,',','.').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('lists.listvertical'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Total','subtitle' => ''.number_format($item->total,0,',','.').'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8931ce8d26d6952e8f1782a096807ed4)): ?>
<?php $attributes = $__attributesOriginal8931ce8d26d6952e8f1782a096807ed4; ?>
<?php unset($__attributesOriginal8931ce8d26d6952e8f1782a096807ed4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8931ce8d26d6952e8f1782a096807ed4)): ?>
<?php $component = $__componentOriginal8931ce8d26d6952e8f1782a096807ed4; ?>
<?php unset($__componentOriginal8931ce8d26d6952e8f1782a096807ed4); ?>
<?php endif; ?>
                                        <?php if (isset($component)) { $__componentOriginal8931ce8d26d6952e8f1782a096807ed4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8931ce8d26d6952e8f1782a096807ed4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.lists.listvertical','data' => ['title' => 'Bahan','subtitle' => ''.e($item->bahan).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('lists.listvertical'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Bahan','subtitle' => ''.e($item->bahan).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8931ce8d26d6952e8f1782a096807ed4)): ?>
<?php $attributes = $__attributesOriginal8931ce8d26d6952e8f1782a096807ed4; ?>
<?php unset($__attributesOriginal8931ce8d26d6952e8f1782a096807ed4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8931ce8d26d6952e8f1782a096807ed4)): ?>
<?php $component = $__componentOriginal8931ce8d26d6952e8f1782a096807ed4; ?>
<?php unset($__componentOriginal8931ce8d26d6952e8f1782a096807ed4); ?>
<?php endif; ?>
                                        <?php if (isset($component)) { $__componentOriginal8931ce8d26d6952e8f1782a096807ed4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8931ce8d26d6952e8f1782a096807ed4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.lists.listvertical','data' => ['title' => 'Kondisi','subtitle' => ''.e($item->kondisi).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('lists.listvertical'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Kondisi','subtitle' => ''.e($item->kondisi).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8931ce8d26d6952e8f1782a096807ed4)): ?>
<?php $attributes = $__attributesOriginal8931ce8d26d6952e8f1782a096807ed4; ?>
<?php unset($__attributesOriginal8931ce8d26d6952e8f1782a096807ed4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8931ce8d26d6952e8f1782a096807ed4)): ?>
<?php $component = $__componentOriginal8931ce8d26d6952e8f1782a096807ed4; ?>
<?php unset($__componentOriginal8931ce8d26d6952e8f1782a096807ed4); ?>
<?php endif; ?>
                                        <?php if (isset($component)) { $__componentOriginal8931ce8d26d6952e8f1782a096807ed4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8931ce8d26d6952e8f1782a096807ed4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.lists.listvertical','data' => ['title' => 'Diperoleh Tanggal','subtitle' => ''.e($item->tgl_peroleh).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('lists.listvertical'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Diperoleh Tanggal','subtitle' => ''.e($item->tgl_peroleh).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8931ce8d26d6952e8f1782a096807ed4)): ?>
<?php $attributes = $__attributesOriginal8931ce8d26d6952e8f1782a096807ed4; ?>
<?php unset($__attributesOriginal8931ce8d26d6952e8f1782a096807ed4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8931ce8d26d6952e8f1782a096807ed4)): ?>
<?php $component = $__componentOriginal8931ce8d26d6952e8f1782a096807ed4; ?>
<?php unset($__componentOriginal8931ce8d26d6952e8f1782a096807ed4); ?>
<?php endif; ?>
                                        <?php if (isset($component)) { $__componentOriginal8931ce8d26d6952e8f1782a096807ed4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8931ce8d26d6952e8f1782a096807ed4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.lists.listvertical','data' => ['title' => 'Lokasi Simpan','subtitle' => ''.e($item->lokasi_simpan).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('lists.listvertical'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Lokasi Simpan','subtitle' => ''.e($item->lokasi_simpan).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8931ce8d26d6952e8f1782a096807ed4)): ?>
<?php $attributes = $__attributesOriginal8931ce8d26d6952e8f1782a096807ed4; ?>
<?php unset($__attributesOriginal8931ce8d26d6952e8f1782a096807ed4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8931ce8d26d6952e8f1782a096807ed4)): ?>
<?php $component = $__componentOriginal8931ce8d26d6952e8f1782a096807ed4; ?>
<?php unset($__componentOriginal8931ce8d26d6952e8f1782a096807ed4); ?>
<?php endif; ?>
                                        <?php if (isset($component)) { $__componentOriginal8931ce8d26d6952e8f1782a096807ed4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8931ce8d26d6952e8f1782a096807ed4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.lists.listvertical','data' => ['title' => 'Keterangan','subtitle' => ''.e($item->keterangan).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('lists.listvertical'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Keterangan','subtitle' => ''.e($item->keterangan).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8931ce8d26d6952e8f1782a096807ed4)): ?>
<?php $attributes = $__attributesOriginal8931ce8d26d6952e8f1782a096807ed4; ?>
<?php unset($__attributesOriginal8931ce8d26d6952e8f1782a096807ed4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8931ce8d26d6952e8f1782a096807ed4)): ?>
<?php $component = $__componentOriginal8931ce8d26d6952e8f1782a096807ed4; ?>
<?php unset($__componentOriginal8931ce8d26d6952e8f1782a096807ed4); ?>
<?php endif; ?>
                                    </ul>
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9c6d3d2089bd912f02944d63d5c3f1ff)): ?>
<?php $attributes = $__attributesOriginal9c6d3d2089bd912f02944d63d5c3f1ff; ?>
<?php unset($__attributesOriginal9c6d3d2089bd912f02944d63d5c3f1ff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9c6d3d2089bd912f02944d63d5c3f1ff)): ?>
<?php $component = $__componentOriginal9c6d3d2089bd912f02944d63d5c3f1ff; ?>
<?php unset($__componentOriginal9c6d3d2089bd912f02944d63d5c3f1ff); ?>
<?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
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
<?php /**PATH C:\laragon\www\KP-PSSA-FAJARHARAPAN\resources\views/aset/index.blade.php ENDPATH**/ ?>