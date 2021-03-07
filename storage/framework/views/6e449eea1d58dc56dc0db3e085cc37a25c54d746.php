<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

            <h1>

    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<p>
<?php echo e($product->name); ?> :<?php echo e($product->description); ?>

<img src="/storage/<?php echo e($product->image); ?>" alt="product image" class="w-100">

</p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </h1>



            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AlinaLama\Desktop\Laravel-6-Multi-Auth-master\resources\views/home.blade.php ENDPATH**/ ?>