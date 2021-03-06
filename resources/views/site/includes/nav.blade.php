<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{ route('index') }}"><span class="flaticon-lotus"></span>Yogalax</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
              @foreach($menus as $menu)
	          <li class="nav-item {{ request()->routeIs($menu->link) ? 'active' : '' }} ">{{ Html::link(route($menu->link), $menu->name, ['class' => 'nav-link']) }}</li>
              @endforeach
	        </ul>
	      </div>
		  </div>
	  </nav>