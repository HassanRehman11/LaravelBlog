<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Hassan's Lab</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
            .navbar a:hover{
              border-bottom: 4px solid #18c25b;
            }  
          </style>  
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color: #22e1aa;">
            <div class="container">
                    <a class="navbar-brand" href="#">
                            <img src="https://www.isa-lille.fr/wp-content/uploads/2017/03/chemistry.png" width="30" height="30" class="d-inline-block align-top" alt="">
                            Hassan's Lab</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                    
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                <li>
                                    <a class="nav-link" href="/Home">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/blogs">Blogs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about">About</a>
                                </li>
                                
                                </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div>
            @yield('content')
          </div>
      
      
      
      <!-- Footer -->
      <footer class="page-footer font-small special-color-dark pt-4">
      
          <!-- Footer Elements -->
          <div class="container">
      
            <!-- Social buttons -->
            <ul class="list-unstyled list-inline text-center">
              <li class="list-inline-item">
                  <a href='https://www.facebook.com/Sheikhoo119' target="blank"><img src ={{asset('img/fb.png')}} width=60px height=60px/></a>
                
              </li>
              <li class="list-inline-item">
                  <a href='https://www.instagram.com/lalatoofani/' target="blank"><img src ={{asset('img/insta.png')}} width=60px height=60px/></a>
              </li>
              <li class="list-inline-item">
                  <a href='https://www.linkedin.com/in/hassan-rehman-0b594715a/' target="blank"><img src ={{asset('img/lin.png')}} width=60px height=60px/></a>
              </li>
              <li class="list-inline-item">
                  <a href='https://github.com/HassanRehman11' target="blank"><img src ={{asset('img/git.png')}} width=60px height=60px/></a>
              </li>
             
            </ul>
            <!-- Social buttons -->
      
          </div>
          <!-- Footer Elements -->
      
          <!-- Copyright -->
          <div class="footer-copyright text-center py-3">© 2018 Copyright:
            <a href="#">Sheikh Hassan Rehman</a>
          </div>
          <!-- Copyright -->
      
        </footer>
        <!-- Footer -->
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>
</body>
</html>
