@extends('front.services.master')

@section('content')
@foreach($Services as $Service)
<!--Start of hero section-->
<section class="hero-section">
    <div class="hero-service">
        <img src="{{asset('theme/images/image-034.png')}}" alt="" />
        <div class="hero-service-cover">
            <h1>{{$Service->title}}</h1>
            @if($Service->pre == '' OR $Service->pre == null)

            @else
            <h4>
                {!!html_entity_decode($Service->pre)!!}
            </h4>
            @endif
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
        @if($Service->content == '' OR $Service->content == null)

        @else
        <h4>{!!html_entity_decode($Service->content)!!}
        </h4>
        @endif
    </div>
    <div class="no-event-bottom"></div>
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
@endforeach
@endsection
