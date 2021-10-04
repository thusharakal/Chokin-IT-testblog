

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">

            <div class="col-md-3">
                <div class="panel panel-default">
                    

                    <div class="panel-body">
                    <h4>Total Number of Posts-<?php echo e($posts); ?></h4><br>
                    </div>
                    <div class="panel-body">
                    <h4>Total Number of Comments-<?php echo e($comments); ?></h4><br>
                    </div>
                    <div class="panel-body">
                    <h4>Total Number of Tags-<?php echo e($tags); ?></h4><br>
                    </div>
                    <div class="panel-body">
                    <h4>Total Number of Categories-<?php echo e($categories); ?></h4><br>
                    </div>

                </div>
            </div>

            <div class="col-md-3">
                <div class="panel panel-default">
                    
                </div>
            </div>

            <div class="col-md-3">
                <div class="panel panel-default">
                    
                </div>
            </div>

            <div class="col-md-3">
                <div class="panel panel-default">
                    
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sample blog\thusharasblog\resources\views/home.blade.php ENDPATH**/ ?>