<?php $__env->startSection('content'); ?>
    <div class="container-fluid app-body app-home">
            <h1> Recent Posts Sent To Buffer </h1>
            <example></example>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('foot_script'); ?>

@end

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>