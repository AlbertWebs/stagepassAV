@extends('front.about.master')

@section('content')
 <!--Start of hero section-->
 <section class="hero-section">
    <div class="about-hero">
       <div class="about-hero-top">
          <div class="about-hero-top-left">
             <img src="{{asset('theme/images/image-032.png')}}" alt="" />
          </div>
          <div class="about-hero-top-right">
             <h1>About Us</h1>
             <p>StagePass Audio-Visual Limited is an integrated technical, consulting, planning, design and
                implementation provider for professional events based in Nairobi and operating within Africa.
                We specialize in rentals of Audio-Visual technology including Sound, Screens, Lighting,
                Content Management, Digital and Interactive technology and scenic design. In addition,
                we also do the traditional aspects of events e.g. events logistics and venue bookings.
                Our expertise combined with our extensive inventory of AV technologies gives us the unique
                ability to serve our clients, in a variety of industries, from concept to completion.
             </p>
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
       </div>
       <div class="about-hero-bottom"></div>
    </div>
 </section>
 <!--End of hero section-->
 <!--our Core Values-->
 <section class="core-container">
    <img src="{{asset('theme/images/IMG_5306.JPG')}}" alt="" />
    <div class="core-cover">
       <h1>Core <span>Values</span></h1>
       <p>Stagepass Audio Visual serves clients with deep experience, professionalism and passion.
          Our creative muscle brings life to powerful ideas anchored in solid strategic thinking with
          laser-sharp execution that turns heads
       </p>
    </div>
 </section>
 <!--End of Our Core Values-->
 <!--professionalism and intergrity-->
 <section class="profession-container">
    <div class="slide-container">
       <div class="container" id="slider">
          <div class="thumbnail thumbnail-one">
             <h2>Professionalism</h2>
             <p>Treating others courteously and
                communicating respectfully
             </p>
          </div>
          <div class="thumbnail thumbnail-two">
             <h2>Integrity</h2>
             <p>We seek to maintain the highest levels of integrity
                and honesty in all our operations.
             </p>
          </div>
          <div class="thumbnail thumbnail-three">
             <h2>Consideration</h2>
             <p>No project is too big or too small. Each should be
                serviced with the same consideration and focus on
                the client’s needs, wants and expectations, regardless
                of the size of the event.
             </p>
          </div>
          <div class="thumbnail thumbnail-four">
             <h2>Understanding</h2>
             <p>All people and situations are unique. We start all relationships and processes with understanding.</p>
          </div>
          <div class="thumbnail thumbnail-five">
             <h2>Passion</h2>
             <p>Inspired to go the extra mile with pride and enthusiasm.</p>
          </div>
          <div class="thumbnail thumbnail-six">
             <h2>Experience</h2>
             <p>The experience is what will resonate with our people, our clients and their audience. Everything we do is in support of elevating that experience.</p>
          </div>
          <div class="thumbnail thumbnail-seven">
             <h2>Expanding the art of the possible</h2>
             <p>We start with the perspective that the goal is not simply to apply best practice but to invent it. Each client is unique, and there is seldom only one solution. We believe that breakthrough ideas often result from the work of teams seeking to creatively solve real client challenges. We seek to extend the art and science of event management by generalizing from our experience.</p>
          </div>
       </div>
       <!--Arrows-->
       <div id="slide-left" class="arrow lefti" onclick="plusSlides2(-1)">
          <i class="fas fa-chevron-left"></i>
       </div>
       <div id="slide-right" class="arrow righti" onclick="plusSlides2(1)">
          <i class="fas fa-chevron-right"></i>
       </div>
       <!--End of arrows-->
    </div>
 </section>
 <!--professionalism and intergrity-->
 <!--Common Mission-->
 <section class="mission-container">
    <h2>Our common mission is to go Beyond Technology by providing innovative
       solutions you can trust, through an unparalleled approach to quality,
       service, and support. <span>We take pride in our work, values, and most
       importantly, our people.</span>
    </h2>
 </section>
 <!--End of Common Mission-->
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
