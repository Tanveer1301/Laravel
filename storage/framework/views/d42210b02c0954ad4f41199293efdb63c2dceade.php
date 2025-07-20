

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <div class="card shadow-sm border-0 rounded-4">
        <div class="card-header d-flex justify-content-between align-items-center bg-warning text-white rounded-top-4">
            <h4 class="mb-0">Edit Property - <?php echo e($property->flat_id); ?></h4>
            
            <!-- Delete Form -->
            <form action="<?php echo e(route('properties.destroy', $property->flat_id)); ?>" method="POST" onsubmit="return confirm('Are you sure you want to delete this property?')">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button class="btn btn-sm btn-danger">🗑️ Delete</button>
            </form>
        </div>

        <div class="card-body">
            <form action="<?php echo e(route('properties.update', $property->flat_id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="tenant_name" class="form-label">Tenant Name</label>
                        <input type="text" name="tenant_name" class="form-control" value="<?php echo e($property->tenant_name); ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="tenant_phone" class="form-label">Tenant Phone</label>
                        <input type="text" name="tenant_phone" maxlength="11" class="form-control" value="<?php echo e($property->tenant_phone); ?>" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="rent" class="form-label">Rent</label>
                        <input type="number" name="rent" class="form-control" value="<?php echo e($property->rent); ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="other_charges" class="form-label">Other Charges</label>
                        <input type="number" name="other_charges" class="form-control" value="<?php echo e($property->other_charges); ?>">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description (optional)</label>
                    <textarea name="description" class="form-control" rows="3"><?php echo e($property->description); ?></textarea>
                </div>

                <div class="d-flex justify-content-end gap-2">
                    <a href="<?php echo e(route('properties.index')); ?>" class="btn btn-secondary">🔙 Cancel</a>
                    <button type="submit" class="btn btn-success">✅ Update Property</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\myhome\resources\views/properties/edit.blade.php ENDPATH**/ ?>