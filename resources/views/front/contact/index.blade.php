@extends('front.contact.master')

@section('content')

 <!--Start of hero section-->
 <section class="hero-section">
    <div class="contact-hero">
      <img src="{{asset('theme/images/image-033.png')}}" alt="" />
      <div class="contact-hero-cover">
        <h1>Contact Us</h1>
        <h4>Creative Solutions, Technical Excellence</h4>
        <h2>With the right people in your corner,
         anything is achievable</h2>
         <ul>
           <li><i class="fab fa-linkedin-in"></i></li>
           <li><i class="fab fa-tumblr"></i></li>
           <li><i class="fab fa-facebook-f"></i></li>
           <li><i class="fab fa-twitter"></i></li>
           <li><i class="fab fa-instagram"></i></li>
         </ul>

         <div class="give-us-call">
           <div class="give-us-call-left">
             <h4>Give us a Call On</h4> <h4>Phone: 0799029971</h4>
           </div>
           <div class="give-us-call-right">
             <h4>Come Say hello at:</h4> <h4>91 Mukima Lane,Mukima Drive
               Along Garden Estate Rd off Thika
               Super Highway</h4>
           </div>
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
<!--Get in touch-->
<section class="get-in-touch">
    <h1>Get in <span>touch</span></h1>
    <form class="message-container">
      <div class="message-container-one">
        <input type="text" id="name" placeholder="Name" name="name">
        <input type="email" id="email" placeholder="Email" name="email" class="mail-mail">
      </div>
      <div class="message-container-two">
        <textarea name="message" id="message">Message</textarea>
      </div>
      <div class="message-container-three">
        <button class="yellow-button">Send</button><button class="black-button">Reset</button>
      </div>
    </form>
  </section>
  <!--End of Get in touch-->

  <!--Map section-->
  <section class="map-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1994.4483679513623!2d36.86626475789746!3d-1.2315073181839415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1607cace031f%3A0xf92242b77a4956a5!2sStagePass%20Audio%20Visual%20Limited!5e0!3m2!1sen!2ske!4v1643467353798!5m2!1sen!2ske" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </section>
  <!--End of Map Section-->

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
