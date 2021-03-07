<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    You are Admin.
                
                </div>
<div>
<form action="/createProduct" enctype="multipart/form-data"
 method="POST" >
<?php echo csrf_field(); ?>

<div>name:
<input type="text" name="name"></div>

<div>description:
<input type="text" name="description"></div>


<div>quantity:
<input type="number" name="quantity"></div>


<div>price:
<input type="number" name="price"></div>
<input type="file" name="image">


<button>submit</button>



</form></div>
<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<p>
<?php echo e($product->name); ?> :<?php echo e($product->description); ?>


<form action="/deleteProduct" method="POST">
<?php echo csrf_field(); ?>



<input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">

<button>delete</button>
</form>


<form action="/editProduct" method="POST">
<?php echo csrf_field(); ?>



<input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">

<button>update</button>
</form>

</p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>































            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kiran\OneDrive\Desktop\Laravel-6-Multi-Auth-master\resources\views/adminHome.blade.php ENDPATH**/ ?>