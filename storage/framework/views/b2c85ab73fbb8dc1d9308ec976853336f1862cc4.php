<div class="row form-search">
    <?php echo Form::open(['method' => 'GET', 'role' => 'form']); ?>

            <div class="col-md-10">
                <?php echo Form::text('search', request()->get('search'), ['class' => 'form-control','style'=>'height: 47px;', 'placeholder' => 'Search...']); ?>

            </div>
            <div class="col-md-2">
                <?php echo Form::submit('Search', ['class' => 'btn btn-primary btn-lg','style'=>'width: 160px;']); ?>

            </div>
    <?php echo Form::close(); ?>

</div>
<?php /**PATH C:\thusharasblog\resources\views/frontend/_search.blade.php ENDPATH**/ ?>