

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background: #e1e1e2;height:120px;padding-top: 16px;">
                        <h2>
                            Profile
                        </h2>
                    </div>

                    <div class="panel-body">
                        <table class="table">
                            
                            <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td><?php echo e($user->name); ?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><?php echo e($user->email); ?></td>
                                </tr>
                                <tr>
                                    <td>Register At</td>
                                    <td><?php echo e($user->created_at->format('d-m-Y H:i')); ?></td>
                                </tr>
                                <tr>
                                    <td>Is Admin</td>
                                    <td><?php echo e($user->is_admin ? 'Yes' : 'No'); ?></td>
                                </tr>
                               
                                <tr>
                                    <td>Number of Posts</td>
                                    <td><?php echo e($user->posts_count); ?></td>
                                </tr>
                                <tr>
                                    <td>Number of Comments</td>
                                    <td><?php echo e($user->comments_count); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sample blog\thusharasblog\resources\views/admin/profile/index.blade.php ENDPATH**/ ?>