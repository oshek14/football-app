<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="{{ url('admin') }}" class="{{(request()->is('admin')) ? 'active' : ''}}"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                <li><a href="{{ url('admin/blogposts') }}" class="{{(request()->is('admin/blogposts')) ? 'active' : ''}}"><i class="lnr lnr-book"></i> <span>Blogposts</span></a></li>
                <li><a href="{{ url('admin/clubs') }}" class="{{(request()->is('admin/clubs')) ? 'active' : ''}}"><i class="lnr lnr-book"></i> <span>Clubs</span></a></li>
                <li><a href="{{ url('admin/players') }}" class="{{(request()->is('admin/players')) ? 'active' : ''}}"><i class="lnr lnr-user"></i> <span>Players</span></a></li>
                <li><a href="{{ url('admin/gallery-images') }}" class="{{(request()->is('admin/gallery-images')) ? 'active' : ''}}"><i class="lnr lnr-book"></i> <span>Gallery</span></a></li>
                {{-- <li>
                    <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="subPages" class="collapse ">
                        <ul class="nav">
                            <li><a href="page-profile.html" class="">Profile</a></li>
                            <li><a href="page-login.html" class="">Login</a></li>
                            <li><a href="page-lockscreen.html" class="">Lockscreen</a></li>
                        </ul>
                    </div>
                </li> --}}
            </ul>
        </nav>
    </div>
</div>
