<nav
    class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top"
    data-aos="fade-down"
    >
      	<div class="container">
        	<a class="navbar-brand" href="{{route("dashboard")}}">
        		<img src="{{asset('images/linkedon.svg')}}" alt="" />
        	</a>
        	<button
          	class="navbar-toggler"
	        type="button"
	        data-toggle="collapse"
	        data-target="#navbarResponsive"
	        aria-controls="navbarResponsive"
	        aria-expanded="false"
	        aria-label="Toggle navigation"
	        >
          		<span class="navbar-toggler-icon"></span>
        	</button>
          <form class="d-flex" action="{{route('search')}}" name="name">
            <input class="form-control me-2" name="name" type="search" placeholder="Cari Projek" aria-label="Search">
            <button class="btn btn-danger" type="submit">Search</button>
          </form>
        	<div class="collapse navbar-collapse" id="navbarResponsive">
          		<ul class="navbar-nav ml-auto">
            		<li class="nav-item active">
              			<a class="nav-link active" href="{{route("dashboard")}}">Home </a>
            		</li>
					
					<li class="nav-item">
						<a class="nav-link" href="{{route("create_post")}}">
							Post New Project
						</a>
					</li>
            		<li class="nav-item">
                  <a class="nav-link" href="{{route("profile")}}">
					  @if (auth()->user())
					  	{{auth()->user()->name}}

					  @else Guest
					  @endif
				  </a>
                </li>
          		</ul>
        	</div>
      	</div>
    </nav>