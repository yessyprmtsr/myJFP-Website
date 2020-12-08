
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title> 
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset ('/adminassets/materialize/css/materialize.min.css') }}" media="screen,projection" />
    <!-- Bootstrap Styles-->
    
    <link href="{{ asset ('/adminassets/css/bootstrap.css') }}" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="{{ asset ('/adminassets/css/font-awesome.css') }}" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="{{ asset ('/adminassets/js/morris/morris-0.4.3.min.css') }}" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="{{ asset ('/adminassets/css/custom-styles.css') }}" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{ asset ('/adminassets/js/Lightweight-Chart/cssCharts.css') }}"> 
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle waves-effect waves-dark" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand waves-effect waves-dark" href="index.html"><i class="large material-icons">track_changes</i> <strong>target</strong></a>
				
		<div id="sideNav" href=""><i class="material-icons dp48">toc</i></div>
            </div>

            <ul class="nav navbar-top-links navbar-right"> 
				  <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1"><i class="fa fa-user fa-fw"></i> <b>Admin</b> <i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
        </nav>
		<!-- Dropdown Structure -->
            <ul id="dropdown1" class="dropdown-content">
            <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
            </li>
            </ul>
       
        <!-- Navbar -->
        @include('admin.template.partial.navbar')

       <!-- Content -->
		@yield('content')
		
				<footer><p>All right reserved. Template by: <a href="">myJFP</a></p>
				
        
				</footer>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    
    <script src="{{ asset ('/adminassets/js/jquery-1.10.2.js') }}"></script>
	
    <!-- Bootstrap Js -->
    
    <script src="{{ asset ('/adminassets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset ('/adminassets/materialize/js/materialize.min.js') }}"></script>
	
    <!-- Metis Menu Js -->
    
    <script src="{{ asset ('/adminassets/js/jquery.metisMenu.js') }}"></script>
    <!-- Morris Chart Js -->
    
    <script src="{{ asset ('/adminassets/js/morris/raphael-2.1.0.min.js') }}"></script>
    <script src="{{ asset ('/adminassets/js/morris/morris.js') }}"></script>
	
	
	<script src="{{ asset ('/adminassets/js/easypiechart.js') }}"></script>
	<script src="{{ asset ('/adminassets/js/easypiechart-data.js') }}"></script>	
	 <script src="{{ asset ('/adminassets/js/Lightweight-Chart/jquery.chart.js') }}"></script>
	
    <!-- Custom Js -->   
    <script src="{{ asset ('/adminassets/js/custom-scripts.js') }}"></script> 
 

</body>

</html>