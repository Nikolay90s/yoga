 <section class="hero-wrap js-fullheight" style="background-image: url('asset/images/bg_3.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-3 bread">Our Blog</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Home</a></span> <span>Blog</span></p>
          </div>
        </div>
      </div>
    </section>
		

	  <section class="ftco-section bg-light">
      <div class="container">
        <div class="row d-flex">
            @foreach($blogs as $blog)
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="{{ route('more', ['id' => $blog->id]) }}" class="block-20" style="background-image: url('asset/images/{{ $blog->image }}');">
              </a>
              <div class="text p-4 float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4">
              		<div class="one">
              			<span class="day">{{ $blog->data[2] }}</span>
              		</div>
              		<div class="two">
              			<span class="yr">{{ $blog->data[0] }}</span>
              			<span class="mos">{{ $blog->data[1] }}</span>
              		</div>
              	</div>
                <h3 class="heading mt-2"><a href="{{ route('more', ['id' => $blog->id]) }}">{{ $blog->title }}</a></h3>
                {!! $blog->smal_text !!}
              </div>
            </div>
          </div>
            @endforeach
        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
                {{ $blogs->links('vendor.pagination.default') }}
            </div>
          </div>
        </div>
      </div>
    </section>
