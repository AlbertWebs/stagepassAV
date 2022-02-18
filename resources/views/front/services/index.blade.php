@extends('front.services.master')

@section('content')
<!--Start of hero section-->
<section class="hero-section">
    <div class="hero-service">
        <img src="{{asset('theme/images/image-034.png')}}" alt="" />
        <div class="hero-service-cover">
            <h1>Graphics</h1>
            <h4>When organizing an intimate celebration or an
                arena concert, the objective is always flawless
                design. Lighting placement, staging, audio – the
                overall design of your event must be top-of-mind
                from the very start. StagePass Audio Visual can
                incorporate design services as part of your production package, or we are always happy to work
                with your designers. We love meeting new talent!
            </h4>
        </div>
    </div>
    <!--Drop down that will appear when one click the navbar menu-->
    @include('front.menus.main')
    <!--Drop down that will appear when one click the navbar menu-->
</section>
<!--End of hero section-->
<!--no event is complete-->
<section class="no-event">
    <div class="no-event-top">
        <h4>No event is complete without eye-catching visual content. Whether your visual story is told through signs,
            posters, printed back panels, or totems, we’ll make sure it’s told
            right. From custom 3D vinyl plotting, to the design of digital prints and logos, our well-equipped graphic
            design specialists are ready to take your event’s visual content to the
            next level. Long gone are the days of time consuming and expensive ‘last minute’ changes; we bring
            everything we need with us on-site, guaranteeing efficient, inexpensive
            graphic implementation at your event in the blink of an eye..
        </h4>
    </div>

</section>
<!--End of no event is complete-->




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
