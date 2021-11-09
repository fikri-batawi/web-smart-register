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
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" type="text/css">
    <!-- =============== fonts awesome =============== -->
    <link rel="stylesheet" href="{{asset('assets/font/css/font-awesome.min.css')}}" type="text/css">
    <!-- =============== Plugin CSS =============== -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}" type="text/css">
    <!-- =============== Custom CSS =============== -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" type="text/css">
    <!-- =============== Owl Carousel Assets =============== -->
    <link href="{{asset('assets/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('assets/owl-carousel/owl.theme.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/css/isotope-docs.css')}}" media="screen">
    <link rel="stylesheet" href="{{asset('assets/css/baguetteBox.css')}}">
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
            <a class="navbar-brand" href="#"><img src="assets/img/logo-kesehatan.png" width="50" height="50" alt="Logo">
            </a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a class="page-scroll" href="#home">Home</a>
              </li>
              <li>
                <a class="page-scroll" href="#about">About</a>
              </li>
              <li>
                <a class="page-scroll" href="#Panduan">Panduan</a>
              </li>
              <li>
                <a class="page-scroll" href="#Gallery">Gallery</a>
              </li>
              <li>
                <a class="page-scroll" href="#contact">Contact</a>
              </li>
            </ul>
          </div>
          <!-- =============== navbar-collapse =============== -->
        </div>
      </div>
    </nav>
    
    <!-- =============== header =============== -->
    <header id="home" class="header">
      <div class="container">
        <div class="header-content row">
          <div id="owl-demo" class="owl-carousel header1">
            <div>
              <div class="col-xs-12 col-sm-6 col-md-6 header-text">
                <h2 class="wow bounceIn animated" data-wow-delay=".40s">Lindungi Diri dan Sekitar dengan Berpartisipasi dalam <span>Program Vaksinasi</span> <br> COVID-19</h2>
                <p class="wow bounceIn animated" data-wow-delay=".60s">Anda tidak perlu datang untuk mengambil nomor antrian karena kami aplikasi smart register yang bisa diakses kapanpun dan dimanapun</p>
                <p>
                  <div class="btn btn-primary btn-lg btn-ornge wow bounceIn animated" data-wow-delay="1s"><i class="hbtn"></i> 
                    <span><a href="{{route('auth.login')}}" style="color:#ccff00;">Login</a></span>
                  </div>
                </p>
              </div>               
            </div>
            <div>
              <div class="col-xs-12 col-sm-6 col-md-6 header-text">
                <h2 class="wow bounceIn animated" data-wow-delay=".40s">Smart Register <span>Vaksinasi COVID-19</span> </h2>
                <h3 class="wow bounceIn animated" data-wow-delay=".50s">Belum punya akun? </h3>
                <p class="wow bounceIn animated" data-wow-delay=".60s">Daftar Sekarang!</p>
                <p>
                  <div class="btn btn-primary btn-lg btn-ornge wow bounceIn animated" data-wow-delay="1s"><i class="hbtn"></i> <span> <a href="{{route('auth.register')}}" style="color:#ccff00;">Registrasi Akun</a></span></i>
                  </div>
                </p>
              </div>               
            </div>
          </div>				 
        </div>       
      </div>
    </header>

    <!-- =============== About =============== -->
    <section id="about" class="">
      <div class="container">            
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 wow fadeInDown animated" data-wow-delay=".5s">
            <h2>About Us</h2>
            <h3><strong>Vaksinasi COVID-19</strong></h3>
            <p>Vaksin merupakan antigen (mikroorganisma) yang diinaktivasi atau dilemahkan yang bila diberikan kepada orang yang sehat untuk menimbulkan antibodi spesifik terhadap mikroorganisma tersebut, sehingga bila kemudian terpapar, akan kebal dan tidak terserang penyakit.</p>
            <p>Bahan dasar membuat vaksin tentu memerlukan mikroorganisma, baik virus maupun bakteri. Menumbuhkan mikroorganisma memerlukan media tumbuh yang disimpan pada suhu tertentu. Mikroorganisma yang tumbuh kemudian akan dipanen, diinaktivasi, dimurnikan, diformulasi dan kemudian dikemas.</p>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 wow fadeInRight animated" data-wow-delay=".5s">
            <h3><strong>Smart Register</strong></h3>              
            <p>Smart Register merupakan sistem aplikasi pendaftaran berbasis website yang digunakan untuk merekam atau memantau pendaftaran dari penggunanya serta dapat mencetak setiap transaksi yang dilakukan oleh pengguna.</p>
          </div>     
        </div>
      </div>   	
    </section>

    <!-- =============== Panduan =============== -->
    <section class="for-box">
			<section id="Panduan" class="">
				<div class="container">            
					<div class="row">
            <h2>Panduan</h2>
					</div>	
        </div>
			</section>	
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-3 wow rotateInDownLeft animated" data-wow-delay=".1s">
            <div class="for-box-crecl">
              <i class="fa fa-user-plus" aria-hidden="true"></i>
            </div>
            <div class="clr1">				
              <h2>
                REGISTRASI<br/>AKUN
              </h2>
            </div>
            <div class="wbox">
              <p>Langkah pertama yaitu Registrasi Akun dengan cara membuat akun dan menginput data berupa: <strong>Nama, No.Telp, Jenis Kelamin, Tempat Tanggal Lahir, Alamat, E-mail dan Password</strong></p>
              <a href="#" class="clr1-a">+</a>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 wow rotateInDownLeft animated" data-wow-delay=".2s">
            <div class="for-box-crecl">
              <i class="fa fa-sign-in" aria-hidden="true"></i>>
            </div>
            <div class="clr2">				
              <h2>
                LOGIN<br/>AKUN
              </h2>
            </div>
            <div class="wbox">
              <p>Langkah kedua yaitu setelah berhasil Registrasi Akun maka Login dengan menginput data berupa: <strong>E-mail dan Password</strong> yang telah di registrasikan di awal. Sehingga masuk ke beranda akun Anda.</p>
              <a href="#" class="clr2-a">+</a>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 wow rotateInDownRight animated" data-wow-delay=".3s">
            <div class="for-box-crecl">
              <i class="fa fa-user-plus" aria-hidden="true"></i>
            </div>
            <div class="clr3">				
              <h2>
                REGISTRASI<br/>VAKSIN
              </h2>	
            </div>
            <div class="wbox">
              <p>Langkah ketiga yaitu lakukan Registrasi untuk vaksin dengan melengkapi data berupa: <strong>NIK serta melengkapi persyaratan lainnya</strong> apakah boleh atau tidaknya untuk vaksin sesuai persyaratan yang diisi.</p>
              <a href="#" class="clr3-a">+</a>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 wow rotateInDownRight animated" data-wow-delay=".4s">
            <div class="for-box-crecl">
              <i class="fa fa-stethoscope" aria-hidden="true"></i>
            </div>
            <div class="clr4">				
              <h2>
                PENANGANAN<br/>VAKSIN
              </h2>
            </div>
            <div class="wbox">
              <p>Langkah terakhir yaitu ketika semua data sudah diisi lalu klik submit dan akan muncul hasil kelayakan apakah boleh, ditunda atau tidak boleh untuk vaksin sesuai data yang telah pasien isi.</p>
              <a href="#" class="clr4-a">+</a>
            </div>
          </div>
        </div>
      </div>
    </section>
      
    <!-- =============== Gallery =============== -->
    <section id="Gallery" class="wow flipInX animated" data-wow-delay=".5s">
      <div class="title">
        <h2>Gallery</h2>
      </div>
      <div class="big-demo go-wide" data-js-module="filtering-demo">
        <div class="container">            
          <div class="row">
            <div class="filter-button-group button-group js-radio-button-group">
              <button style="color:#ccff00;" class="button is-checked" data-filter="*">show all</button>
              <button style="color:#ccff00;" class="button" data-filter=".jenisvaksin">Jenis Vaksin</button>
              <button style="color:#ccff00;" class="button" data-filter=".tips">Tips</button>  
              <button style="color:#ccff00;" class="button" data-filter=".vaksinasi">Vaksinasi</button>  
            </div>
          </div>
        </div>

        <div class="grid baguetteBoxThree gallery">
          <div class="element-item transition jenisvaksin " data-category="post-transition">
            <a href="assets/img/gallery/astra.jpg">	 
              <img src="assets/img/gallery/astra.jpg"/>      
              <div class="hover-img"> 
                <h2>Jenis Vaksin</h2>
                <i class="fa fa-camera camera"></i>
              </div>
            </a>
          </div>      
          <div class="element-item post-transition tips " data-category="post-transition">
            <a href="assets/img/gallery/masker.png">	 
              <img src="assets/img/gallery/masker.png"/>    
              <div class="hover-img"> 
                <h2>Tips</h2>
                <i class="fa fa-camera camera"></i>
              </div>		
            </a>
          </div>
          <div class="element-item post-transition jenisvaksin " data-category="post-transition">
            <a href="assets/img/gallery/sinovac.jpg">	 
              <img src="assets/img/gallery/sinovac.jpg"/>       
              <div class="hover-img"> 
                <h2>Jenis Vaksin</h2>
                <i class="fa fa-camera camera"></i>
              </div>		
            </a>
          </div>
          <div class="element-item transition tips " data-category="post-transition">
            <a href="assets/img/gallery/cucitangan.png">	 
              <img src="assets/img/gallery/cucitangan.png"/>       
              <div class="hover-img"> 
                <h2>Tips</h2>
                <i class="fa fa-camera camera"></i>
              </div>	
            </a>		
          </div>      
          <div class="element-item post-transition tips " data-category="post-transition">
            <a href="assets/img/gallery/jagajarak.png">	 
              <img src="assets/img/gallery/jagajarak.png"/>       
              <div class="hover-img"> 
                <h2>Tips</h2>
                <i class="fa fa-camera camera"></i>
              </div>	
            </a>
          </div>
          <div class="element-item post-transition vaksinasi " data-category="post-transition">
            <a href="assets/img/gallery/jkw.jpeg">	 
              <img src="assets/img/gallery/jkw.jpeg"/>       
              <div class="hover-img"> 
                <h2>Vaksinasi</h2>
                <i class="fa fa-camera camera"></i>
              </div>	
            </a>
          </div>
          <div class="element-item post-transition jenisvaksin " data-category="post-transition">
            <a href="assets/img/gallery/pfizer.jpeg">	 
              <img src="assets/img/gallery/pfizer.jpeg"/>       
              <div class="hover-img"> 
                <h2>Jenis Vaksin</h2>
                <i class="fa fa-camera camera"></i>
              </div>	
            </a>
          </div>
          <div class="element-item transition vaksinasi " data-category="post-transition">
            <a href="assets/img/gallery/yy.jpeg">	 
              <img src="assets/img/gallery/yy.jpeg"/>       
              <div class="hover-img"> 
                <h2>Vaksinasi</h2>
                <i class="fa fa-camera camera"></i>
              </div>	
            </a>
          </div>      
          <div class="element-item post-transition tips " data-category="post-transition">
            <a href="assets/img/gallery/makan.png">	 
              <img src="assets/img/gallery/makan.png"/>       
              <div class="hover-img"> 
                <h2>Tips</h2>
                <i class="fa fa-camera camera"></i>
              </div>	
            </a>
          </div>
          <div class="element-item post-transition jenisvaksin " data-category="post-transition">
            <a href="assets/img/gallery/moderna.jpg">	 
              <img src="assets/img/gallery/moderna.jpg"/>       
              <div class="hover-img"> 
                <h2>Jenis Vaksin</h2>
                <i class="fa fa-camera camera"></i>
              </div>	
            </a>          
          </div>
          <div class="element-item post-transition vaksinasi " data-category="post-transition">
            <a href="assets/img/gallery/anak.jpeg">	 
              <img src="assets/img/gallery/anak.jpeg"/>       
              <div class="hover-img"> 
                <h2>Vaksinasi</h2>
                <i class="fa fa-camera camera"></i>
              </div>	
            </a>
          </div>
          <div class="element-item transition vaksinasi " data-category="post-transition">
            <a href="assets/img/gallery/nakes.jpg">	 
              <img src="assets/img/gallery/nakes.jpg"/>       
              <div class="hover-img"> 
                <h2>Vaksinasi</h2>
                <i class="fa fa-camera camera"></i>
              </div>	
            </a>
          </div>      
        </div>
      </div>
    </section>

    <!-- =============== Contact =============== -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="title">
            <h2>Contact</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 wow bounceIn animated" data-wow-delay=".1s">
            <form action="#" method="post">
              <div class="ajax-hidden">
                <div class="col-xs-12 col-sm-6 col-md-6 form-group wow fadeInUp animated">
                  <label for="c_name" class="sr-only">Name</label>
                  <input type="text" placeholder="Name" name="name" class="form-control" id="name" required="">
                </div>

                <div data-wow-delay=".1s" class="col-xs-12 col-sm-6 col-md-6 form-group wow fadeInUp animated">
                  <label for="c_email" class="sr-only">Email</label>
                  <input type="email" placeholder="E-mail" name="email" class="form-control" id="email" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" placeholder="e.g. info@envato.com" required="">
                </div>

                <div data-wow-delay=".2s" class="col-xs-12 col-sm-12 col-md-12 form-group wow fadeInUp animated">
                  <textarea placeholder="Message" rows="7" name="description" id="description" class="form-control" required=""></textarea>
                </div>

                <button data-wow-delay=".3s" class="btn btn-sm btn-block wow fadeInUp animated" type="submit">Send Message</button>
              </div>
              <div class="ajax-response"></div>
            </form>
          </div>              
        </div>
      </div>
    </section>
    
    <!-- Footer -->
    <footer id="footer">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6">
            <ul class="social-links">
              <li><a class="wow fadeInUp animated" href="index.html#" style="visibility: visible; animation-name: fadeInUp;"><i class="fa fa-facebook"></i></a></li>
              <li><a data-wow-delay=".1s" class="wow fadeInUp animated" href="index.html#" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"><i class="fa fa-twitter"></i></a></li>
              <li><a data-wow-delay=".2s" class="wow fadeInUp animated" href="index.html#" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;"><i class="fa fa-google-plus"></i></a></li>
              <li><a data-wow-delay=".4s" class="wow fadeInUp animated" href="index.html#" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;"><i class="fa fa-pinterest"></i></a></li>
              <li><a data-wow-delay=".5s" class="wow fadeInUp animated" href="index.html#" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;"><i class="fa fa-envelope"></i></a></li>
            </ul>
            <p class="copyright"> &copy; 2021 Vaksin. Created By Tian Maylani </p>
          </div>
          <div data-wow-delay=".6s" class="col-xs-12 col-sm-6 col-md-6 wow bounceIn  animated" style="visibility: visible; animation-delay: 0.6s; animation-name: bounceIn;">
            <section class="widget widget_text" id="text-15">
              <h3 class="widget-title">Jakarta, Indonesia</h3> <div class="textwidget">786, Firs Avenue, The Mall,<br>
              <p>Telp: (021) 7545678<br>
              Mobile: (+62) 858-8657-5654<br>
              E-mail: <a href="#">info@Vaksin.com</a></p>
            </section>
          </div>
        </div>
      </div>
    </footer>    
    <!-- =============== jQuery =============== -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/isotope-docs.min.js"></script>
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
    <script>
      window.onload = function() {
          if(typeof oldIE === 'undefined' && Object.keys)
              hljs.initHighlighting();

          baguetteBox.run('.baguetteBoxOne');
          baguetteBox.run('.baguetteBoxTwo');
          baguetteBox.run('.baguetteBoxThree', {
              animation: 'fadeIn'
          });
          baguetteBox.run('.baguetteBoxFour', {
              buttons: false
          });
          baguetteBox.run('.baguetteBoxFive', {
              captions: function(element) {
                  return element.getElementsByTagName('img')[0].alt;
              }
          });
      };
    </script>
  </body>
</html>