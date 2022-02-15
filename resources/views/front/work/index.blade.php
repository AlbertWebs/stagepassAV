@extends('front.work.master')

@section('content')

         <!--Start of hero section-->
         <section class="hero-section">
            <h1><span>Our</span> Work</h1>
            <h4>Creative Solutions, Technical Excellence</h4>
            <div class="work-container-image">
              <div class="image-one">
                <img src="{{asset('theme/images/image-029.png')}}" alt="" />
                <div class="image-one-cover">
                  <h2>Kalasha International
                   Film Awards</h2>
                </div>
              </div>
              <div class="image-two">
               <img src="{{asset('theme/images/image-030.png')}}" alt="" />
               <div class="image-two-cover">
                 <h2>Japan Africa</h2>
               </div>
              </div>
              <div class="image-three">
               <img src="{{asset('theme/images/IMG_5247.JPG')}}" alt="" />
               <div class="image-one-cover">
                 <h2>Kalasha International
                  Film Awards</h2>
               </div>
              </div>
              <div class="image-four">
               <img src="{{asset('theme/images/IMG_6818.JPG')}}" alt="" />
               <div class="image-two-cover">
                 <h2>Safaricom</h2>
               </div>
              </div>
              <div class="image-five">
               <img src="{{asset('theme/images/IMG_7156.JPG')}}" alt="" />
               <div class="image-one-cover">
                 <h2>Event name</h2>
               </div>
              </div>
              <div class="image-six">
               <img src="{{asset('theme/images/IMG_6309.JPG')}}" alt="" />
               <div class="image-two-cover">
                 <h2>EABL</h2>
               </div>
              </div>
            </div>

             <!--Drop down that will appear when one click the navbar menu-->
             <div class="nav-drop-down" id="nav-menu">
               <div class="nav-drop-down-left">
                 <ul>
                   <li>
                     Full Production & Event Packages
                   </li>
                   <li>Visual</li>
                   <li>Staging Services</li>
                   <li>Lighting</li>
                   <li>Rigging & Truss Services</li>
                   <li>Graphics</li>
                   <li>Audio</li>
                   <li>Design Services</li>
                   <li>Equipment Rentals & Sales</li>
                 </ul>
               </div>
               <div class="nav-drop-down-right">
                 <ul>
                   <li><a href="index.html">Home</a></li>
                   <li><a href="about.html">About Us</a></li>
                   <li><a href="work.html">Our Work</a></li>
                   <li><a href="services.html">Av Services</a></li>
                   <li><a href="contact.html">Contact us</a></li>
                 </ul>
               </div>
             </div>
              <!--Drop down that will appear when one click the navbar menu-->
           </section>
           <!--End of hero section-->

            <!--Happy clients-->
       <section class="clients-container">
         <div class="clients-left">
           <h1>43234</h1>
           <h4>AV EQUIPMENT</h4>
         </div>
         <div class="clients-mid">
           <h1>421</h1>
           <h4>HAPPY CLIENTS</h4>
         </div>
         <div class="clients-right">
           <h1>2362</h1>
           <h4>EVENTS</h4>
         </div>
       </section>
       <!--End of happy clients-->
@endsection
