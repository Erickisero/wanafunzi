<x-home-master>
@section('content')
<!--Page header & Title-->
<section id="page_header">
<div class="page_title">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
         <h2 class="title">Our Food</h2>
         <p>All our meals are served with a choice of accompaniments.</p>
      </div>
    </div>
  </div>
</div>  
</section>



<!--Welcome-->
<section id="welcome" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
         <h2 class="heading">Welcome to Funke</h2>
         <hr class="heading_space">
      </div>
      <div class="col-md-7 col-sm-6">
        <p class="half_space">Our diverse and culturally rich Menu gives our customers an array of dishes to choose from the Somali and African origin. Our customers get to experience a festival of flavors from the different cuisines that our restaurant has to offer. 
        It has survives several customers.</p>
        <p class="half_space">Enjoy our healthy exotic mixed drinks and our funke Gourmet shakes our meals are served with a choice of accompaniments .</p>
        <p class="half_space">We offer veriety of services like...</p>
        <ul class="welcome_list">
        <li>Business Events</li>
        <li>Birthdays</li>
        <li>Cardiovascular Diseases</li>
        <li>Weddings</li>
        <li>Party & Others</li>
        </ul> 
      </div>
      <div class="col-md-5 col-sm-6">
       <img class="img-responsive" src="{{asset('home_ui/pimages/mm15.jpg')}}" alt="welcome funke">
      </div>
    </div>
  </div>
</section> 


<!--Food Facilities-->
<section id="food" class="padding bg_grey">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="heading">Our &nbsp; Menu</h2>
        <hr class="heading_space">
      </div>
    </div>
    <div class="row">
    <div class="col-md-4">
        <ul class="menu_widget">
          <li>Classic Nachos<span>KSH.1000</span></li>
          <li>Nachos Grande<span>KSH.2490.00</span></li>
          <li>Avocado Shell Stuffed<span>KSH.1150.00</span></li>
          <li>Stuffed Mushroom<span>KSH.2199.00</span></li>
          <li>Baked Potato Jackets<span>KSH.2999.00</span></li>
          <li>Mexican Taco<span>KSH.1899.00</span></li>
          <li>Tex-Mex Chicken<span>KSH.21250.00</span></li>
          <li>Quesadillas Acapulco<span>KSH.1399.00</span></li>
          <li>Quesadillas Acapulco<span>KSH.1399.00</span></li>
          <li>Quesadillas Acapulco<span>KSH.2399.00</span></li> 
          <li>Garbo Chicken<span>KSH.1000.00</span></li>
          <li>Spaghetti<span>KSH.850.00</span></li>
          <li>Barbecue Beef <span>KSH.739.00</span></li>
          <li>Buck Wheat<span>KSH.830.00</span></li>
        </ul>
      </div>
      <div class="col-md-8 grid_layout">
      <div class="row">
      <div class="zerogrid">
          <div class="wrap-container">
            <div class="wrap-content clearfix">
              <div class="col-1-2">
              <div class="wrap-col first">
                  <div class="item-container"> 
                   <img src="https://www.themesindustry.com/html/bistro/images/grid-layout2.jpg" alt="cook"/>
                   <div class="overlay">
                       <a class="overlay-inner fancybox" href="https://www.themesindustry.com/html/bistro/images/grid-layout2.jpg" data-fancybox-group="gallery">
                        Mexican Burger
                       </a> 
                   </div>
                  </div>
                </div>
              </div>
              <div class="col-1-2">
              <div class="wrap-col first">
                  <div class="item-container"> 
                   <img src="https://www.themesindustry.com/html/bistro/images/grid-layout3.jpg" alt="cook"/> 
                   <div class="overlay">
                      <a class="overlay-inner fancybox" href="https://www.themesindustry.com/html/bistro/images/grid-layout3.jpg" data-fancybox-group="gallery">
                        Club sandwich
                      </a>
                   </div>
                   </div>
                </div>
              </div>
              <div class="col-1-2">
              <div class="wrap-col">
                  <div class="item-container"> 
                   <img src="https://www.themesindustry.com/html/bistro/images/grid-layout4.jpg" alt="cook"/> 
                   <div class="overlay">
                       <a class="overlay-inner fancybox" href="https://www.themesindustry.com/html/bistro/images/grid-layout4.jpg" data-fancybox-group="gallery">
                        Penne carbonara
                       </a>
                   </div>
                    </div>
                </div>
              </div>
              <div class="col-1-2">
              <div class="wrap-col">
                  <div class="item-container"> 
                   <img src="https://www.themesindustry.com/html/bistro/images/grid-layout5.jpg" alt="cook"/> 
                   <div class="overlay">
                       <a class="fancybox overlay-inner" href="https://www.themesindustry.com/html/bistro/images/grid-layout5.jpg" data-fancybox-group="gallery"> 
                         Barbique Delite
                       </a>
                    </div>
                   </div>
                 </div>
               </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Populars-->
<section class="padding" id="popular">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <h2 class="heading">Featured Food</h2>
      <hr>
      </div>
      <div class="col-sm-3">
        <div class="popular top40 text-center">
          <div class="image">
             <img src="{{asset('home_ui/pimages/mm2.jpg')}}" alt="popular1">
             <div class="overlay">
               <a class="fancybox overlay-inner" href="{{asset('home_ui/pimages/mm2.jpg')}}" data-fancybox-group="gallery">
                 <i class="icon-eye6"></i>
               </a>
             </div>
          </div>
          <h4>Cream of Tomato Soup</h4>
          <span class="dish">KSH.1,256.99</span>
          <p>Tempting light puree of slow roasted tomato, served with bread croutons and a touch of double cream</p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="popular top40 text-center">
          <div class="image">
             <img src="{{asset('home_ui/pimages/mm10.jpg')}}" alt="popular1">
             <div class="overlay">
               <a class="fancybox overlay-inner" href="{{asset('home_ui/pimages/mm10.jpg')}}" data-fancybox-group="gallery">
                 <i class="icon-eye6"></i>
               </a>
             </div>
          </div>
          <h4>Mushroom Soup</h4>
          <span class="dish">KSH.2,500.99</span>
          <p>A rich essence of Kenyan mushrooms garnished with fresh chopped parsley</p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="popular top40 text-center">
          <div class="image">
             <img src="{{asset('home_ui/pimages/mm2.jpg')}}" alt="popular1">
             <div class="overlay">
               <a class="fancybox overlay-inner" href="{{asset('home_ui/pimages/mm2.jpg')}}" data-fancybox-group="gallery">
                 <i class="icon-eye6"></i>
               </a>
             </div>
          </div>
          <h4>Penne carbonara</h4>
          <span class="dish">KSH.1,200.99</span>
          <p>Pasta tubes with cream ham/bacon crushed black pepper </p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="popular top40 text-center">
          <div class="image">
             <img src="{{asset('home_ui/pimages/bugger.jpg')}}" alt="popular1">
             <div class="overlay">
               <a class="fancybox overlay-inner" href="{{asset('home_ui/pimages/bugger.jpg')}}" data-fancybox-group="gallery">
                 <i class="icon-eye6"></i>
               </a>
             </div>
          </div>
          <h4>Club sandwich</h4>
          <span class="dish">KSH.885.99</span>
          <p>Classic triple decked sandwich served with brown bread with a filling of chicken, beef, egg, tomato and lettuce</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!--Blue Section-->
<section class="bg_bistro padding-half">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 white_content">
        <i class="icon-glass"></i>
        <h3>Dinner & Dessert</h3>
        <p> you need a doctor for to consectetuer Lorem ipsum dolor, consectetur adipiscing onsectetur Graphic Power Ut eros.</p>
      </div>
      <div class="col-md-4 col-sm-6 white_content">
        <i class="icon-coffee"></i>
        <h3><a href="https://www.themesindustry.com/html/bistro/services.html">Breakfast</a></h3>
        <p> you need a doctor for to consectetuer Lorem ipsum dolor, consectetur adipiscing onsectetur Graphic Power Ut eros.</p>
      </div>
      <div class="col-md-4 col-sm-6 white_content">
        <i class="icon-coffee"></i>
        <h3><a href="https://www.themesindustry.com/html/bistro/services.html">Ice Shakes</a></h3>
        <p> you need a doctor for to consectetuer Lorem ipsum dolor, consectetur adipiscing onsectetur Graphic Power Ut eros.</p>
      </div>
      <div class="col-md-4 col-sm-6 white_content">
        <i class="icon-glass"></i>
        <h3><a href="https://www.themesindustry.com/html/bistro/services.html">Beverages</a></h3>
        <p> you need a doctor for to consectetuer Lorem ipsum dolor, consectetur adipiscing onsectetur Graphic Power Ut eros.</p>
      </div>
      <div class="col-md-4 col-sm-6 white_content">
        <i class="icon-food"></i>
        <h3><a href="https://www.themesindustry.com/html/bistro/services.html">Delicious Food</a></h3>
        <p> you need a doctor for to consectetuer Lorem ipsum dolor, consectetur adipiscing onsectetur Graphic Power Ut eros.</p>
      </div>
      <div class="col-md-4 col-sm-6 white_content">
        <i class="fas fa-bowl"></i>
        <h3><a href="https://www.themesindustry.com/html/bistro/services.html">Desserts</a></h3>
        <p> you need a doctor for to consectetuer Lorem ipsum dolor, consectetur adipiscing onsectetur Graphic Power Ut eros.</p>
      </div>
    </div>
  </div>
</section>



<!-- testinomial -->
<section id="testinomial" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <div id="testinomial-slider" class="owl-carousel text-center">
        <div class="item">
          <h3>"While visiting Nairobi, on my business trip from London i was recommended by a friend to visit funkedelica, there food is delicious i enjoyed the african cuisine alot."</h3>
          <p>Chris Martin</p>
        </div>
        <div class="item">
          <h3>"Funke Delica restaurant is always my go to restaurant while am in the CBD, and while am home i order food which they always deliver hot and tasty, as well as they have friendly staff.”.</h3>
          <p>Alex Oduor</p>
        </div>
        <div class="item">
          <h3>"The food here is always on another level, I always have lunch at Funke Delica"</h3>
          <p>Bonface Mwangi</p>
        </div>
       </div>
      </div>
    </div>
  </div>
</section>
 @endsection
</x-home-master>