<nav class="my-nav navbar navbar-expand-md navbar-light shadow-sm">
    <div class="container">
        <a class="navbar-brand p-lg-3 p-2" href="{{ url('/') }}">
            <img src="{{asset('images\logo.png')}}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                
            </ul>

            

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link @if (\Request::is('home')) active @endif" href="{{route('home')}}">Home</a>
                </li>

                @guest

                <li class="nav-item">
                    <a class="nav-link @if (\Request::is('runinfo')) active @endif" href="#">Run Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if (\Request::is('registratiob')) active @endif" href="#registration">Registration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if (\Request::is('contactus')) active @endif" href="">Contact Us</a>
                </li>

                @else

                <li class="nav-item">
                    <a class="nav-link @if (\Request::is('participants')) active @endif" href="{{route('participants')}}">Participants</a>
                </li>
    
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>

                @endguest

            </ul>


        </div>
    </div>
</nav>
