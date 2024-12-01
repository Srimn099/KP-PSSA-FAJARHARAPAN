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
            <h2 class="title">DATA SISWA</h2>
        </div>
    </div>
    <div class="col-span-12">
        <div class="box">
            <div class="header">
                <span></span>
                <a href="<?php echo e(url('siswa/create')); ?>" class="btn btn-sm btn-success">
                    <i class="bi bi-plus"></i> Tambah
                </a>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Tempat Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Tgl Masuk</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($item->nama); ?></td>
                                    <td><?php echo e($item->ttl()); ?></td>
                                    <td><?php echo e($item->jk); ?></td>
                                    <td><?php echo '2 November 2024'; ?></td>
                                    <td>
                                        <div class="btn-group btn-sm">
                                            <a href="#detail<?php echo e($item->id); ?>" data-bs-toggle="modal" class="btn btn-sm btn-outline-warning">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <a href="<?php echo e(url('siswa/edit',$item->id)); ?>" class="btn btn-sm btn-outline-primary">
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modals.modalconfirm','data' => ['id' => 'hapus'.e($item->id).'','action' => ''.e(url('siswa/delete/'.$item->id)).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modals.modalconfirm'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'hapus'.e($item->id).'','action' => ''.e(url('siswa/delete/'.$item->id)).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.lists.listvertical','data' => ['title' => 'Tempat Tanggal Lahir','subtitle' => ''.e($item->ttl()).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('lists.listvertical'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Tempat Tanggal Lahir','subtitle' => ''.e($item->ttl()).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.lists.listvertical','data' => ['title' => 'Pendidikan Terakhir','subtitle' => ''.e($item->pendidikan_terakhir).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('lists.listvertical'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Pendidikan Terakhir','subtitle' => ''.e($item->pendidikan_terakhir).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.lists.listvertical','data' => ['title' => 'Nama Ayah','subtitle' => ''.e($item->nama_ayah).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('lists.listvertical'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Nama Ayah','subtitle' => ''.e($item->nama_ayah).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.lists.listvertical','data' => ['title' => 'Nama Ibu','subtitle' => ''.e($item->nama_ibu).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('lists.listvertical'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Nama Ibu','subtitle' => ''.e($item->nama_ibu).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.lists.listvertical','data' => ['title' => 'Pekerjaan Orang Tua','subtitle' => ''.e($item->pk_ortu).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('lists.listvertical'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Pekerjaan Orang Tua','subtitle' => ''.e($item->pk_ortu).'']); ?>
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
                                        <?php if (isset($component)) { $__componentOriginal8931ce8d26d6952e8f1782a096807ed4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8931ce8d26d6952e8f1782a096807ed4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.lists.listvertical','data' => ['title' => 'Tanggal Masuk','subtitle' => ''.e($item->tgl_masuk).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('lists.listvertical'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Tanggal Masuk','subtitle' => ''.e($item->tgl_masuk).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.lists.listvertical','data' => ['title' => 'Tanggal Keluar','subtitle' => ''.e($item->tgl_keluar).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('lists.listvertical'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Tanggal Keluar','subtitle' => ''.e($item->tgl_keluar).'']); ?>
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
<?php /**PATH C:\laragon\www\KP-PSSA-FAJARHARAPAN\resources\views/siswa/index.blade.php ENDPATH**/ ?>