<div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
    <?php echo Form::label('name', 'Tag Name', ['class' => 'col-md-2 control-label']); ?>


    <div class="col-md-8">
        <?php echo Form::text('name', null, ['class' => 'form-control', 'required', 'autofocus']); ?>


        <span class="help-block">
            <strong><?php echo e($errors->first('name')); ?></strong>
        </span>
    </div>
</div>
<?php /**PATH C:\thusharasblog\resources\views/admin/tags/_form.blade.php ENDPATH**/ ?>