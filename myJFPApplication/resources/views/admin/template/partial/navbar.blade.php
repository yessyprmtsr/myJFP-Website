<!--/. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">

            <li>
                <a class="waves-effect waves-dark" href="\admin"><i class="fa fa-dashboard"></i> Dashboard</a>
            </li>
            <li>
                <a href="chart.html" class="waves-effect waves-dark"><i class="fa fa-bar-chart-o"></i> Management Customer Data </a>
            </li>
            <li>
                <a href="{{ route('Transaction.index')}}" class="waves-effect waves-dark"><i class="fa fa-qrcode"></i> Management Transaction</a>
            </li>      
            <li>
                <a href="{{ route('Tracking.index')}}" class="waves-effect waves-dark"><i class="fa fa-table"></i> Management Tracking</a>
            </li>
            <li>
                <a href="{{ route('Courier.index')}}" class="waves-effect waves-dark"><i class="fa fa-edit"></i> Management Courier </a>
            </li>
        </ul>
    </div>
</nav>