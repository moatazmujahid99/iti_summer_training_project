<div class="col-md-12">
    <div class="panel panel-success rounded shadow">
        <div class="panel-heading no-border" style=" background-color:rgb(66 103 178) ">
            <div class="pull-left half">
                <div class="media">
                    <div class="media-object pull-left">
                        <!--************Posted Friend Profile photo************-->
                        <img src="{{ asset('images/users/' . $post->user->user_img) }}" alt="..."
                            class="img-circle img-post">
                    </div>
                </div>
            </div>

            @if (Auth::user()->id === $post->user_id)
                <div class="pull-right ">
                    <form action="/posts/{{ $post->id }}/edit" style="display: inline">
                        <input type="hidden" name="return" value="{{ Request::path() }}" />
                        <button type="submit" title="Edit Post" style="border: none ;background-color: rgb(66 103 178)">
                            <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true" style="color: white"></i>

                        </button>
                    </form>
                    &nbsp;&nbsp;&nbsp;
                    <form class="float-right " style="display: inline" action="/posts/{{ $post->id }}"
                        method="post">
                        @csrf
                        @method("DELETE")

                        <button title="Delete Post" style="border: none ;background-color: rgb(66 103 178)"
                            type="submit" value="Submit">
                            <i class="fa fa-trash fa-2x" aria-hidden="true" style="color: red"></i>
                        </button>
                    </form>

                </div>
            @endif

            <div class="media">
                <div class="media-object pull-left" style="color: aliceblue">
                    <!--************Posted Friend name************-->
                    <a href="/users/{{ $post->user_id }}/profile"
                        class="media-heading block mb-0 h4 text-white">{{ $post->user->first_name . ' ' . $post->user->last_name }}</a><br>
                    <!--************Posted Date************-->
                    <span
                        class="text-white h6">{{ $post->created_at == $post->updated_at ? '' : 'Edited ' }}{{ $post->updated_at->diffForHumans() }}</span>
                </div>
            </div>


            <div class="pull-right" style="color: aliceblue">
                <a href="" class="text-white h4"><i class="fa fa-heart" style="color:deeppink"></i> 15.5K</a>
            </div><!-- /.pull-right -->
            <div class="clearfix"></div>
        </div><!-- /.panel-heading -->
        <div class="panel-body no-padding">
            <!--************Post Body************-->
            <p>{{ $post->description }}</p>
            <!--************Posted photo if there is one************-->
            {{-- @php
                if (isset($post->post_img)) {
                    $image_path = asset('images/posts/' . $post->post_img);
                } else {
                    $image_path = 'https://via.placeholder.com/340x210/';
                }

            @endphp --}}

            @isset($post->post_img)
                <img src="{{ asset('images/posts/' . $post->post_img) }}" class="img-responsive full-width">
            @endisset



            <!-- /.inner-all -->
            <div class="line no-margin"></div><!-- /.line -->
            @foreach ($post->comments as $comment)
                @include('posts.comment', ['comment' => $comment])
            @endforeach
            <div class="line no-margin"></div><!-- /.line -->
        </div><!-- /.panel-body -->
        <!--************Add Comment ************-->
        @include('posts.create_comment', ['post_id' => $post->id])
    </div><!-- /.panel -->
</div>
