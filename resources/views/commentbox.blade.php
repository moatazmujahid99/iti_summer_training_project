<div class="panel panel-default">
        <div class="panel-heading text-center">Comments</div>

        <div class="panel-body">
            @include('partial.alerts')
            <form action="{{route('comment',$post->id)}}" method="post"><!--//take the book id and send it to the comment route-->
                @csrf
                <div class="form-group">
                    <textarea class="form-control" name="comment" placeholder="Enter Your Comment Here">
                    </textarea>
                </div>
                <div class="form-group">
                  <button type="submit" name="addcomment" class="btn btn-primary">
                      Leave a comment here!
                </button>
                </div>
            </form>
            
            
            
            <!--this section to display existed comments bellow the post view page-->
            <hr>
            @if (count($post->comments) > 0)
                @foreach($post->comments as $comment)
                    <div class="row">
                        <h3>{{$comment->user->name}}</h3> <span class="text-muted">{{$comment->created_at}}</span>
                        <p>{{$comment->comment}}</p>
                    </div>
                    <!-- /.row -->
                @endforeach
            @endif
        </div>
    </div>
