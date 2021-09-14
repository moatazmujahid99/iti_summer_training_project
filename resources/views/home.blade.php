@extends('layouts.home_header')
@section('post')
<div class="col-md-6">
            <div class="panel panel-success rounded shadow">
                <div class="panel-heading no-border" style=" background-color:rgb(66 103 178) ">
                    <div class="pull-left half">
                        <div class="media">
                            <div class="media-object pull-left">
 <!--************Posted Friend Profile photo************-->
                                <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="..." class="img-circle img-post">
                            </div>
                            <div class="media-body" style="color: aliceblue">
 <!--************Posted Friend name************-->
                                <a href="#" class="media-heading block mb-0 h4 text-white">John Doe</a>
 <!--************Posted Date************-->
                                <span class="text-white h6">on 8th June, 2014</span>
                            </div>
                        </div>
                    </div><!-- /.pull-left -->
                    <div class="pull-right" style="color: aliceblue">
                        <a href="" class="text-white h4"><i class="fa fa-heart" style="color:deeppink"></i> 15.5K</a>
                    </div><!-- /.pull-right -->
                    <div class="clearfix"></div>
                </div><!-- /.panel-heading -->
                <div class="panel-body no-padding">
 <!--************Post Body************-->
                    <p>hello world</p>
 <!--************Posted photo if there is one************-->
                    <img  src="https://via.placeholder.com/340x210/" alt="..." class="img-responsive full-width">
                    <!-- /.inner-all -->
                    <div class="line no-margin"></div><!-- /.line -->
                    <div class="media inner-all no-margin">
                        <div class="pull-left">
 <!--************Commented Friend Profile photo************-->
                            <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="..." class="img-post2">
                        </div><!-- /.pull-left -->
                        <div class="media-body">
 <!--************Commented Friend Name************-->
                            <a href="#" class="h4">John Doe</a>
 <!--************Comment Body************-->
                            <small class="block text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </small>
 <!--************Comment Date************-->
                            <em class="text-xs text-muted">Posted on <span class="text-danger">Dec 08, 2014</span></em>
                        </div><!-- /.media-body -->
                    </div><!-- /.media -->
                    <div class="line no-margin"></div><!-- /.line -->
                </div><!-- /.panel-body -->
                <div class="panel-footer">
 <!--************Add Comment ************-->
                    <form action="#" class="form-horizontal">
                        <div class="form-group has-feedback no-margin">
                            <input class="form-control" type="text" placeholder="Your comment here...">
                            <button type="submit" class="btn btn-theme fa fa-search form-control-feedback"></button>
                        </div>
                    </form>
                </div><!-- /.panel-footer -->
            </div><!-- /.panel -->
   </div>
@stop


@section('create_post')
<div class="panel rounded shadow">
        <form action="...">
            <textarea class="form-control input-lg no-border" rows="2" placeholder="What are you doing?..."></textarea>
  <!--***view img in post*****-->
            <img src="" style="max-width: 150px; max-height: 160px;">
        </form>
        <div class="panel-footer">
            <button class="btn btn-success pull-right mt-5" style="background-color: rgb(66 103 178)">POST</button>
            <ul class="nav nav-pills">
                <div class="image-upload">
                <label for="file-input">
                <li><i class="fa fa-camera"></i></li>
                </label>
  <!--***Add img in post*****-->
                <input id="file-input" type="file"/>
                </div>
            </ul><!-- /.nav nav-pills -->
        </div><!-- /.panel-footer -->
    </div><!-- /.panel -->
@stop