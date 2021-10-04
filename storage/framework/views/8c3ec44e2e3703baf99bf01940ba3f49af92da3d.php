

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default" style="margin-bottom: 0px;">
                <div class="panel-heading"style="background: #d3e0e9;height:120px;padding-top: 16px;">
    
                <lable  style="font-size: 31px;font-weight: bold;color: #151718;">
                        <?php echo e($post->title); ?> - 
                </lable>
                        </br><small>by <?php echo e($post->user->name); ?></small>
                        
                        <br>
                        <span class="pull-right" style="color:#000;">
                            <?php echo e($post->created_at->toDayDateTimeString()); ?>

                        </span>
                    </div>

                    <div class="panel-body">
                        <p><?php echo e($post->body); ?></p>
                        <hr class="mt-3 mb-3"/>
                        <p>
                            Category: <span class="label label-success"><?php echo e($post->category->name); ?></span> <br>
                            Tags:
                            <?php $__empty_1 = true; $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <span class="label label-default"><?php echo e($tag->name); ?></span>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <span class="label label-danger">No tag found.</span>
                            <?php endif; ?>
                            <a class="pull-right btn btn-primary btn-lg" style="font-size: 18px;font-weight: bold;color: #151718;text-decoration: none;" href="<?php echo e(url("/")); ?>" >Back</a>
                        </p>
                    </div>
                </div>

                <?php echo $__env->renderWhen(Auth::user(), 'frontend._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>

                <?php echo $__env->make('frontend._comments', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </div>

        </dev>
    </dev>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sample blog\thusharasblog\resources\views/frontend/post.blade.php ENDPATH**/ ?>