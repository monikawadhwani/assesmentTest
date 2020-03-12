@extends('layouts.header')

                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Event Management') }}
                </a>
               
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <!-- @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else -->
                            
                                
                               <div><h3 class="name_title">Welcome {{ Auth::user()->name }}</h3></div>

                                
                                    <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                
                            
                        <!-- @endguest -->
                    </ul>
                </div>
            </div>
        
        <main class="py-4">
            @yield('content')
        </main>
    </div>
@extends('layouts.footer')