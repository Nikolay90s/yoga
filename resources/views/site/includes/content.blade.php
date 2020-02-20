@if(isset($sliders) && is_array($sliders))
	@foreach($sliders as $slider)
<section class="hero-wrap js-fullheight" style="background-image: url('asset/images/{{ $slider['images'] }}');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start">
          <div class="col-md-8 ftco-animate">
            <h1 class="typewrite mb-3" data-period="4000" data-type='[ <?php foreach($slider['Vtext'] as $slid){ echo '"'.$slid.'"'.","; } ?> " "]'>
              <span class="wrap"></span>
            </h1>
            <h2 class="mb-5">{!! $slider['text'] !!}</h2>
            <p><a href="#" class="btn btn-primary p-3 px-4">{{ $slider['buttonName'] }}</a></p>
          </div>
        </div>
      </div>
    </section>
	@endforeach
@endif

@if(isset($check) && is_object($check))
	@foreach($check as $check)
		<section class="ftco-section ftco-intro" style="background-image: url(asset/images/{{ $check->image }});">
			<div class="container">
				<div class="row justify-content-end">
					<div class="col-md-6">
						<div class="heading-section ftco-animate">
	            <h2 class="mb-4">{{ $check->title }}</h2>
	          </div>
	          <p class="ftco-animate">{{ $check->text }}</p>
	          <ul class="mt-5 do-list">
                @foreach($check['check'] as $chec)
	          	<li class="ftco-animate"><a href="#"><span class="ion-ios-checkmark-circle mr-3"></span>{{ $chec->text }}</a></li>
                @endforeach
	          </ul>
					</div>
				</div>
			</div>
		</section>
	@endforeach
@endif

@if(isset($services) && is_object($services))
    <section class="ftco-section ftco-section-services bg-light">
    	<div class="container">
    		<div class="row">
              @foreach($services as $service)
    			<div class="col-md-3">
						<div class="services ftco-animate">
							<div class="icon d-flex justify-content-center align-items-center">
								<span class="{{ $service->icon }}"></span>
							</div>
							<div class="text mt-4">
								<h3>{{ $service->title }}</h3>
								{!! $service->text !!}
							</div>
						</div>
					</div>
              @endforeach
				</div>
    	</div>
    </section>
@endif

@if(isset($classes) && is_object($classes))
	  <section class="ftco-section">
	  	<div class="container">
	  		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-12 heading-section ftco-animate text-center">
            <h3 class="subheading">Yoga Classes</h3>
            <h2 class="mb-1">Choose Your Level &amp; Focus</h2>
          </div>
        </div>
        <div class="row no-gutters">
          @foreach($classes as $classe)
        	<div class="col-md-6 col-lg-4">
        		<div class="package-program ftco-animate">
        			<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(asset/images/{{ $classe->image }});">
        				<div class="text p-5 text-center">
	        				<h3>{{ $classe->title }}</h3>
	        				{!! $classe->text !!}
	        			</div>
        			</a>
        		</div>
        	</div>
          @endforeach
        </div>
	  	</div>
	  </section>
@endif

@if(isset($carts) && is_object($carts))
    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h3 class="subheading">Pricing Tables</h3>
            <h2 class="mb-1">Membership Cards</h2>
          </div>
        </div>
        <div class="row">
          @foreach($carts as $cart)
	        <div class="col-md-4 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
	            <h2 class="heading">{{ $cart->name }}</h2>
	            <span class="price"><sup>$</sup> <span class="number">{{ $cart->price }}</span></span>
	            <span class="excerpt d-block">{{ $cart->time }}</span>

	            <h3 class="heading-2 my-4">{{ $cart->title }}</h3>

	            <ul class="pricing-text mb-5">
	              {!! $cart->text !!}
	            </ul>

	            <a href="#" class="btn btn-primary d-block px-2 py-4">Get Started</a>
	            </div>
	          </div>
	        </div>
          @endforeach
	  <!--      <div class="col-md-4 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
	            <h2 class="heading">Monthly Card</h2>
	            <span class="price"><sup>$</sup> <span class="number">200</span></span>
	            <span class="excerpt d-block">For 1 Month</span>

	            <h3 class="heading-2 my-4">Enjoy All The Features</h3>

	            <ul class="pricing-text mb-5">
	              <li>Group Classes</li>
	              <li>Discuss Fitness Goals</li>
	              <li>Group Trainer</li>
	              <li>Fitness Orientation</li>
	            </ul>

	            <a href="#" class="btn btn-primary d-block px-2 py-4">Get Started</a>
	            </div>
	          </div>
	        </div>
	        <div class="col-md-4 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
	            <h2 class="heading">Weekly Card</h2>
	            <span class="price"><sup>$</sup> <span class="number">85</span></span>
	            <span class="excerpt d-block">For 1 Week</span>

	            <h3 class="heading-2 my-4">Enjoy All The Features</h3>

	            <ul class="pricing-text mb-5">
	              <li>Group Classes</li>
	              <li>Discuss Fitness Goals</li>
	              <li>Group Trainer</li>
	              <li>Fitness Orientation</li>
	            </ul>

	            <a href="#" class="btn btn-primary d-block px-2 py-4">Get Started</a>
	            </div>
	          </div>
	        </div>    -->
	      </div>
      </div>
    </section>
@endif

    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h3 class="subheading">Testimony</h3>
            <h2 class="mb-1">Successful Stories</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="text">
                  	<div class="line pl-5">
	                    <p class="mb-4 pb-1">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
	                    <span class="quote d-flex align-items-center justify-content-center">
	                      <i class="icon-quote-left"></i>
	                    </span>
	                  </div>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_1.jpg)">
		                  </div>
		                  <div class="ml-4">
		                  	<p class="name">Gabby Smith</p>
		                    <span class="position">Customer</span>
		                  </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="text">
                    <div class="line pl-5">
	                    <p class="mb-4 pb-1">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
	                    <span class="quote d-flex align-items-center justify-content-center">
	                      <i class="icon-quote-left"></i>
	                    </span>
	                  </div>

                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_2.jpg)">
		                  </div>
		                  <div class="ml-4">
		                  	<p class="name">Floyd Weather</p>
		                    <span class="position">Customer</span>
		                  </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="text">
                    <div class="line pl-5">
	                    <p class="mb-4 pb-1">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
	                    <span class="quote d-flex align-items-center justify-content-center">
	                      <i class="icon-quote-left"></i>
	                    </span>
	                  </div>

                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_3.jpg)">
		                  </div>
		                  <div class="ml-4">
		                  	<p class="name">James Dee</p>
		                    <span class="position">Customer</span>
		                  </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="text">
                    <div class="line pl-5">
	                    <p class="mb-4 pb-1">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
	                    <span class="quote d-flex align-items-center justify-content-center">
	                      <i class="icon-quote-left"></i>
	                    </span>
	                  </div>

                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_4.jpg)">
		                  </div>
		                  <div class="ml-4">
		                  	<p class="name">Lance Roger</p>
		                    <span class="position">Customer</span>
		                  </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="text">
                    <div class="line pl-5">
	                    <p class="mb-4 pb-1">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
	                    <span class="quote d-flex align-items-center justify-content-center">
	                      <i class="icon-quote-left"></i>
	                    </span>
	                  </div>

                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_2.jpg)">
		                  </div>
		                  <div class="ml-4">
		                  	<p class="name">Kenny Bufer</p>
		                    <span class="position">Customer</span>
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

    <section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
        	<div class="col-md-10">
        		<div class="row">
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<strong class="number" data-number="5000">0</strong>
		              	<span>Happy Customers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<strong class="number" data-number="4560">0</strong>
		              	<span>Yoga Workshops</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<strong class="number" data-number="570">0</strong>
		              	<span>Years of Experience</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<strong class="number" data-number="900">0</strong>
		              	<span>Lesson Conducted</span>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h3 class="subheading">Blog</h3>
            <h2 class="mb-1">Recent Posts</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text p-4 float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4">
              		<div class="one">
              			<span class="day">31</span>
              		</div>
              		<div class="two">
              			<span class="yr">2018</span>
              			<span class="mos">December</span>
              		</div>
              	</div>
                <h3 class="heading mt-2"><a href="#">Young Women Doing Yoga</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text p-4 float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4">
              		<div class="one">
              			<span class="day">27</span>
              		</div>
              		<div class="two">
              			<span class="yr">2018</span>
              			<span class="mos">December</span>
              		</div>
              	</div>
                <h3 class="heading mt-2"><a href="#">Young Women Doing Yoga</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text p-4 float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4">
              		<div class="one">
              			<span class="day">25</span>
              		</div>
              		<div class="two">
              			<span class="yr">2018</span>
              			<span class="mos">December</span>
              		</div>
              	</div>
                <h3 class="heading mt-2"><a href="#">Young Women Doing Yoga</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-gallery ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h3 class="subheading">Gallery</h3>
            <h2 class="mb-1">See the latest photos</h2>
          </div>
        </div>
    		<div class="row">
					<div class="col-md-3 ftco-animate">
						<a href="images/gallery-1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-1.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="images/gallery-2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-2.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="images/gallery-3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="images/gallery-4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-4.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
        </div>
    	</div>
    </section>