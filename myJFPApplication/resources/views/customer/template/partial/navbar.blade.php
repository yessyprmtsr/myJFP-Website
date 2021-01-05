<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <div class="max-width">
            <div class="logo"><a href="#">my<span>JFP</span></a></div>
            <ul class="menu">
            <li><a href="{{ route('home')}}">Home</a></li>
            <li><a href="{{ route('about')}}">About</a></li>
            <li><a href="{{ route('service')}}">Services</a></li>
            <li><a href="{{ route('booking.index')}}">Booking</a></li>
            </ul>
            <ul class="form">
                <input class="form-control mr-sm-2" style="margin-left:50px" type="text" placeholder="Search">
            </ul>
            @guest
            <ul class="menu2" style="margin-left:80px">
            <li><a class="btn btn-warning" style="color: white" href="{{ route('login')}}">Login</a></li>
          </ul>
            @else
          <ul class="menu2"  style="margin-left:80px">
            <li>
                <div class="dropdown">
                    <a class="dropbtn">{{ auth()->user()->name}}</a>
                    <i class="fa fa-caret-down"></i>
                    <div class="dropdown-content">
                       <a href="{{ route('profile') }}"> <i class="fa fa-user-circle"></i> My Profile</a>
                      <a href="{{ route('history')}}"><i class="fa fa-history"></i> History</a>
                      <a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                      <i class="fa fa-sign-out fa-fw"></i>    {{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                  </div>
              </li>
            </ul>
      
        </div>
        @endguest
        <style>
            /* Style The Dropdown Button */
            .dropbtn {
              font-size: 16px;
              border: none;
              cursor: pointer;
            }
            
            /* The container <div> - needed to position the dropdown content */
            .dropdown {
              position: relative;
              display: inline-block;
            }
            
            /* Dropdown Content (Hidden by Default) */
            .dropdown-content {
              display: none;
              position: absolute;
              background-color: #f9f9f9;
              box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
              z-index: 1;
              min-width: 160px;
            }
            
            /* Links inside the dropdown */
            .dropdown-content a {
              padding: 12px 16px;
              text-decoration: none;
              display: block;
            }
            
            /* Change color of dropdown links on hover */
            .dropdown-content a:hover {background-color: #f1f1f1}
            
            /* Show the dropdown menu on hover */
            .dropdown:hover .dropdown-content {
              display: block;
            }
            
            /* Change the background color of the dropdown button when the dropdown content is shown */
            .dropdown:hover .dropbtn {
             
            }
            </style>
            
