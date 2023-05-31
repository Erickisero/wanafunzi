<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Menu</title>
<link rel="stylesheet" type="text/css" href="{{asset('home_ui/bootstrap/css/bootistrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('home_ui/css/settings.css')}}">
<!--<link rel="stylesheet" type="text/css" href="css/navigation.css">-->
<link rel="stylesheet" type="text/css" href="{{asset('home_ui/css/owl-carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('home_ui/css/owl-transition.css')}}">
<!--<link rel="stylesheet" type="text/css" href="css/jquery-fancybox.css">-->
<link rel="stylesheet" type="text/css" href="{{asset('home_ui/css/zerogrid.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('home_ui/css/styles.css')}}">
<!--<link rel="shortcut icon" href="#">-->
<<link rel="stylesheet" href="{{asset('home_ui/ccss/style.css')}}">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('home_ui/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('home_ui/font-awesome/css/font-awesome.css')}}">
</head>

<body>


<div id="loader">
  <div class="spinner"></div>
  <p><h3>Loading...</h3></p>
</div>

<!--Topbar-->
<div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p class="pull-left hidden-xs">Funke Delica Foods and Restaurant, the Best in Town</p>
        <p class="pull-right"><i class="fa fa-phone"></i>Order Online +254 716 693 926</p>
      </div>
    </div>
  </div>
</div>

<!--Header-->
<header id="main-navigation">
  <div id="navigation" data-spy="affix" data-offset-top="20">
    <div class="container">
      <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-default">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#fixed-collapse-navbar" aria-expanded="false"> 
            <span class="icon-bar top-bar"></span> <span class="icon-bar middle-bar"></span> <span class="icon-bar bottom-bar"></span> 
            </button>
             <a class="navbar-brand" href="{{route('home.index')}}"><img width="50" height="0" src="{{asset('home_ui/pimages/logo3.png')}}" alt="logo"  class="img-responsive" > </a>
          </div>

            <div id="fixed-collapse-navbar" class="navbar-collapse collapse navbar-right">
              <ul class="nav navbar-nav">
                <li class="active"><a href="{{route('home.index')}}">Home</a></li>
                <li><a href="{{route('home.food')}}">Our Food</a></li>
                
                <li class="dropdown">
                  <a data-toggle="dropdown" href="#" class="dropdown-toggle">pages</a>
                  <ul class="dropdown-menu">
                  <li><a href="{{route('home.gallary')}}">Gallary</a> </li>
                    <li><a href="{{route('home.about')}}">About Us</a></li>
                    <li><a href="{{route('home.blog')}}">Blog</a></li>
                    <li><a href="{{route('home.faq')}}">FAQ</a></li>
                  </ul>
                 </li>
                 <li><a href="{{route('home.menu')}}">Menu</a></li>
                <li><a href="{{route('home.order')}}">Order Now</a></li>
                <li><a href="{{route('home.location')}}">Location</a></li>
                  @if(Auth::check())
                <li><a href="{{route('admin.index')}}" class="nav-link">Admin</a></li>
                               
                <!-- Logout functionality -->                
                <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">Logout</a>
                    <form action="{{route('logout')}}" method="post" id="logout-form" style="display: none;">
                        @csrf
                    </form>
                </li>
                @else
                <li class ="nav-item">
                    <a href="{{route('login')}}" class="nav-link">login</a>
                </li>
                <li class ="nav-item">
                    <a href="{{route('register')}}" class="nav-link">register</a>
                </li>
                @endif
              </ul>

            </div>
         </nav>
         </div>
       </div>
     </div>
  </div>
</header>
    <!-- Navbar End -->

    @yield('content')

   <!--Footer-->
<footer class="padding-top bg_black">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6 footer_column">
        <h4 class="heading">Why Funke?</h4>
        <hr class="half_space">
        <p class="half_space">Our staff are professionally trained and committed to serving you to your satisfaction.</p>
        <p> We pride ourselves in the level of exemplary service we provide to our customers.</p>
      </div>
      <div class="col-md-3 col-sm-6 footer_column">
        <h4 class="heading">Quick Links</h4>
        <hr class="half_space">
        <ul class="widget_links">
          <li><a href="{{route('home.index')}}">Home</a></li>
          <li><a href="{{route('home.blog')}}">Blog</a></li>
          <li><a href="{{route('home.about')}}">About Us</a></li>
          <li><a href="{{route('home.location')}}">Locations</a></li>
          <li><a href="{{route('home.menu')}}">Menu</a></li>
          <li><a href="{{route('home.faq')}}">Faq's</a></li>
          <li><a href="{{route('home.order')}}">Order Now</a></li>
          <li><a href="{{route('home.gallary')}}">Gallary</a></li>
          <li><a href="{{route('home.food')}}">Food</a></li>
        </ul>
      </div>
      <div class="col-md-3 col-sm-6 footer_column">
        <h4 class="heading">Newsletter</h4>
        <hr class="half_space">
        <p class="icon"><i class="icon-dollar"></i>Sign up with your name and email to get updates .</p>
        <div id="result1" class="text-center"></div>        
        
       <form action="http://themesindustry.us13.list-manage.com/subscribe/post-json?u=4d80221ea53f3a4487ddebd93&amp;id=494727d648&amp;c=?" method="get" onSubmit="return false" class="newsletter">
          <div class="form-group">
            <input type="email" placeholder="E-mail Address" required name="EMAIL" id="EMAIL" class="form-control" />
          </div>
          <div class="form-group">
            <input type="submit" class="btn-submit button3" value="Subscribe" />
          </div>
        </form>
      </div>
      <div class="col-md-3 col-sm-6 footer_column">
        <h4 class="heading">Get in Touch</h4>
        <hr class="half_space">
        <p>Funke Delica, Home of all Meals.</p>
        <p class="address"><i class="icon-map-marker"></i>Kimathi Street 1258,Nairobi-Kenya</p>
        <p class="address"><i class="fa fa-phone"></i>+254 716 693 926</p>
        <p class="address"><i class="icon-inbox"></i><a href="mailto:funkedelica@gmail.com">funkedelica@gmail.com</a></p>
      </div> 
    </div>
    <div class="row">
     <div class="col-md-12">
        <div class="copyright clearfix">
          <p>Copyright &copy; 2023 Funcka Delica. All Right Reserved</p>
          <ul class="social_icon">
            <li><a href="#" class="facebook"><i class="icon-facebook"></i></a></li>
            <li><a href="#" class="twitter"><i class="icon-twitter"></i></a></li>
            <li><a href="#" class="instagram"><i class="icon-instagram"></i></a></li>
        </div>
      </div>
    </div>
  </div>
</footer>

<a href="#" id="back-top"><i class="fa fa-angle-up fa-2x"></i></a>

<script src="{{asset('home_ui/js/jquery.js')}}" type="text/javascript"></script>
<script src="{{asset('home_ui/js/bootmin.js')}}" type="text/javascript"></script>
<script src="{{asset('home_ui/js/jquerythmptools.js')}}"></script>
<script src="{{asset('home_ui/js/jquerythmprevmin.js')}}"></script>
<script src="{{asset('home_ui/js/revelayeranim.js')}}"></script>
<script src="{{asset('home_ui/js/revenavigation.js')}}"></script>
<script src="{{asset('home_ui/js/reveparallax.js')}}"></script>
<script src="{{asset('home_ui/js/reveslideanims.js')}}"></script>
<script src="{{asset('home_ui/js/revexvid.js')}}"></script>
<script src="{{asset('home_ui/js/slider.js')}}" type="text/javascript"></script>
<script src="{{asset('home_ui/js/owlcarousel.js')}}" type="text/javascript"></script>
<script src="{{asset('home_ui/js/parallax.js')}}"></script>
<script src="{{asset('home_ui/js/mixitup.js')}}"></script>
<script src="{{asset('home_ui/js/jquerycountTo.js')}}"></script>
<script src="{{asset('home_ui/js/jqueryappear.js')}}"></script>  
<script src="{{asset('home_ui/js/jqueryfancybox.js')}}"></script>
<script src="{{asset('home_ui/ccss/js/cjs.js')}}"></script>
<script src="{{asset('home_ui/js/function.js')}}" type="text/javascript"></script>
 
</body>
</html>
