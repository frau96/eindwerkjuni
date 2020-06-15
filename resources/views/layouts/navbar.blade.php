<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
  <div class="container d-flex">

    <div class="logo mr-auto">
      <h1 class="text-light"><a href="{{ url('/') }}">{{config('app.name', 'Laravel') }}</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      {{-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> --}}
    </div>
    
    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li><a href="/over">Hoe werkt het</a></li>
        <li><a href="/psycholoogs">Psychologen</a></li>
        <li><a href="/faq">F.A.Q</a></li>
        <li><a href="/contact">Contact</a></li>
        <!-- Authentication Links -->
        @guest
            <li class="get-started">
                <a class="get-started" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="get-started">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
        <li><a href="/availabilities/create">Nieuwe beschikbaarheid aanmaken</a></li>
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                 
                    
               
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">

                      @csrf
                     
                     </form> 
                     
                     <li class="get-started">
                     
                      <a class="get-started" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                     
                         {{ __('Logout') }}
                     
                      </a>
                     
                     </li>

                    </div>
            </li>

            
        @endguest
      </ul>
    </nav><!-- .nav-menu -->

  </div>
</header><!-- End Header -->
