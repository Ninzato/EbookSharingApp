

<?php $__env->startSection('title', 'List of Books'); ?>

<?php $__env->startSection('content'); ?>
    <div class="heading">
        <h1>Here are the books that we have</h1>
    </div>
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>ISBN</th>
                    <th>Category</th>
                    <th>Pages</th>
                </tr>
            </thead>
            <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <?php $__currentLoopData = $book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td><?php echo e($data); ?></td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('subview.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ebookSharingApp\resources\views/subview/list.blade.php ENDPATH**/ ?>