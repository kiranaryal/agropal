<?php $__env->startSection('content'); ?>

<div>
<?php if(isset($products)): ?>
<p>the search results for your query</p><?php echo e($q); ?>

</b>are </b>
product details 
<table>
<thead>
<tr>

<th>name</th>
<th>description</th>

</tr></thead>



<tbody>

<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td>

<img src="/storage/<?php echo e($product->image); ?>" class="w-100 rounded-circle" style="max-width:40p">
<a href="l"><?php echo e($product->name); ?></a>
dd($product)
</td>

<td>
<?php echo e($product->description); ?></td>

</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>





</tbody>











</table>



<?php else: ?>
sorry no products found
<?php endif; ?>


</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AlinaLama\Desktop\Laravel-6-Multi-Auth-master\resources\views/search.blade.php ENDPATH**/ ?>