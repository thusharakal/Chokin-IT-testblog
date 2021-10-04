@forelse ($post->comments as $comment)
    <div class="panel panel-default" style="margin-bottom: 0px;">
        <div class="panel-heading" style="background:#e1e1e2;font-weight: bold;color: #151718;">
            {{ $comment->user->name }} says...

            <span class="pull-right">{{ $comment->created_at->diffForHumans() }}</span>
        </div>

        <div class="panel-body">
            <p>{{ $comment->body }}</p>
        </div>
    </div>
@empty
    <div class="panel panel-default">
        <div class="panel-heading"  style="background:#e1e1e2;">Not Found!!</div>

        <div class="panel-body">
            <p>Sorry! No comment found for this post.</p>
        </div>
    </div>
@endforelse
