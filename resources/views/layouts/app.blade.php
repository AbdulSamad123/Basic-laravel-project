<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acme</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>

    @include('inc.navbar')
    
    <div class="container">
      @if(Request::is('/'))
        @include('inc.showcase')
      @endif
      <div class="row mt-5">
         <div class="col-md-8 col-lg-8">
           @include('inc.messages')
           @yield('content')
         </div>
         <div class="col-md-4 col-lg-4">
           @include('inc.sidebar')
         </div>
      </div>
    </div> 

    <footer id="footer" class="text-center" style="margin-top: 30px; padding: 20px; color: #fff; background-color: #000;"> 
      <p>Copyright 2021 &copy; Acme</p> 
    </footer>

    
</body>
</html>