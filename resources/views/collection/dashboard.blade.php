@extends('layouts.app')

@section('breadcrumb')
    <li><a href="#">Home</a></li>
    <li class="active">Item</li>
@endsection

@section('page_content')
    <div class="row">
        <div class="col-md-12">
            <h1>Collection Dashboard</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong> Information</strong></h3>
                </div>
                <div class="panel-body">
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
            </div>
        </div>

        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong> Add Item</strong></h3>
                        </div>
                        <div class="panel-body">

                            <div class="block">
                                <h4>Select Item</h4>
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <select class="form-control select" data-live-search="true">
                                                <option>1952 Language Movement | Photo</option>
                                                <option>British Rule | Video</option>
                                                <option>Dhaka Life | Document</option>
                                                <option>Shahbag Movement | Audio</option>
                                                <option>Agriculture in Bangladesh | Photo</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-default">Clear Form</button>
                            <button class="btn btn-default pull-right">Add</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong> Existing Items</strong></h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <h3></h3>
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
                                        <a href="#" class="btn btn-default btn-sm"><i class="fa fa-minus"> Remove</i></a>

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
                                        <a href="#" class="btn btn-default btn-sm"><i class="fa fa-minus"> Remove</i></a>

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
                                        <a href="#" class="btn btn-default btn-sm"><i class="fa fa-minus"> Remove</i></a>

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
                                        <a href="#" class="btn btn-default btn-sm"><i class="fa fa-minus"> Remove</i></a>

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
                                        <a href="#" class="btn btn-default btn-sm"><i class="fa fa-minus"> Remove</i></a>

                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>


@endsection



@section('this_page_js')
    <script type='text/javascript' src='/js/plugins/icheck/icheck.min.js'></script>
    <script type="text/javascript" src="/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

    <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
    <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>


    <script type="text/javascript" src="/js/plugins/bootstrap/bootstrap-select.js"></script>

    <script type="text/javascript" src="/js/plugins/datatables/jquery.dataTables.min.js"></script>
@endsection