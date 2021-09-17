<div class="media inner-all no-margin">
    <div class="pull-left">
        <!--************Commented Friend Profile photo************-->
        <img src="{{asset('images/users/' . $comment->user->user_img)}}" alt="..." class="img-circle img-post2">
    </div><!-- /.pull-left -->
    <div class="media-body">
        <!--************Commented Friend Name************-->
        <a href="/users/{{$comment->user_id}}/profile" class="h5">{{ $comment->user->first_name . ' ' . $comment->user->last_name }}</a> <br>
        <!--************Comment Body************-->
        <span class="block text-muted">{{ $comment->comment_text }}</span> <br>
        <!--************Comment Date************-->
        <small class="text-xs text-muted">Posted on <span class="text-danger">{{ $comment->created_at->diffForHumans() }}</span></small>
    </div><!-- /.media-body -->
</div><!-- /.media -->
