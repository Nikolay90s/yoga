   <section class="hero-wrap js-fullheight" style="background-image: url('/asset/images/bg_3.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-3 bread">Blog Single</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Home</a></span> <span class="mr-2"><a href="{{ route('blog') }}">Blog</a></span> <span>Blog Single</span></p>
          </div>
        </div>
      </div>
    </section>


	  <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
            <h2 class="mb-3">{{ $blog->title }}</h2>
            <p>
              <img src="/asset/images/{{ $blog->image }}" alt="" class="img-fluid">
            </p>
            {!! $blog->text !!}
            </div>


            <div class="pt-5 mt-5">
              <h3 class="mb-5">{{ $al }} Comments</h3>
              <ul class="comment-list">
                @foreach($comments as $comment)
                <li class="comment">
                  <div class="comment-body">
                    <h3>{{ $comment->name }}</h3>
                    <div class="meta">{{ $comment->created_at }}</div>
                    <p>{{ $comment->text }}</p>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>
                </li>
                @endforeach
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>

                @if(count($errors) > 0)
                <div class="alert alert-danger">
                	<ul>
                  		@foreach($errors->all() as $error)
                      		<li>{{ $error }}</li>
                      	@endforeach
                    </ul>
                </div>
                @endif
                {!! Form::open(['url' => route('more', ['id' => $blog->id]), 'class' => 'bg-light p-4 hiden', 'type' => 'post']) !!}
                <div class="form-group">
                  	{{ Form::hidden('blog_id', $blog->id) }}
                	{!! Form::label('name', 'Name *') !!}
                  	{!! Form::text('name', old('name'), ['class' => 'form-control bg-white']) !!}
                </div>
                <div class="form-group">
                	{!! Form::label('email', 'Email *') !!}
                  	{!! Form::text('email', old('email'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                	{!! Form::label('text', 'Message') !!}
                  	{!! Form::textarea('text', old('message'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                	{!! Form::button('Post Comment', ['class' => 'btn py-3 px-4 btn-primary', 'type' => 'submit']) !!}
                </div>
                {!! Form::close() !!}
              </div>
            </div>