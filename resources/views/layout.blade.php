<!doctype html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Learning Laravel Website </title>
 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
 <script src="https://code.jquery.com/jquery.js"></script>
 <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="{{ asset('css/style.css') }}">

 <link href="{{ asset('css/landing-page.css') }}" rel="stylesheet">
 <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

 @yield('extralink')
</head>
<body>
 <header>
   <nav class="navbar navbar-default" role="navigation">
     <!-- Brand and toggle get grouped for better mobile display -->
     
     <div class="navbar-header">

       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-right">
       <li><a href="/">Home</a></li> 
       

       <li><a href="/payment">Payment</a></li>
       <li><a href="/contact">Contacts</a></li>
       <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products<b class="caret"></b></a>
        <ul class="dropdown-menu">

          @foreach($product as $produce)
          <li><a href="/products/{{$produce->name}}">{{$produce->name}}</a></li>
          @endforeach    
        </ul>
      </li>






    </ul>
  </div><!-- /.navbar-collapse -->
</nav>
</header>


@yield('content')



<div class="bottom-menu">
 <div class="container">
  <div class="row">
  <div class="col-md-2 navbar-brand" style="padding-right:20px;">
     <a href="/bangladesh">Bangladesh</a>
   </div>

   <div class="col-md-10">
     <ul class="bottom-links">
       <li><a href="/convert">Convertion Table</a></li>
       <li><a href="/about">About Us</a></li>
       <li><a href="/faq">FAQ's</a></li>
     </ul>
   </div>

 </div>
</div>
</div>

</body> </html>

<footer class="main">
  <p>Copyright © 1978-2012 Hossain Enterprise all reights reserved.</p>
  <p class="less-significant">
  </p>
</footer>

</body>
</html>