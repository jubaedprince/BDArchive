<!-- START PAGE SIDEBAR -->
<div class="page-sidebar">
    <!-- START X-NAVIGATION -->
    <ul class="x-navigation">
        <li class="xn-logo">
            <a href="index.html">BANGLADESH ARCHIVE</a>
            <a href="#" class="x-navigation-control"></a>
        </li>
        <li class="xn-profile">
            <a href="#" class="profile-mini">
                <img src="/assets/images/users/moyukh.png" alt="Moyukh Mahtab"/>
            </a>
            <div class="profile">
                <div class="profile-image">
                    <img src="/assets/images/users/moyukh.png" alt="Moyukh Mahtab"/>
                </div>
                <div class="profile-data">
                    <div class="profile-data-name">Moyukh Mahtab</div>
                    <div class="profile-data-title">Co Founder</div>
                </div>

            </div>
        </li>
        <li class="xn-title">Navigation</li>
        <li {{ (Request::is('/') ? 'class=active' : '') }}>
            <a href="/"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
        </li>

        <li class="xn-openable {{ ( Request::segment(2) == 'create' ? 'active' : '') }}" >
            <a href="#"><span class="fa fa-plus-square-o"></span> <span class="xn-text"> Create</span></a>
            <ul>
                {{--<li {{ (Request::is('item/create') ? 'class=active' : '') }}><a href="/item/create"><span class="fa fa-plus-square-o"></span> Create</a></li>--}}
                <li {{ (Request::is('audio/create') ? 'class=active' : '') }}><a href="/audio/create"><span class="fa fa-music"></span> Audio</a></li>
                <li {{ (Request::is('video/create') ? 'class=active' : '') }}><a href="/video/create"><span class="fa fa-video-camera"></span> Video</a></li>
                <li {{ (Request::is('image/create') ? 'class=active' : '') }}><a href="/image/create"><span class="fa fa-camera"></span> Image</a></li>
                <li {{ (Request::is('document/create') ? 'class=active' : '') }}><a href="/document/create"><span class="fa fa-file-text-o"></span> Document</a></li>
                <li {{ (Request::is('collection/create') ? 'class=active' : '') }}><a href="/collection/create"><span class="fa fa-folder-o"></span> Collection</a></li>
{{--                <li {{ (Request::is('item') ? 'class=active' : '') }}><a href="/item"><span class="fa fa fa-eye"></span> View</a></li>--}}
            </ul>
        </li>

        <li class="xn-openable {{ ( Request::segment(2) == 'browse' ? 'active' : '') }}" >
            <a href="#"><span class="fa fa fa-eye"></span> <span class="xn-text"> View</span></a>
            <ul>
                {{--<li {{ (Request::is('item/create') ? 'class=active' : '') }}><a href="/item/create"><span class="fa fa-plus-square-o"></span> Create</a></li>--}}
                <li {{ (Request::is('audio/browse') ? 'class=active' : '') }}><a href="/audio/browse"><span class="fa fa-music"></span> Audio</a></li>
                <li {{ (Request::is('video/browse') ? 'class=active' : '') }}><a href="/video/browse"><span class="fa fa-video-camera"></span> Video</a></li>
                <li {{ (Request::is('image/browse') ? 'class=active' : '') }}><a href="/image/browse"><span class="fa fa-camera"></span> Image</a></li>
                <li {{ (Request::is('document/browse') ? 'class=active' : '') }}><a href="/document/browse"><span class="fa fa-file-text-o"></span> Document</a></li>
                <li {{ (Request::is('collection/browse') ? 'class=active' : '') }}><a href="/collection/browse"><span class="fa fa-folder-o"></span> Collection</a></li>
            </ul>
        </li>

    </ul>
    <!-- END X-NAVIGATION -->
</div>
<!-- END PAGE SIDEBAR -->