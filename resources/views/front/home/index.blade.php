@extends('front.home.master')

@section('content')
 <!--Start of hero section-->
 <section class="hero-section">
    <div class="slider">
      <!-- fade css -->
      <div class="myslide fade">
        <div class="txt">
          <p>
            <span class="we-create-most">We create most engaging </span> <br />
            events in the world using  <br />
           technology
          </p>
        </div>
        <img src="{{asset('theme/images/IMG_5309.JPG')}}" style="width: 100%; height: 100%" />
      </div>

      <div class="myslide fade">
        <div class="txt">
          <p>
            <span class="we-create-most">We create most engaging </span> <br />
            events in the world using  <br />
           technology
          </p>
        </div>
        <img src="{{asset('theme/images/IMG_5306.JPG')}}" style="width: 100%; height: 100%" />
      </div>

      <div class="myslide fade">
        <div class="txt">
          <p>
            <span class="we-create-most">We create most engaging </span> <br />
            events in the world using  <br />
           technology
          </p>
        </div>
        <img src="{{asset('theme/images/IMG_5298.JPG')}}" style="width: 100%; height: 100%" />
      </div>

      <div class="myslide fade">
        <div class="txt">
          <p>
            <span class="we-create-most">We create most engaging </span> <br />
            events in the world using  <br />
           technology
          </p>
        </div>
        <img src="{{asset('theme/images/IMG_5245.JPG')}}" style="width: 100%; height: 100%" />
      </div>

      <div class="myslide fade">
        <div class="txt">
          <p>
            <span class="we-create-most">We create most engaging </span> <br />
            events in the world using  <br />
           technology
          </p>
        </div>
        <img src="{{asset('theme/images/image-034.png')}}" style="width: 100%; height: 100%" />
      </div>
      <!-- /fade css -->

      <!-- onclick js -->
      <a class="prev" onclick="plusSlides(-1)"><i class="fas fa-chevron-left"></i></a>
      <a class="next" onclick="plusSlides(1)"><i class="fas fa-chevron-right"></i></a>

      <div class="dotsbox" style="text-align: center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
      </div>
      <!-- /onclick js -->
    </div>

    <div class="hero-top-cover">
      <a href="#sec-2">
        <div class="scroll-down"></div>
      </a>
    </div>

    <!--Drop down that will appear when one click the navbar menu-->
    @include('front.menus.main')
     <!--Drop down that will appear when one click the navbar menu-->
  </section>
  <!--End of hero section-->

  <!--One stop solution-->
  <section class="stop-solution" id="sec-2">
    <div class="top-solution-one">
      <div class="top-solution-one-left">
        <div class="header-solution">
          <h2 class="intro-text">
            One-Stop-Solution For All <br />
            Your AV Services
          </h2>
        </div>
        <div class="p-solution">
          <p>
            From concept to set-up to on-site support, <br />
            we are there every step of the way to provide <br />
            you with the exceptional product and service <br />
            you deserve.
          </p>
        </div>
        <div class="button-parent">
          <button class="top-solution-button">Learn More</button>
        </div>
      </div>
      <div class="top-solution-one-right">
        <img src="{{asset('theme/images/image-034.png')}}" alt="" />
      </div>
    </div>
    <div class="top-solution-two">
      <img src="{{asset('theme/images/image-033.png')}}" alt="" />
      <div class="top-solution-two-cover">
        <div class="cover-header-one">
          <h1>
            Our <br />
            Vision
          </h1>
        </div>
        <div class="cover-header-two">
          <p>To Be Africa's Revolutionary Events Technology Experts</p>
        </div>
      </div>
    </div>
  </section>
  <!--End of one stop solution-->

  <!--About us and our capabilities section-->
  <section class="about-capability" id="sec-3">
    <div class="about-capability-top">
      <div class="about-top-left">
        <img src="{{asset('theme/images/image-032.png')}}" alt="" />
      </div>
      <div class="about-top-right">
        <h1>About <span>Us</span></h1>
        <p>
          StagePass Audio-Visual Limited is an integrated technical,
          consulting, planning, design and implementation provider for
          professional events based in Nairobi and operating within Africa.
          We specialize in rentals of Audio-Visual technology including
          Sound, Screens, Lighting, Content Management, Digital and
          Interactive technology and scenic design. In addition, we also do
          the traditional aspects of events e.g. events logistics and venue
          bookings. Our expertise combined with our extensive inventory of
          AV technologies gives us the unique ability to serve our clients,
          in a variety of industries, from concept to completion.
        </p>
      </div>
    </div>
    <div class="capability-mid"></div>
    <div class="about-capability-bottom">
      <div class="capability-left"></div>
      <div class="capability-right">
        <!--Capability slider-->
        <div class="slide slide1">
          <div class="pose">
            <p>
              Full Production & Event Packages
            </p>

            <button class="learn-more">Learn More</button>
          </div>
          <div class="back-image">
            <img src="{{asset('theme/images/image-031.png')}}" alt="" />
          </div>
        </div>
        <div class="slide slide2">
          <div class="pose">
            <p>
              Visual
            </p>
            <button class="learn-more">Learn More</button>
          </div>
          <div class="back-image">
            <img src="{{asset('theme/images/IMG_7156.JPG')}}" alt="" />
          </div>
        </div>
        <div class="slide slide3">
          <div class="pose">
            <p>
              Staging Services
            </p>
            <button class="learn-more">Learn More</button>
          </div>
          <div class="back-image">
            <img src="{{asset('theme/images/IMG_6818.JPG')}}" alt="" />
          </div>
        </div>

        <div class="slide slide1">
          <div class="pose">
            <p>
                Lighting
            </p>
            <button class="learn-more">Learn More</button>
          </div>
          <div class="back-image">
            <img src="{{asset('theme/images/IMG_8302.JPG')}}" alt="" />
          </div>
        </div>
        <div class="slide slide2">
          <div class="pose">
            <p>
              Rigging & Truss Services
            </p>
            <button class="learn-more">Learn More</button>
          </div>
          <div class="back-image">
            <img src="{{asset('theme/images/IMG_6710.JPG')}}" alt="" />
          </div>
        </div>
        <div class="slide slide3">
          <div class="pose">
            <p>
              Graphics
            </p>
            <button class="learn-more">Learn More</button>
          </div>
          <div class="back-image">
            <img src="{{asset('theme/images/image-031.png')}}" alt="" />
          </div>
        </div>

        <div class="slide slide1">
          <div class="pose">
            <p>
              Audio
            </p>
            <button class="learn-more">Learn More</button>
          </div>
          <div class="back-image">
            <img src="{{asset('theme/images/image-031.png')}}" alt="" />
          </div>
        </div>
        <div class="slide slide2">
          <div class="pose">
            <p>
              Design Services
            </p>
            <button class="learn-more">Learn More</button>
          </div>
          <div class="back-image">
            <img src="{{asset('theme/images/IMG_5245.JPG')}}" alt="" />
          </div>
        </div>
        <div class="slide slide3">
          <div class="pose">
            <p>
              Equipment Rentals & Sales
            </p>
            <button class="learn-more">Learn More</button>
          </div>
          <div class="back-image">
            <img src="{{asset('theme/images/IMG_7163.JPG')}}" alt="" />
          </div>
        </div>
        <div id="arrow-left" class="arrow">
          <i class="fas fa-chevron-left"></i>
        </div>
        <div id="arrow-right" class="arrow">
          <i class="fas fa-chevron-right"></i>
        </div>
        <!--end of capability slider-->
      </div>
      <h1>Our Capabilities</h1>
    </div>
  </section>
  <!--End of about us and our capabilities section-->

  <!--Kalasha and Japan-->
  <section class="kalasha-japan">
    <div class="kalasha-container">
      <div class="slide-container-kalasha">

        <div class="container-kalasha" id="slidery">
          <div class="thumbnaily thumbnail-one">
            <h2>Kalasha International Film Awards</h2>
            <img src="{{asset('theme/images/image-029.png')}}" alt="" />
          </div>
          <div class="thumbnaily thumbnail-two">
            <h2>Japan Africa</h2>
            <img src="{{asset('theme/images/image-030.png')}}" alt="" />
          </div>
          <div class="thumbnaily thumbnail-three">
            <h2>Kalasha International Film Awards</h2>
            <img src="{{asset('theme/images/IMG_5247.JPG')}}" alt="" />
          </div>
          <div class="thumbnaily thumbnail-four">
            <h2>Safaricom</h2>
            <img src="{{asset('theme/images/IMG_6818.JPG')}}" alt="" />
          </div>
          <div class="thumbnaily thumbnail-five">
            <h2>Event name</h2>
            <img src="{{asset('theme/images/IMG_7156.JPG')}}" alt="" />
          </div>
          <div class="thumbnaily thumbnail-six">
            <h2>EABL</h2>
            <img src="{{asset('theme/images/IMG_6309.JPG')}}" alt="" />
          </div>
        </div>

          <!--Arrows-->
        <div id="lefty-slide" class="arrowy lefti">
          <i class="fas fa-chevron-left"></i>
        </div>
        <div id="righty-slide" class="arrowy righti">
          <i class="fas fa-chevron-right"></i>
        </div>
          <!--End of arrows-->

       </div>
    </div>


    <div class="instam">
      <button>Go to instagram</button>
    </div>
  </section>
  <!--End of Kalasha and Japan-->

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

  <!--Ours-->
  <section class="ours">
    <div class="ours-left">
      <h1>Our<span> <br />Clients</span></h1>
    </div>
    <div class="ours-right">
      <div class="ours-right-one">
        <img src="{{asset('theme/images/image-018.png')}}" alt="" />
      </div>
      <div class="ours-right-two">
        <img src="{{asset('theme/images/image-015.png')}}" alt="" />
      </div>
      <div class="ours-right-three">
        <img src="{{asset('theme/images/image-020.png')}}" alt="" />
      </div>
      <div class="ours-right-four">
        <img src="{{asset('theme/images/image-016.png')}}" alt="" />
      </div>
      <div class="ours-right-five">
        <img src="{{asset('theme/images/image-013.png')}}" alt="" />
      </div>
      <div class="ours-right-six">
        <img src="{{asset('theme/images/image-010.png')}}" alt="" />
      </div>
      <div class="ours-right-seven">
        <img src="{{asset('theme/images/image-008.png')}}" alt="" />
      </div>
      <div class="ours-right-eight">
        <img src="{{asset('theme/images/image-006.png')}}" alt="" />
      </div>
      <div class="ours-right-nine">
        <img src="{{asset('theme/images/image-005.png')}}" alt="" />
      </div>
      <div class="ours-right-ten">
        <img src="{{asset('theme/images/image-004.png')}}" alt="" />
      </div>
      <div class="ours-right-eleven">
        <img src="{{asset('theme/images/image-000.png')}}" alt="" />
      </div>
      <div class="ours-right-twelve">
        <img src="{{asset('theme/images/image-002.png')}}" alt="" />
      </div>
      <div class="ours-right-thirteen">
        <img src="{{asset('theme/images/image-026.png')}}" alt="" />
      </div>
      <div class="ours-right-fourteen">
        <img src="{{asset('theme/images/image-024.png')}}" alt="" />
      </div>
      <div class="ours-right-fifteen">
        <img src="{{asset('theme/images/image-022.png')}}" alt="" />
      </div>
      <div class="ours-right-sixteen">
        <img src="{{asset('theme/images/image-028.png')}}" alt="" />
      </div>
    </div>
  </section>
  <!--End of ours-->
@endsection
