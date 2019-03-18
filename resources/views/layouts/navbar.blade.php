
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">

<div class="container">
    <a class="navbar-brand" href="#">
        {{ config('app.name', 'Laravel') }}
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
            <a class="nav-link" href="{{url('/')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('service')}}">Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{url('about')}}">About</a>
          </li>
           <li class="nav-item">
            <a class="nav-link " href="{{url('posts')}}">Posts</a>
          </li>
          
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class=" dropdown ">
                    <a  class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" >
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu " role="menu">
                      <li class="dropdown-item" ><a href="{{url('dashboard')}}">Dashboard</a></li>
                       <li class="dropdown-item">
                          <a  href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                           
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li> 
                    </ul>
                </li>
            @endguest
        </ul>
    </div>
</div>
</nav>