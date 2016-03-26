@extends('layouts.app')

@section('breadcrumb')
    <li><a href="#">Home</a></li>
    <li class="active">Item</li>
@endsection

@section('page_content')
    <div class="row">
        <div class="col-md-12">

            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-folder"></i><strong> Collection</strong></h3>
                </div>
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Created At</th>
                            <th>Featured</th>
                            <th>Publish At</th>
                            <th>Short Description</th>
                            <th>No. of Items</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1971 War</td>
                            <td>2011/04/25</td>
                            <td>No</td>
                            <td>2011/04/25</td>
                            <td>This is  a very short description</td>
                            <td>29</td>
                            <td>
                                <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#viewModal" ><i class="fa fa-eye"></i></button>
                                <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit"></i></button>
                                <a href="/collection/dashboard" class="btn btn-default btn-sm"><i class="fa fa-dashboard"></i></a>

                            </td>
                        </tr>

                        <tr>
                            <td>1971 War</td>
                            <td>2011/04/25</td>
                            <td>No</td>
                            <td>2011/04/25</td>
                            <td>This is  a very short description</td>
                            <td>29</td>
                            <td>
                                <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#viewModal" ><i class="fa fa-eye"></i></button>
                                <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit"></i></button>
                                <a href="/collection/dashboard" class="btn btn-default btn-sm"><i class="fa fa-dashboard"></i></a>

                            </td>
                        </tr>

                        <tr>
                            <td>1971 War</td>
                            <td>2011/04/25</td>
                            <td>No</td>
                            <td>2011/04/25</td>
                            <td>This is  a very short description</td>
                            <td>29</td>
                            <td>
                                <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#viewModal" ><i class="fa fa-eye"></i></button>
                                <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit"></i></button>
                                <a href="/collection/dashboard" class="btn btn-default btn-sm"><i class="fa fa-dashboard"></i></a>

                            </td>
                        </tr>

                        <tr>
                            <td>1971 War</td>
                            <td>2011/04/25</td>
                            <td>No</td>
                            <td>2011/04/25</td>
                            <td>This is  a very short description</td>
                            <td>29</td>
                            <td>
                                <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#viewModal" ><i class="fa fa-eye"></i></button>
                                <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit"></i></button>
                                <a href="/collection/dashboard" class="btn btn-default btn-sm"><i class="fa fa-dashboard"></i></a>

                            </td>
                        </tr>

                        <tr>
                            <td>1971 War</td>
                            <td>2011/04/25</td>
                            <td>No</td>
                            <td>2011/04/25</td>
                            <td>This is  a very short description</td>
                            <td>29</td>
                            <td>
                                <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#viewModal" ><i class="fa fa-eye"></i></button>
                                <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit"></i></button>
                                <a href="/collection/dashboard" class="btn btn-default btn-sm"><i class="fa fa-dashboard"></i></a>

                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END DEFAULT DATATABLE -->
        </div>
    </div>


    <!-- View Modal -->
    <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">View Collection</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- CONTACT ITEM -->
                            <div class="panel panel-default">
                                <div class="panel-body profile">
                                    <div class="profile-image">
                                        <img src="/assets/images/gallery/nature-2.jpg" alt="Nature"/>
                                    </div>
                                    <div class="profile-data">
                                        <div class="profile-data-name">Genocide of 1971</div>
                                        <div class="profile-data-title">This is a short description</div>
                                    </div>

                                </div>
                                <div class="panel-body">
                                    <div class="contact-info">
                                        <p><small>Long Description</small><br/>This is a huge description. This is a huge description. This is a huge description. This is a huge description. This is a huge description. This is a huge description. This is a huge description. This is a huge description. This is a huge description.</p>
                                        <p><small>Date</small><br/>21/2/2013</p>
                                        <p><small>Publish On</small><br/>21/2/2013</p>
                                        <p><small>Tags</small><br/>Liberation, 1971, Bangladesh</p>
                                        <p><small>Featured</small><br/>Yes</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    {{--View Modal End--}}

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Collection</h4>
                </div>
                <div class="modal-body modal-lg">
                    <div class="row">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Title</label>
                                <div class="col-md-8 col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        <input type="text" class="form-control" value="1971 Liberation War"/>
                                    </div>
                                    <span class="help-block">eg: War of 1971</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Short Description</label>
                                <div class="col-md-8 col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        <input type="text" class="form-control" value="This is a short description"/>
                                    </div>
                                    <span class="help-block">This is a short description</span>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Long Description</label>
                                <div class="col-md-8 col-xs-12">
                                    <textarea class="form-control" rows="5">This is old long description. This is old long description. This is old long description. This is old long description. This is old long description. This is old long description.</textarea>
                                    <span class="help-block">This is a long description</span>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Date</label>
                                <div class="col-md-8 col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                        <input type="text" class="form-control datepicker" value="2014-11-01">
                                    </div>
                                    <span class="help-block">When the photo was taken.</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Publish On</label>
                                <div class="col-md-8 col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                        <input type="text" class="form-control datepicker" value="2014-11-01">
                                    </div>
                                    <span class="help-block">When do you want to publish this photo?</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Tags</label>
                                <div class="col-md-8 col-xs-12">
                                    <input type="text" class="tagsinput" value="First,Second,Third"/>
                                    <span class="help-block">Choose tags that relates to your image</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Photo</label>
                                <div class="col-md-8 col-xs-12">
                                    <input type="file" class="fileinput btn-primary" name="filename" id="filename" title="Browse file"/>
                                    <span class="help-block">Input type file</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Featured</label>
                                <div class="col-md-8 col-xs-12">
                                    <label class="check"><input type="checkbox" class="icheckbox" checked="checked"/> This is featured image</label>
                                    <span class="help-block">Do you want to feature this photo?</span>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger pull-left"><span class="fa fa-trash-o"></span>Delete</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    {{--Edit Modal End--}}

@endsection



@section('this_page_js')
    <script type='text/javascript' src='/js/plugins/icheck/icheck.min.js'></script>
    <script type="text/javascript" src="/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

    <script type="text/javascript" src="/js/plugins/bootstrap/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="/js/plugins/bootstrap/bootstrap-file-input.js"></script>
    <script type="text/javascript" src="/js/plugins/bootstrap/bootstrap-select.js"></script>
    <script type="text/javascript" src="/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>

    <script type="text/javascript" src="/js/plugins/datatables/jquery.dataTables.min.js"></script>
@endsection