 <section class="hero-wrap js-fullheight" style="background-image: url('asset/images/bg_3.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-3 bread">About Yogalax</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Home</a></span> <span>{{ $title }}</span></p>
          </div>
        </div>
      </div>
    </section>
		
    <section class="ftco-section d-md-flex bg-light">
	<div class="container">
	      <div class="row justify-content-center">
		<div class="col-md-10 text-center">
			<h2>We believe that emotional, mental, and spiritual flexibility are virtuous and life-enhancing, and when it comes to yoga practice, paramount.</h2>
		</div>
	      </div>
	</div>
    </section>

    <section class="ftco-section">
    	<div class="container-fluid">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h3 class="subheading">Coaches</h3>
            <h2 class="mb-1">Meet Our Yoga Coaches</h2>
          </div>
        </div>
    		<div class="row">
                    @foreach($users as $user)
                        @if(isset($user->anket))
    			<div class="col-lg-3 d-flex">
    				<div class="coach align-items-stretch">
	    				<div class="img" style="background-image: url(asset/images/{{ $user->anket['image'] }});"></div>
	    				<div class="text bg-white p-4 ftco-animate">
	    					<span class="subheading">Owner / Head Coach</span>
	    					<h3><a href="#">{{ $user->name }}</a></h3>
	    					<ul class="ftco-social-media d-flex mt-4">
	                <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a></li>
	                <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a></li>
	                <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a></li>
	              </ul>
	    					<p></p>
	    				</div>
	    			</div>
    			</div>
                        @endif
                    @endforeach
    		</div>
    	</div>
    </section>

    <section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(asset/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
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
                @foreach($users as $user)
                    @if(isset($user->anket))
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="text">
                  	<div class="line pl-5">
	                    <p class="mb-4 pb-1">{{ $user->anket['storis'] }}</p>
	                    <span class="quote d-flex align-items-center justify-content-center">
	                      <i class="icon-quote-left"></i>
	                    </span>
	                  </div>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(asset/images/{{ $user->anket['avatar'] }})">
		                  </div>
		                  <div class="ml-4">
		                  	<p class="name">{{ $user->name }}</p>
		                    <span class="position">Customer</span>
		                  </div>
                    </div>
                  </div>
                </div>
              </div>
                    @endif
                @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>

    
		<section class="ftco-gallery ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h3 class="subheading">Gallery</h3>
            <h2 class="mb-1">See the latest photos</h2>
          </div>
        </div>
    		<div class="row">
                    @foreach($gallerys as $gallery)
		<div class="col-md-3 ftco-animate">
		<a href="asset/images/{{ $gallery->image }}" class="gallery image-popup img d-flex align-items-center" style="background-image: url(asset/images/{{ $gallery->image }});">
			<div class="icon mb-4 d-flex align-items-center justify-content-center">
    		<span class="icon-instagram"></span>
    			</div>
		</a>
		</div>
                    @endforeach
        </div>
    	</div>
    </section>
