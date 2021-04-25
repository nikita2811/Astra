<!DOCTYPE html>
<html>
<head>
	<title>Astra | Dashboard</title>
	@include('layouts.styleapp')
	<link rel="stylesheet" href="{{ URL::asset('public/css/style.css')}}">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
    .dark-theme{
  background-color: #343a40;
}
.light-theme{
  background-color: #fff;
}
  </style>
  
</head>
<body>



      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container">
        <div class="navbar-brand">
          <!--<img src="{{public_path('1.png')}}">-->
         Astra</div>
        

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
             <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
          
             <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="#">Privacy Policy</a>
            </li>
            
          </ul>
        </div>
      </div>
      </nav>
       <div class="container">
        @yield('content')
    
</div>
<footer></footer>
</body>
</html>

    