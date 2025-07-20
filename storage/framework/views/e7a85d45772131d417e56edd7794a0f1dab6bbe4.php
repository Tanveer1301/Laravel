
<!-- <!DOCTYPE html>
<html>
<head>
    <title>All Properties</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>



<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">🏠 MyHome</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a> 
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('properties.create')); ?>">Add Property</a>
                    

                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="container mt-5">
    <h2 class="mb-4 text-center">🏘️ All Properties</h2>

    <?php if(session('success')): ?>
        <div class="alert alert-success text-center">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Flat ID</th>
                <th>Tenant Name</th>
                <th>Phone</th>
                <th>Rent</th>
                <th>Other Charges</th>
                <th>Total</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($index + 1); ?></td>
                <td><strong><?php echo e($property->flat_id); ?></strong></td>
                <td><?php echo e($property->tenant_name); ?></td>
                <td><?php echo e($property->tenant_phone); ?></td>
                <td><?php echo e(number_format($property->rent)); ?></td>
                <td><?php echo e(number_format($property->other_charges)); ?></td>
                <td><strong><?php echo e(number_format($property->rent + $property->other_charges)); ?></strong></td>
                <td><?php echo e($property->description ?? 'N/A'); ?></td>
                <td>
                    <a href="<?php echo e(route('properties.edit', $property->flat_id)); ?>" class="btn btn-sm btn-primary">✏️Edit</a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
 -->




<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-primary">🏘️ All Properties</h2>
        <a href="<?php echo e(route('properties.create')); ?>" class="btn btn-success">➕ Add New Property</a>
    </div>

    <?php if(session('success')): ?>
        <div class="alert alert-success text-center">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <table class="table table-striped mb-0">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Flat ID</th>
                        <th>Tenant Name</th>
                        <th>Phone</th>
                        <th>Rent</th>
                        <th>Other Charges</th>
                        <th>Total</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($index + 1); ?></td>
                        <td><strong><?php echo e($property->flat_id); ?></strong></td>
                        <td><?php echo e($property->tenant_name); ?></td>
                        <td><?php echo e($property->tenant_phone); ?></td>
                        <td><?php echo e(number_format($property->rent, 2)); ?></td>
                        <td><?php echo e(number_format($property->other_charges, 2)); ?></td>
                        <td><strong><?php echo e(number_format($property->rent + $property->other_charges, 2)); ?></strong></td>
                        <td><?php echo e($property->description ?? 'N/A'); ?></td>
                        <td>
                            <a href="<?php echo e(route('properties.edit', $property->flat_id)); ?>" class="btn btn-sm btn-primary">✏️ Edit</a>
                            <!-- <form action="<?php echo e(route('properties.destroy', $property->flat_id)); ?>" method="POST" style="display:inline-block;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this property?')">🗑️ Delete</button>
                            </form> -->
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="9" class="text-center text-muted">No properties found.</td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\myhome\resources\views/properties/index.blade.php ENDPATH**/ ?>