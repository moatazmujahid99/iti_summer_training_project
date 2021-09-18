<div class="panel rounded shadow">
    <form action="/posts" method="POST" enctype="multipart/form-data">
        @csrf
        <textarea name="description" class="form-control input-lg no-border" rows="2"
            placeholder="What are you doing?...">{{ old('description') }}</textarea>
        <!--***view img in post*****-->
        <img src="" style="margin: auto; max-width: 150px; max-height: 160px;" id="show_image">

        <p style="font-weight: bold" class="form-text text-danger">{!! $errors->first('post_img') !!}</p>
        <p style="font-weight: bold" class="form-text text-danger">{!! $errors->first('description') !!}</p>
        <div class="panel-footer">
            <input type="submit" value="POST" class="btn btn-success pull-right mt-5"
                style="background-color: rgb(66 103 178)">
            <ul class="nav nav-pills">
                <div class="image-upload">
                    <label for="file-input">
                        <li><i class="fa fa-camera"></i></li>
                    </label>
                    <!--***Add img in post*****-->
                    <input id="file-input" type="file" name="post_img" />
                </div>
            </ul><!-- /.nav nav-pills -->

        </div><!-- /.panel-footer -->
    </form>
</div><!-- /.panel -->
