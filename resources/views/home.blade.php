@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-3">
                <div class="panel panel-default">
                    

                    <div class="panel-body">
                    <h4>Total Number of Posts-{{ $posts }}</h4><br>
                    </div>
                    <div class="panel-body">
                    <h4>Total Number of Comments-{{ $comments }}</h4><br>
                    </div>
                    <div class="panel-body">
                    <h4>Total Number of Tags-{{ $tags }}</h4><br>
                    </div>
                    <div class="panel-body">
                    <h4>Total Number of Categories-{{ $categories }}</h4><br>
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
@endsection
