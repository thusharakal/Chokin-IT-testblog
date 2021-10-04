@extends('layouts.app')

@section('content')
    <div class="container">

        @include('frontend._search')

        <div class="row">

            <div class="col-md-12">
                @forelse ($posts as $post)
                    <div class="panel panel-default">
                    <a  style="font-size: 18px;font-weight: bold;color: #151718;text-decoration: none;" href="{{ url("/posts/{$post->id}") }}" >
                        <div class="panel-heading"style="background: #d3e0e9;height:120px;padding-top: 16px;">
                            <lable  style="font-size: 31px;font-weight: bold;color: #151718;" href="{{ url("/posts/{$post->id}") }}" >{{ $post->title }}</lable>    
                         <br>
                           <small>by {{ $post->user->name }}</small>
                         <br>

                            <span class="" style="font-size: 12px;">
                                {{ $post->created_at->toDayDateTimeString() }}
                            </span>
                        </div>
                    </a>
                        <div class="panel-body">
                            <p>{{ str_limit($post->body, 200) }}</p>
                            <hr class="mt-3 mb-3"/>
                            <p>
                                Tags:
                                @forelse ($post->tags as $tag)
                                    <span class="label label-default">{{ $tag->name }}</span>
                                @empty
                                    <span class="label label-danger">No tag found.</span>
                                @endforelse
                            </p>
                            <p style="margin-top: 26px;">
                                <span class="badge badge-primary" style="font-weight: bold;color: #fff;">{{ $post->category->name }},</span>
                                <span class="">Comments <span class="badge">{{ $post->comments_count }}</span></span>,
                                <a  style="font-size: 18px;font-weight: bold;color: #151718;text-decoration: none;" href="{{ url("/posts/{$post->id}") }}" >Read More </a>
                                
                            </p>
                        </div>
                    </div>
                @empty
                    <div class="panel panel-default">
                        <div class="panel-heading">Not Found!!</div>

                        <div class="panel-body">
                            <p>Sorry! No post found.</p>
                        </div>
                    </div>
                @endforelse

                <div align="center">
                    {!! $posts->appends(['search' => request()->get('search')])->links() !!}
                </div>

            </div>

        </dev>
    </dev>
@endsection
