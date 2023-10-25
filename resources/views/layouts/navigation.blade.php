<nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
         
        @if (Route::has('login'))
               
                    @auth
                    
                          <li>  <a href="{{ url('/dashboard') }}" class="nav-link scrollto">Dashboard</a> </li>
                    @else
                     <li><a class="nav-link scrollto " href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#departments">Departments</a></li>
          <li><a class="nav-link scrollto" href="#doctors">Doctors</a></li>
         
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          
                       <li> <a href="{{ route('login') }}" class="nav-link scrollto">Log in</a></li>

                        @if (Route::has('register'))
                           <li> <a href="{{ route('register') }}" class="nav-link scrollto">Register</a>
                        @endif
                    @endauth
            
            @endif
  
         
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->