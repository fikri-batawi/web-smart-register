<!DOCTYPE html>
<!--
	Be by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Be Free HTML5 Responsive Template | Template Stock</title>
		 
    <!-- =============== Bootstrap Core CSS =============== -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <!-- =============== fonts awesome =============== -->
    <link rel="stylesheet" href="assets/font/css/font-awesome.min.css" type="text/css">
    <!-- =============== Plugin CSS =============== -->
    <link rel="stylesheet" href="assets/css/animate.min.css" type="text/css">
    <!-- =============== Custom CSS =============== -->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <!-- =============== Owl Carousel Assets =============== -->
    <link href="assets/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="assets/owl-carousel/owl.theme.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

  <body>
    <!-- =============== Preloader =============== -->
    <div id="preloader">
      <div id="loading">
        <img width="256" height="32" src="assets/img/loading-cylon-red.svg">
      </div>
    </div>
    <!-- =============== nav =============== -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="assets/img/logo-kesehatan.png" width="50" height="50" alt="Logo"></a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <h3 style="color: #fff; padding-top: 10px;">SMART REGISTER VAKSINASI COVID-19</h3>
          </div>
          <!-- =============== navbar-collapse =============== -->
        </div>
      </div>
      <!-- =============== container-fluid =============== -->
    </nav>

    <!-- =============== header =============== -->
    <header id="home" class="blog-header">
    <!-- =============== container =============== -->
      <div class="container">
        <div class="header-content row">
          <div id="owl-demo" class="owl-carousel header1">
            <div>
              <div class="col-xs-12 col-sm-6 col-md-6 header-text">
                <div class="signup-form">
                  @if (session('message'))
                    <div class="alert alert-success" role="alert">
                      {{ session('message') }}
                    </div>
                  @endif
                  @if (session('error'))
                    <div class="alert alert-danger" role="alert">
                      {{ session('error') }}
                    </div>
                  @endif
                  <h1>Login</h1>
                  <form action="{{route('post.login')}}" method="post">
                    @csrf
                    <div class="mb-3 row">
                      <label for="email" class="col-sm-4 col-form-label" style="margin-top:10px;">Email</label>
                      <div class="col-sm-8">
                        <input type="email" class="form-control" id="email" name="email" require>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="password" class="col-sm-4 col-form-label" style="margin-top:10px;">Password</label>
                      <div class="col-sm-8">
                        <input type="password" class="form-control" id="password" name="password" require>
                      </div>
                    </div>
                    <div class="mb-3">
                      <button type="submit" class="btn btn-primary" style="color:#000;background:#fff;border-color:#000;">Login</button>
                      <a href="{{route('site.index')}}" style="color:#000;">Back To Home</a>
                    </div> 
                  </form>
                </div>
              </div>               
            </div>
          </div>				 
        </div>    
      </div>
    <!-- =============== container end =============== -->
    </header>
    <!-- =============== blog single =============== -->

    <!-- =============== jQuery =============== -->
    <script src="assets/js/jquery.js"></script>
    <!-- =============== Bootstrap Core JavaScript =============== -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- =============== Plugin JavaScript =============== -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.fittext.js"></script>
    <script src="assets/js/wow.min.js"></script> 
    <!-- =============== owl carousel =============== -->
    <script src="assets/owl-carousel/owl.carousel.js"></script>  
    <!-- Isotope does NOT require jQuery. But it does make things easier -->

    <script src="assets/js/baguetteBox.js" async></script>
    <script src="assets/js/plugins.js" async></script>

    <!-- =============== Custom Theme JavaScript =============== -->
    <script src="assets/js/creative.js">	</script> 
    <script src="assets/js/jquery.nicescroll.min.js"></script>

    <script>
      $(document).ready(function() {
      
      var nice = $("html").niceScroll();  // The document page (body)
      
      $("#div1").html($("#div1").html()+' '+nice.version);
        
        $("#boxscroll").niceScroll({cursorborder:"",cursorcolor:"#00F",boxzoom:true}); // First scrollable DIV

        $("#boxscroll2").niceScroll("#contentscroll2",{cursorcolor:"#F00",cursoropacitymax:0.7,boxzoom:true,touchbehavior:true});  // Second scrollable DIV
        $("#boxframe").niceScroll("#boxscroll3",{cursorcolor:"#0F0",cursoropacitymax:0.7,boxzoom:true,touchbehavior:true});  // This is an IFrame (iPad compatible)
      
        $("#boxscroll4").niceScroll("#boxscroll4 .wrapper",{boxzoom:true});  // hw acceleration enabled when using wrapper
        
      });
    </script>
  </body>
</html>

