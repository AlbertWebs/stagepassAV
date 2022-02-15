<!DOCTYPE html>
<html lan="en" dir="ltr">
   <head>
      <!--CSS-->
      <link rel="stylesheet" type="text/css" href="{{asset('theme/css/about.css')}}" />
      <meta charset="utf-8" />
      <meta name="description" content="The Metreprenuer is a collection..." />
      <meta name="author" content="Amos Billy" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta http-equiv="X-UA-Compatible" content="ie=edge" />
      {!! SEOMeta::generate() !!}
      {!! OpenGraph::generate() !!}
      {!! Twitter::generate() !!}
      {!! JsonLd::generate() !!}
      <link
         rel="icon"
         type="image/png"
         sizes="32x32"
         href="{{asset('theme/images/pink-icon.png')}}"
         />
      <!-- Fontawesome CDN Link -->
      <link
         href="https://fonts.googleapis.com/css?family=Oxygen:400,300,700"
         rel="stylesheet"
         type="text/css"
         />
      <link
         href="https://fonts.googleapis.com/css?family=Lora"
         rel="stylesheet"
         type="text/css"
         />
      <link
         rel="stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
         />

   </head>
   <body>
      <!--Start of site of container-->
      <section class="site-container">
         <!--Start of Header-->
         <header>
            <div class="nav-container">
               <div class="nav-container-left">
                  <div class="logo">
                     <a href="{{url('/')}}"><img src="{{asset('theme/images/real-logo.png')}}" class="logo-image" alt="Stagepass Audio Visual Limited" /></a>
                  </div>
               </div>
               <div class="nav-container-right">
                  <nav class="nav-ul">
                     <ul class="nav-ul-one">
                        <li class=""><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                     </ul>
                     <ul class="nav-ul-two">
                        <li class=""><a href=""><i class="fab fa-tumblr"></i></a></li>
                     </ul>
                     <ul class="nav-ul-three">
                        <li class=""><a href=""><i class="fab fa-facebook-f"></i></a></li>
                     </ul>
                     <ul class="nav-ul-four">
                        <li class=""><a href=""><i class="fab fa-twitter"></i></a></li>
                     </ul>
                     <ul class="nav-ul-five">
                        <li class=""><a href=""><i class="fab fa-instagram"></i></a></li>
                     </ul>
                     <ul class="nav-ul-six">
                        <button>GET AN AV QUOTE</button>
                     </ul>
                  </nav>
               </div>
               <div class="bars" id="nav-toggle">
                  <i class="fas fa-bars" aria-hidden="true"></i>
               </div>
            </div>
         </header>
         <!--End of Header-->
         @yield('content')
         <!--Footer-->
         <section class="footer-container">
            <div class="footer-left">
               <h4>QUICK CONTACT</h4>
               <div class="quick-container">
                  <div class="quick-container-left">
                     <h5>91 Mukima Lane,Mukima Drive, <br />
                        Along Garden Estate Rd <br />
                        Off Thika Super Highway <br />
                        P. O. Box 789-00606
                     </h5>
                  </div>
                  <div class="quick-container-right">
                     <ul>
                        <li>
                           <i class="fas fa-phone-alt"></i>
                           <h2>+254799029971</h2>
                        </li>
                        <li>
                           <i class="fas fa-envelope"></i>
                           <h4>info@stagepass.co.ke</h4>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="footer-mid">
               <h4>QUICK LINKS</h4>
               <div class="footer-links-container">
                  <div class="footer-links-left">
                     <ul>
                        <li><i class="fas fa-chevron-right"></i><a href="index.html">Home</a></li>
                        <li><i class="fas fa-chevron-right"></i><a href="about.html">About us</a></li>
                        <li><i class="fas fa-chevron-right"></i><a href="work.html">Our Work</a></li>
                     </ul>
                  </div>
                  <div class="footer-links-right">
                     <ul>
                        <li><i class="fas fa-chevron-right"></i><a href="#">Get Quote</a></li>
                        <li><i class="fas fa-chevron-right"></i><a href="#">Industries</a></li>
                        <li><i class="fas fa-chevron-right"></i><a href="contact.html">Contact Us</a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="footer-right">
               <h4>
               SUBSCRIBE</h2>
               <p>Get latest updates</p>
               <div class='searchBox'>
                  <input type="text" placeholder='Enter Your Email' />
                  <div class="email-envelope">
                     <i class="fas fa-envelope" class="searchIcon"></i>
                  </div>
               </div>
            </div>
         </section>
         <!--End of footer-->
         <!--main js-->
      </section>
      <!--End of site of container-->
      <script src="{{asset('theme/js/index.js')}}"></script>
      <script src="{{asset('theme/js/script.js')}}"></script>
   </body>
</html>
