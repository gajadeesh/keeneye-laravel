<?php $__env->startSection('content'); ?>
 <table class="table table-bordered">
    <tr>
        <th>Name</th>
        <th>Description</th>
    </tr>
    <?php $__currentLoopData = $headhunter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $headhunters): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($headhunters->name); ?></td>
        <!-- <td><?php echo e($headhunters->description); ?></td> -->
        <td></td>
        <td></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>