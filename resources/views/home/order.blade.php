<x-home-master>
@section('content')
<!--Page header & Title-->
<section id="page_header">
<div class="page_title">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
         <h2 class="title">Order Online</h2>
         <p>You can order your food here</p>
      </div>
    </div>
  </div>
</div>  
</section>

<section id="order-form" class="order-page">
  <div class="container order_form padding">
    <div class="row">
      <div class="col-md-12 appointment_form">
        <h2 class="heading">Online Order</h2>
        <hr class="heading_space">
    <div class="row">  
       <div class="col-md-8">
       <form onSubmit="return false" id="order_form" class="callus">
            <div class="row">
            <div class="form-group col-md-12">
            <div id="result" class="text-center">
            <div class="container">
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
                  <h5 class="card-title text-info product-name">Bacon Lattice</h5>
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
    </div>
      </div>
    </div>
      </div>
    </div>

            </div>
          </div>
        </div>
             <div class="row">
             <div class="form-group col-md-12">
            <p>Your deatails goes here for order.</p>
            </div></div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name"  name="name" id="name"  required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                   <input type="email" class="form-control" placeholder="Email address" name="email" id="email" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Phone No" name="phone" id="phone" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">

                   <select class="form-control" id="deal" name="deal">
                       <option><strong> Snacks & Sandwiches</strong></option>
                       <option> Vegetable Burger <strong>KSH.950 </option>
                       <option> Chips masala <strong>KSH.1000 </option>
                       <option> Chips  <strong>KSH.850 </option>
                       <option> Club sandwich <strong>KSH.1000 </option>
                       <option> Crispy chips <strong>KSH.950 </option>
                       <option> Bacon La0ttice <strong>KSH.550 </option>
                       <option> Spaghetti bolognaise<strong>KSH.450 </option>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea placeholder="Order Details"  id="message" name="message" required></textarea>
                  </div>
                  <div class="form-group">
                     <div class="btn-submit btn-common-white">
                    <input type="submit" value="Place &nbsp; Order" id="btn_order_submit" />
                    </div>
                  </div>
                </div>
              </div>
              
            </form>
           </div> 
           </div>
      </div>
      <div class="col-md-3">
      </div>
    </div>
    <div class="col-md-3"></div>
  </div>
</section>
@endsection
</x-home-master>