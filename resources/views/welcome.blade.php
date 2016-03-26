@extends('layouts.app')

@section('breadcrumb')
    <li><a href="#">Home</a></li>
    <li class="active">Dashboard</li>
@endsection

@section('page_content')
    <div class="row">
        <div class="col-md-8">
            <h1>Dashboard</h1>
            <p>Version 0.0.1</p>
            <p>Features: Admin panel views only.</p>
            <strong>Developer: Gulshan Jubaed Prince</strong>
            <p><a href="http://www.techynaf.com" target="_blank">www.techynaf.com</a></p>
        </div>
        <div class="col-md-4">
            {{--<h2>Yes it works!</h2>--}}
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">

        </div>
    </div>
@endsection

@section('this_page_js')

    <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
    <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    <script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>

    <script type="text/javascript" src="js/plugins/morris/raphael-min.js"></script>
    <script type="text/javascript" src="js/plugins/morris/morris.min.js"></script>
    <script type="text/javascript" src="js/plugins/rickshaw/d3.v3.js"></script>
    <script type="text/javascript" src="js/plugins/rickshaw/rickshaw.min.js"></script>
    <script type='text/javascript' src='js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
    <script type='text/javascript' src='js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>
    <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
    <script type="text/javascript" src="js/plugins/owl/owl.carousel.min.js"></script>

    <script type="text/javascript" src="js/plugins/moment.min.js"></script>
    <script type="text/javascript" src="js/plugins/daterangepicker/daterangepicker.js"></script>

@endsection
