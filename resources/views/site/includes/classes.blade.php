    <section class="hero-wrap js-fullheight" style="background-image: url('asset/images/bg_3.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-3 bread">Yoga Classes</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Home</a></span> <span>Classes</span></p>
          </div>
        </div>
      </div>
    </section>
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

    
		<section class="ftco-gallery ftco-section">
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