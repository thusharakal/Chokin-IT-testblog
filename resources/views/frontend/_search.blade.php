<div class="row form-search">
    {!! Form::open(['method' => 'GET', 'role' => 'form']) !!}
            <div class="col-md-10">
                {!! Form::text('search', request()->get('search'), ['class' => 'form-control','style'=>'height: 47px;', 'placeholder' => 'Search...']) !!}
            </div>
            <div class="col-md-2">
                {!! Form::submit('Search', ['class' => 'btn btn-primary btn-lg','style'=>'width: 160px;']) !!}
            </div>
    {!! Form::close() !!}
</div>
