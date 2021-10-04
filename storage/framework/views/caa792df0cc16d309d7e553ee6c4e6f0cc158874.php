<?php $__empty_1 = true; $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="panel panel-default" style="margin-bottom: 0px;">
        <div class="panel-heading" style="background:#e1e1e2;font-weight: bold;color: #151718;">
            <?php echo e($comment->user->name); ?> says...

            <span class="pull-right"><?php echo e($comment->created_at->diffForHumans()); ?></span>
        </div>

        <div class="panel-body">
            <p><?php echo e($comment->body); ?></p>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <div class="panel panel-default">
        <div class="panel-heading"  style="background:#e1e1e2;">Not Found!!</div>

        <div class="panel-body">
            <p>Sorry! No comment found for this post.</p>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH C:\sample blog\thusharasblog\resources\views/frontend/_comments.blade.php ENDPATH**/ ?>