<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <a class="navbar-brand">Admin</a>
    </div>
    @if(Auth::user())
    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> {{Auth::user()->hoten}} <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="{{route('dang-xuat')}}"><i class="fa fa-sign-out fa-fw"></i> Dang xuat</a></li>
                <li><a href="{{route('trang-chu')}}"><i class="glyphicon glyphicon-arrow-left"></i> Trang chu</a></li>                     
            </ul>
        </li>
    </ul>
    @endif
</nav>