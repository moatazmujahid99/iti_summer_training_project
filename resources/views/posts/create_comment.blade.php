<div class="panel-footer">

    <form action="/posts/{{ $post_id }}/comments" method="POST" class="form-horizontal">
        @csrf
        <div class="form-group has-feedback no-margin">
            <input class="form-control" type="text" name="comment_text" placeholder="Your comment here..."
                style="display: inline-block; width: 80%;">
            <input type="submit" value="Add" class="btn btn-primary" style="display: inline-block; width:15%">
        </div>
    </form>
</div><!-- /.panel-footer -->
