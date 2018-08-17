<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hassan's Lab </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel ="stylesheet" href="{{ asset('css/app.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
    <script src="main.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script> 
    <style>
      .navbar a:hover{
        border-bottom: 4px solid #18c25b;
      }  
    </style>  
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #22e1aa;">
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
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dashboard
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Login</a>
                <a class="dropdown-item" href="#">Log Out</a>
                </div>
            </li>
            
            </ul>
            
            <form class="form-inline my-2 my-lg-0">
                    @yield('search')
           
            </form>
        </div>
    </nav>
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