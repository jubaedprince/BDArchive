@extends('layouts.app')

@section('breadcrumb')
    <li><a href="#">Home</a></li>
    <li><a href="/item">Item</a></li>
    <li class="active">Create</li>
@endsection

@section('page_content')

    {{--Document Item Form--}}
    <div class="row">
        <div class="col-md-12">
            <form class="form-horizontal">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-file-text-o"></i><strong> Document</strong></h3>
                        <ul class="panel-controls">
                            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                            <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <p>Fill up the form below to upload a document.</p>
                    </div>
                    <div class="panel-body">

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Title</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                    <input type="text" class="form-control"/>
                                </div>
                                <span class="help-block">eg: Genocide at Dhaka University</span>
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
                            <label class="col-md-3 col-xs-12 control-label">Author(s)</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                    <input type="text" class="form-control"/>
                                </div>
                                <span class="help-block">Author(s) of the document</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">ISBN</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-barcode"></span></span>
                                    <input type="text" class="form-control"/>
                                </div>
                                <span class="help-block">ISBN Number of the document</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Publisher</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-home"></span></span>
                                    <input type="text" class="form-control"/>
                                </div>
                                <span class="help-block">Name of the publisher</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Source</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-eye"></span></span>
                                    <input type="text" class="form-control"/>
                                </div>
                                <span class="help-block">Source of the document</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Published</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                    <input type="text" class="form-control datepicker" value="2014-11-01">
                                </div>
                                <span class="help-block">When was this document published?</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Number of Pages</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-file-o"></span></span>
                                    <input type="text" class="form-control"/>
                                </div>
                                <span class="help-block">Page numbers</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Format</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-puzzle-piece"></span></span>
                                    <input type="text" class="form-control"/>
                                </div>
                                <span class="help-block">Format of the document</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Edition</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                    <input type="text" class="form-control"/>
                                </div>
                                <span class="help-block">Edition of the document</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Publish On</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                    <input type="text" class="form-control datepicker" value="2014-11-01">
                                </div>
                                <span class="help-block">When do you want to publish this document?</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Tags</label>
                            <div class="col-md-6 col-xs-12">
                                <input type="text" class="tagsinput" value="First,Second,Third"/>
                                <span class="help-block">Choose tags that relates to your document</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Preview Image</label>
                            <div class="col-md-6 col-xs-12">
                                <input type="file" class="fileinput btn-primary" name="filename" id="filename" title="Browse file"/>
                                <span class="help-block">Input type file</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Download Link</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-external-link"></span></span>
                                    <input type="text" class="form-control"/>
                                </div>
                                <span class="help-block">Please provide the download link of the documetn</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Featured</label>
                            <div class="col-md-6 col-xs-12">
                                <label class="check"><input type="checkbox" class="icheckbox" checked="checked"/> This is featured document</label>
                                <span class="help-block">Do you want to feature this document?</span>
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
    {{--End Document Item Form--}}
@endsection

@section('this_page_js')
    <script type='text/javascript' src='/js/plugins/icheck/icheck.min.js'></script>
    <script type="text/javascript" src="/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

    <script type="text/javascript" src="/js/plugins/bootstrap/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="/js/plugins/bootstrap/bootstrap-file-input.js"></script>
    <script type="text/javascript" src="/js/plugins/bootstrap/bootstrap-select.js"></script>
    <script type="text/javascript" src="/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
@endsection