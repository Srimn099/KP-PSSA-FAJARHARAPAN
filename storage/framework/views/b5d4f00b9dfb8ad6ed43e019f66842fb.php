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
            <h2 class="title">DATA PENGELOLA</h2>
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
                                <th>No KTP</th>
                                <th>Nama</th>
                                <th>Jensis Kelamin</th>
                                <th>Jabatan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($item->no_ktp); ?></td>
                                    <td><?php echo e($item->nama); ?></td>
                                    <td><?php echo e($item->jk); ?></td>
                                    <td><?php echo e($item->jabatan); ?></td>
                                    <td>
                                        <div class="btn-group btn-sm">
                                            <a href="#detail<?php echo e($item->id); ?>" data-bs-toggle="modal"
                                                class="btn btn-sm btn-outline-warning">
                                                <i class="bi bi-eye"></i>
                                            </a>
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
                                 <?php if (isset($component)) { $__componentOriginal9c6d3d2089bd912f02944d63d5c3f1ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9c6d3d2089bd912f02944d63d5c3f1ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modals.modaldetail','data' => ['id' => 'detail'.e($item->id).'','title' => 'Detail Siswa']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modals.modaldetail'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'detail'.e($item->id).'','title' => 'Detail Siswa']); ?>
                                    <ul class="list-vertical">
                                        <img src="<?php echo e($item->foto); ?>" alt="Foto" class="w-full h-auto rounded-lg">
                                        <?php if (isset($component)) { $__componentOriginal8931ce8d26d6952e8f1782a096807ed4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8931ce8d26d6952e8f1782a096807ed4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.lists.listvertical','data' => ['title' => 'Nama','subtitle' => ''.e($item->nama).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('lists.listvertical'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Nama','subtitle' => ''.e($item->nama).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.lists.listvertical','data' => ['title' => 'Nomor KTP','subtitle' => ''.e($item->no_ktp).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('lists.listvertical'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Nomor KTP','subtitle' => ''.e($item->no_ktp).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.lists.listvertical','data' => ['title' => 'Jenis Kelamin','subtitle' => ''.e($item->jk).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('lists.listvertical'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Jenis Kelamin','subtitle' => ''.e($item->jk).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.lists.listvertical','data' => ['title' => 'Jabatan','subtitle' => ''.e($item->jabatan).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('lists.listvertical'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Jabatan','subtitle' => ''.e($item->jabatan).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.lists.listvertical','data' => ['title' => 'Usia','subtitle' => ''.e($item->usia).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('lists.listvertical'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Usia','subtitle' => ''.e($item->usia).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.lists.listvertical','data' => ['title' => 'Alamat','subtitle' => ''.e($item->alamat).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('lists.listvertical'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Alamat','subtitle' => ''.e($item->alamat).'']); ?>
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
                                <!-- Modal Update -->
                                <?php if (isset($component)) { $__componentOriginal1a788d6f4a49300361bb2870af4c996a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1a788d6f4a49300361bb2870af4c996a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modals.modalpost','data' => ['id' => 'edit'.e($item->id).'','title' => 'Form Edit Data Pengelola','action' => ''.e(url('pengelola/update', $item->id)).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modals.modalpost'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'edit'.e($item->id).'','title' => 'Form Edit Data Pengelola','action' => ''.e(url('pengelola/update', $item->id)).'']); ?>

                                    <?php if (isset($component)) { $__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.input','data' => ['type' => 'file','label' => 'Update Foto','name' => 'foto','placeholder' => 'Masukan foto baru ...']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'file','label' => 'Update Foto','name' => 'foto','placeholder' => 'Masukan foto baru ...']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.input','data' => ['label' => 'No KTP','name' => 'no_ktp','value' => ''.e($item->no_ktp).'','placeholder' => 'Masukan no ktp ...']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'No KTP','name' => 'no_ktp','value' => ''.e($item->no_ktp).'','placeholder' => 'Masukan no ktp ...']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.input','data' => ['label' => 'Nama','name' => 'nama','value' => ''.e($item->nama).'','placeholder' => 'Masukan nama ...']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Nama','name' => 'nama','value' => ''.e($item->nama).'','placeholder' => 'Masukan nama ...']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.select','data' => ['label' => 'Jenis Kelamin','name' => 'jk']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Jenis Kelamin','name' => 'jk']); ?>
                                        <option value="">--- Pilih ---</option>
                                        <option value="Laki-laki" <?php if($item->jk == 'Laki-laki'): ?>
                                            selected
                                        <?php endif; ?>>Laki-laki</option>
                                        <option value="Perempuan" <?php if($item->jk == 'Perempuan'): ?>
                                            selected

                                        <?php endif; ?>>Perempuan</option>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.input','data' => ['label' => 'Usia','name' => 'usia','value' => ''.e($item->usia).'','placeholder' => 'Masukan usia ...']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Usia','name' => 'usia','value' => ''.e($item->usia).'','placeholder' => 'Masukan usia ...']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.input','data' => ['label' => 'Jabatan','name' => 'jabatan','value' => ''.e($item->jabatan).'','placeholder' => 'Masukan jabatan ...']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Jabatan','name' => 'jabatan','value' => ''.e($item->jabatan).'','placeholder' => 'Masukan jabatan ...']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.input','data' => ['label' => 'Alamat','name' => 'alamat','value' => ''.e($item->alamat).'','placeholder' => 'Masukan alamat']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Alamat','name' => 'alamat','value' => ''.e($item->alamat).'','placeholder' => 'Masukan alamat']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modals.modalpost','data' => ['id' => 'create','title' => 'Form Tambah Data Pengelola','action' => ''.e(url('pengelola/store')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modals.modalpost'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'create','title' => 'Form Tambah Data Pengelola','action' => ''.e(url('pengelola/store')).'']); ?>

        <?php if (isset($component)) { $__componentOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0083b0a72a1c55e14006c38a7ad7c1e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.input','data' => ['type' => 'file','label' => 'Foto','name' => 'foto','placeholder' => 'Masukan foto ...']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'file','label' => 'Foto','name' => 'foto','placeholder' => 'Masukan foto ...']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.input','data' => ['label' => 'No KTP','name' => 'no_ktp','placeholder' => 'Masukan no ktp ...']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'No KTP','name' => 'no_ktp','placeholder' => 'Masukan no ktp ...']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.input','data' => ['label' => 'Nama','name' => 'nama','placeholder' => 'Masukan nama ...']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Nama','name' => 'nama','placeholder' => 'Masukan nama ...']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.select','data' => ['label' => 'Jenis Kelamin','name' => 'jk']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Jenis Kelamin','name' => 'jk']); ?>
            <option value="">--- Pilih ---</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.input','data' => ['label' => 'Usia','name' => 'usia','placeholder' => 'Masukan usia ...']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Usia','name' => 'usia','placeholder' => 'Masukan usia ...']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.input','data' => ['label' => 'Jabatan','name' => 'jabatan','placeholder' => 'Masukan jabatan ...']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Jabatan','name' => 'jabatan','placeholder' => 'Masukan jabatan ...']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.inputs.input','data' => ['label' => 'Alamat','name' => 'alamat','placeholder' => 'Masukan alamat']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Alamat','name' => 'alamat','placeholder' => 'Masukan alamat']); ?>
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
<?php /**PATH C:\laragon\www\KP-PSSA-FAJARHARAPAN\resources\views/pengelola/index.blade.php ENDPATH**/ ?>