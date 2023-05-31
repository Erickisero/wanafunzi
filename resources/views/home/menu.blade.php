<x-home-master>
    @section('content')

    <!--Page header & Title-->
<section id="page_header">
<div class="page_title">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
         <h2 class="title">Menu</h2>
         <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit</p>
      </div>
    </div>
  </div>
</div>  
</section>

<!--Pricings-->
<section id="pricing" class="padding-top">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="heading">Snacks & Sandwiches</h2>
        <hr class="heading_space">
      </div>
      <div class="col-sm-6">
        <div class="price padding-bottom">
          <div class="price_body">
             <ul class="pricing_feature">
              <li>Vegetable Burger <strong>KSH.950</strong></li>
              <li>Chips masala <strong>KSH.1000</strong> </li>
              <li>Chips  <strong>KSH.8950</strong> </li>
              <li>Club sandwich <strong>KSH.1000</strong> </li>
              <li>Crispy chips <strong>KSH.950</strong> </li>
              <li>Bacon Lttice <strong>KSH.550</strong> </li>
              <li>Spaghetti bolognaise<strong>KSH.450</strong> </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="price padding-bottom">
          <div class="price_body">
             <ul class="pricing_feature">
              <li>Special Spaghetti  <strong>KSH.2000</strong> </li>
              <li>Salmon Filet <strong>KSH.1500</strong> </li>
              <li> The Space Chicken <strong>KSH.2500</strong> </li>
              <li>Spice Chicken <strong>KSH.3000</strong> </li>
              <li>Steaks in Garlic-Lime <strong>KSH.4000</strong> </li>
              <li>Salmon Filet <strong>KSH.2500</strong> </li>
              <li>yeast muffins<strong>KSH.1500</strong> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <h2 class="heading">Main Meals</h2>
        <hr class="heading_space">
      </div>
      <div class="col-sm-6">
        <div class="price padding-bottom">
          <div class="price_body">
             <ul class="pricing_feature">
              <li>Grilled Pork Chop  <strong>KSH.1000</strong> </li>
              <li>The pepper Steak <strong>KSH.2000</strong> </li>
              <li>lamb Chops <strong>KSH.2000</strong> </li>
              <li>T- bone steak <strong>KSH.3500</strong> </li>
              <li>Crispy Chicken & Vagi Rolls <strong>KSH.1500</strong> </li>
              <li>Grilled Fish Fillet <strong>KSH.2500</strong> </li>
              <li>Mixed Grill<strong>KSH.3500</strong> </li>
            </ul>
          </div>
          
        </div>
      </div>
      <div class="col-sm-6">
        <div class="price padding-bottom">
          <div class="price_body">
             <ul class="pricing_feature">
              <li>Fresh Fried Whole Tilapia  <strong>KSH.2000</strong> </li>
              <li>Chicken curry <strong>KSH.4500</strong> </li>
              <li> Chicken Saltimbocca <strong>KSH.5000</strong> </li>
              <li>Spice Chicken <strong>KSH.2700</strong> </li>
              <li>Steaks in Garlic-Lime <strong>KSH.1500</strong> </li>
              <li>Lamb Korma <strong>KSH.3500</strong> </li>
              <li>Beef Ragout<strong>KSH.1000</strong> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
          <h4 class="heading">Main Meals</h4>
          <div class="row">
            <div class="col-sm-3">
              <div class="shadow-sm card mb-3 product">
                <img class="product-img" src="{{asset('home_ui/pimages/mm10.jpg')}}" alt="prd1" onmouseover="animateImg(this)"
                onmouseout="normalImg(this)"/>
                <div class="card-body">
                  <h5 class="card-title text-info bold product-name">Special Spaghetti</h5>
                  <p class="card-text text-success product-price">2000 KSH.</p>
                  <button class="btn badge badge-pill badge-secondary mt-2 float-right" type="button"
                    data-action="add-to-cart">Add to cart</button>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="shadow-sm card mb-3 product">
                <img class="product-img" src="{{asset('home_ui/pimages/mm10.jpg')}}" alt="prd2" onmouseover="animateImg(this)"
                onmouseout="normalImg(this)"/>
                <div class="card-body">
                  <h5 class="card-title text-info product-name">Salmon Fillet</h5>
                  <p class="card-text text-success product-price">1500 KSH.</p>
                  <button class="btn badge badge-pill badge-secondary mt-2 float-right" type="button"
                  data-action="add-to-cart">Add to cart</button>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="shadow-sm card mb-3 product">
                <img class="product-img" src="{{asset('home_ui/pimages/mm10.jpg')}}" alt="prd2" onmouseover="animateImg(this)"
                onmouseout="normalImg(this)"/>
                <div class="card-body">
                  <h5 class="card-title text-info product-name">The Space Chicken</h5>
                  <p class="card-text text-success product-price">2500 KSH.</p>
                  <button class="btn badge badge-pill badge-secondary mt-2 float-right" type="button"
                  data-action="add-to-cart">Add to cart</button>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="shadow-sm card mb-3 product">
                <img class="product-img" src="{{asset('home_ui/pimages/mm10.jpg')}}" alt="prd2" onmouseover="animateImg(this)"
                onmouseout="normalImg(this)"/>
                <div class="card-body">
                  <h5 class="card-title text-info product-name">Steaks & Garlic-L</h5>
                  <p class="card-text text-success product-price">4000 KSH.</p>
                  <button class="btn badge badge-pill badge-secondary mt-2 float-right" type="button"
                  data-action="add-to-cart">Add to cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-3">
              <div class="shadow-sm card mb-3 product">
                <img class="product-img" src="{{asset('home_ui/pimages/mm10.jpg')}}" alt="prd3" onmouseover="animateImg(this)"
                onmouseout="normalImg(this)"/>
                <div class="card-body">
                  <h5 class="card-title text-info product-name">Spice Chicken</h5>
                  <p class="card-text text-success product-price">3000 KSH.</p>
                  <button class="btn badge badge-pill badge-secondary mt-2 float-right" type="button" 
                  data-action="add-to-cart">Add to cart</button>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="shadow-sm card mb-3 product">
                <img class="product-img" src="{{asset('home_ui/pimages/mm10.jpg')}}" alt="prd3" onmouseover="animateImg(this)"
                onmouseout="normalImg(this)"/>
                <div class="card-body">
                  <h5 class="card-title text-info product-name">Fillet</h5>
                  <p class="card-text text-success product-price">2500 KSH.</p>
                  <button class="btn badge badge-pill badge-secondary mt-2 float-right" type="button" 
                  data-action="add-to-cart">Add to cart</button>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="shadow-sm card mb-3 product">
                <img class="product-img" src="{{asset('home_ui/pimages/mm10.jpg')}}" alt="prd3" onmouseover="animateImg(this)"
                onmouseout="normalImg(this)"/>
                <div class="card-body">
                  <h5 class="card-title text-info product-name">Yeast muffins</h5>
                  <p class="card-text text-success product-price">1500 KSH.</p>
                  <button class="btn badge badge-pill badge-secondary mt-2 float-right" type="button" 
                  data-action="add-to-cart">Add to cart</button>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="shadow-sm card mb-3 product">
                <img class="product-img" src="{{asset('home_ui/pimages/mm10.jpg')}}" alt="prd3" onmouseover="animateImg(this)"
                onmouseout="normalImg(this)"/>
                <div class="card-body">
                  <h5 class="card-title text-info product-name">Yeast muffins</h5>
                  <p class="card-text text-success product-price">1500 KSH.</p>
                  <button class="btn badge badge-pill badge-secondary mt-2 float-right" type="button" 
                  data-action="add-to-cart">Add to cart</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
          <h4 class="heading">Cart</h4>
          <div class="cart"></div>
        </div>
    <div class="row">
      <div class="col-md-12">
        <h2 class="heading">Bevarages & Drinks</h2>
        <hr class="heading_space">
      </div>
      <div class="col-sm-6">
        <div class="price padding-bottom">
          <div class="price_body">
             <ul class="pricing_feature">
              <li>Tao  <strong>KSH.200</strong> </li>
              <li>Coffee <strong>KSH.250</strong> </li>
              <li>Decaf Coffee <strong>KSH.250</strong> </li>
              <li>Masala Tea <strong>KSH.300</strong> </li>
              <li>Hot Chocolate <strong>Ksh.250</strong> </li>
              <li>Dawa <strong>KSH.400</strong> </li>
              <li>Cappuccino<strong>KSH.500</strong> </li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="col-sm-6">
        <div class="price padding-bottom">
          <div class="price_body">
             <ul class="pricing_feature">
              <li>Milk shakes  <strong>KSH.400</strong> </li>
              <li>Vanilla Swiss Roll <strong>KSH.500</strong> </li>
              <li> Tropical Fruit salad<strong>KSH.250</strong> </li>
              <li>Ice cream <strong>KSH.500</strong> </li>
              <li>Fresh cocktail juice <strong>KSH.500</strong> </li>
              <li>COUPE JACQUES<strong>KSH.500</strong> </li>
              <li>Orange juice<strong>KSH.300</strong> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    
    @endsection
</x-home-master>

    