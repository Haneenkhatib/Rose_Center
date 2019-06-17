<!-- Header section -->
<header class="header-section">
    <div class="header-warp">
        <!-- logo -->
        <a href="" class="site-logo">
            <img src="{{asset('websiteControl/img/Rose_logo.png')}}" alt="">
        </a>
        <!-- responsive -->
        <div class="nav-switch">
            <i class="fa fa-bars"></i>
        </div>
        <!-- Navigation Menu -->
        <ul class="main-menu">
<<<<<<< HEAD
            <li><a href="{{route('rosecenter')}}">Home</a></li>
            <li><a href="">About Us</a></li>
=======
            <li><a href="home.html">Home</a></li>
            <li><a href="{{route('about.index')}}">About Us</a></li>
>>>>>>> 7c1ab234a41014093510b048c26759b9962fdaf5
            <li><a href="{{route('Service.index')}}">Services</a></li>
            <li><a href="{{route('appointment.index')}}">Appointments</a></li>
            <li><a href="{{route('contact')}}">Contact</a></li>
        </ul>
        <div class="header-right">
            <a href="{{route('appointment.create')}}" class="site-btn sb-big">Book an Appointment</a>
        </div>
    </div>
</header>
<!-- Header section end -->
