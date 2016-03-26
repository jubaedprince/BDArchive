@extends('layouts.app')

@section('breadcrumb')
    <li><a href="#">Home</a></li>
    <li><a href="/item">Item</a></li>
    <li class="active">Create</li>
@endsection

@section('page_content')
    {{--Image Item Form--}}
    <div class="row">
        <div class="col-md-12">

            <form class="form-horizontal">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-camera"></i><strong> Collection</strong></h3>
                        <ul class="panel-controls">
                            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                            <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <p>Create collection here. You will be able to add items to collection later.</p>
                    </div>
                    <div class="panel-body">

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Title</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                    <input type="text" class="form-control"/>
                                </div>
                                <span class="help-block">eg: War of 1971</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Short Description</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                    <input type="text" class="form-control"/>
                                </div>
                                <span class="help-block">This is a short description</span>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Long Description</label>
                            <div class="col-md-6 col-xs-12">
                                <textarea class="form-control" rows="5"></textarea>
                                <span class="help-block">This is a long description</span>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Date</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                    <input type="text" class="form-control datepicker" value="2014-11-01">
                                </div>
                                <span class="help-block">When the photo was taken.</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Publish On</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                    <input type="text" class="form-control datepicker" value="2014-11-01">
                                </div>
                                <span class="help-block">When do you want to publish this photo?</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Tags</label>
                            <div class="col-md-6 col-xs-12">
                                <input type="text" class="tagsinput" value="First,Second,Third"/>
                                <span class="help-block">Choose tags that relates to your image</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Photo</label>
                            <div class="col-md-6 col-xs-12">
                                <input type="file" class="fileinput btn-primary" name="filename" id="filename" title="Browse file"/>
                                <span class="help-block">Input type file</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Featured</label>
                            <div class="col-md-6 col-xs-12">
                                <label class="check"><input type="checkbox" class="icheckbox" checked="checked"/> This is featured image</label>
                                <span class="help-block">Do you want to feature this photo?</span>
                            </div>
                        </div>

                    </div>
                    <div class="panel-footer">
                        <button class="btn btn-default">Clear Form</button>
                        <button class="btn btn-primary pull-right">Submit</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
    {{--End Image Item Form--}}
@endsection

@section('this_page_js')
    <script type='text/javascript' src='/js/plugins/icheck/icheck.min.js'></script>
    <script type="text/javascript" src="/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

    <script type="text/javascript" src="/js/plugins/bootstrap/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="/js/plugins/bootstrap/bootstrap-file-input.js"></script>
    <script type="text/javascript" src="/js/plugins/bootstrap/bootstrap-select.js"></script>
    <script type="text/javascript" src="/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
@endsection