
<title>Add Properties</title>
<?php $__env->startSection('content'); ?>

<div class="container mt-5">
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-header bg-primary text-white rounded-top-4">
            <h4 class="mb-0">📝 Add New Property</h4>
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('properties.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="flat_id" class="form-label">🏢 Flat ID <span class="text-danger">*</span></label>
                        <input type="text" name="flat_id" id="flat_id" class="form-control" required placeholder="e.g., F101-A">
                    </div>
                    <div class="col-md-6">
                        <label for="tenant_name" class="form-label">👤 Tenant Name <span class="text-danger">*</span></label>
                        <input type="text" name="tenant_name" id="tenant_name" class="form-control" required placeholder="e.g., John Doe">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="tenant_phone" class="form-label">📞 Tenant Phone <span class="text-danger">*</span></label>
                        <input type="text" name="tenant_phone" id="tenant_phone" class="form-control" required placeholder="e.g., 017XXXXXXXX">
                    </div>
                    <div class="col-md-3">
                        <label for="rent" class="form-label">💸 Rent (Tk) <span class="text-danger">*</span></label>
                        <input type="number" name="rent" id="rent" class="form-control" required>
                    </div>
                    <div class="col-md-3">
                        <label for="other_charges" class="form-label">🧾 Other Charges (Tk)</label>
                        <input type="number" name="other_charges" id="other_charges" class="form-control" value="0">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">🗒️ Description (optional)</label>
                    <textarea name="description" id="description" class="form-control" rows="3" placeholder="Notes about tenant or flat..."></textarea>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="<?php echo e(route('properties.index')); ?>" class="btn btn-secondary">🔙 Back</a>
                    <button type="submit" class="btn btn-success">✅ Add Property</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\myhome\resources\views/properties/create.blade.php ENDPATH**/ ?>