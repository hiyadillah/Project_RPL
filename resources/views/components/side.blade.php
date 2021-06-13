<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div> 
            <a href="{{route('dashboard')}}" class="nav-link">
                <img src="{{asset('images/home.svg')}}" alt="">
            </a>

            <a href="{{route('profile')}}" class="nav-link active">
                <img src="{{asset('images/user.svg')}}" alt="">
            </a>

            <a href="{{route('myproject')}}" class="nav-link">
                <img src="{{asset('images/book-open.svg')}}" alt="">
            </a>
        </div> 
        <form method="POST" action="{{route('authLogout')}}">
            @csrf
            <button type="submit" class="nav-link btn">
                <img src="{{asset('images/log-out.svg')}}" alt=""> 
            </button>
        </form>
    </nav>
</div>