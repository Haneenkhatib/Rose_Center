<!-- Header section -->
<header class="header-section">
    <div class="header-warp">
        <!-- logo -->
        <a href="{{route('home')}}" class="site-logo">
            <img src="{{asset('websiteControl/img/Rose_logo.png')}}" alt="">
        </a>
        <!-- responsive -->
        <div class="nav-switch">
            <i class="fa fa-bars"></i>
        </div>
        <!-- Navigation Menu -->
        <ul class="main-menu">
            <li><a href="{{route('user.home')}}">Home</a></li>
            <li><a href="{{route('about.index')}}">About Us</a></li>
            <li><a href="{{route('Service.index')}}">Services</a></li>
            <li><a href="{{route('appointment.index')}}">Appointments</a></li>
            <li><a href="{{route('contact')}}">Contact</a></li>
            {{--<li><a href="{{route('user.profile',['id'=>\Illuminate\Support\Facades\Auth::id()])}}">Profile</a></li>--}}
        </ul>
        <div class="header-right">
                <a href="{{route('notifications.index')}}">
                    <span class="fas fa-bell" style="color: #e32a63;"><span class="badge">{{\Illuminate\Support\Facades\Auth::user()->notifications->count()}}</span></span>
                </a>
{{--                <ul class="dropdown-menu" aria-labelledby="notificationsMenu" id="notificationsMenu">--}}
{{--                    <li class="dropdown-header">--}}
{{--                    @forelse(\Illuminate\Support\Facades\Auth::user()->unreadNotifications as $notification)--}}
{{--                    you book appointment in {{$notification->data['date']}}--}}
{{--                    @empty--}}
{{--                        There's no notifications--}}
{{--                    @endforelse--}}
{{--                  </li>--}}
{{--                </ul>--}}


{{--            <li class="dropdown" style="list-style: none;">--}}
{{--                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">--}}
{{--                    <i class="fas fa-bell" style="color: #e32a63;"> <span class="badge">{{\Illuminate\Support\Facades\Auth::user()->unreadNotifications->count()}}</span></i>--}}
{{--                </a>--}}
{{--                <ul class="dropdown-menu" role="menu">--}}
{{--                    <li>--}}
{{--                        @forelse(\Illuminate\Support\Facades\Auth::user()->unreadNotifications as $notification)--}}
{{--                            you book appointment in {{$notification->data['date']}}--}}
{{--                        @empty--}}
{{--                            There's no notifications--}}
{{--                        @endforelse--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}


            <a href="{{route('appointment.create')}}" class="site-btn sb-big" >Book an Appointment</a>
            <a href="            {{url('/website/users/').'/'.\Illuminate\Support\Facades\Auth::id()}}
                    " class=""><i class="fa fa-user" style="color: #e32a63; margin-left: 10px"></i></a>
            <a href="{{route('logout.custom')}}" class=""><i class="fas fa-sign-out-alt" style="color: #e32a63; margin-left: 10px"></i></a>
        </div>
    </div>
</header>
<!-- Header section end -->
