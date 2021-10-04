

<?php $__env->startSection('content'); ?>
    <div class="container">

        <?php echo $__env->make('frontend._search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="row">

            <div class="col-md-12">
                <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="panel panel-default">
                    <a  style="font-size: 18px;font-weight: bold;color: #151718;text-decoration: none;" href="<?php echo e(url("/posts/{$post->id}")); ?>" >
                        <div class="panel-heading"style="background: #d3e0e9;height:120px;padding-top: 16px;">
                            <lable  style="font-size: 31px;font-weight: bold;color: #151718;" href="<?php echo e(url("/posts/{$post->id}")); ?>" ><?php echo e($post->title); ?></lable>    
                         <br>
                           <small>by <?php echo e($post->user->name); ?></small>
                         <br>

                            <span class="" style="font-size: 12px;">
                                <?php echo e($post->created_at->toDayDateTimeString()); ?>

                            </span>
                        </div>
                    </a>
                        <div class="panel-body">
                            <p><?php echo e(str_limit($post->body, 200)); ?></p>
                            <hr class="mt-3 mb-3"/>
                            <p>
                                Tags:
                                <?php $__empty_2 = true; $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                                    <span class="label label-default"><?php echo e($tag->name); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                                    <span class="label label-danger">No tag found.</span>
                                <?php endif; ?>
                            </p>
                            <p style="margin-top: 26px;">
                                <span class="badge badge-primary" style="font-weight: bold;color: #fff;"><?php echo e($post->category->name); ?>,</span>
                                <span class="">Comments <span class="badge"><?php echo e($post->comments_count); ?></span></span>,
                                <a  style="font-size: 18px;font-weight: bold;color: #151718;text-decoration: none;" href="<?php echo e(url("/posts/{$post->id}")); ?>" >Read More </a>
                                
                            </p>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">Not Found!!</div>

                        <div class="panel-body">
                            <p>Sorry! No post found.</p>
                        </div>
                    </div>
                <?php endif; ?>

                <div align="center">
                    <?php echo $posts->appends(['search' => request()->get('search')])->links(); ?>

                </div>

            </div>

        </dev>
    </dev>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\thusharasblog\resources\views/frontend/index.blade.php ENDPATH**/ ?>