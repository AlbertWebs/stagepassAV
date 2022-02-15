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
            @include('front.menus.main')
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
