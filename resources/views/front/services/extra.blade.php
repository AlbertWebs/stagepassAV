@extends('front.services.master')

@section('content')
@foreach($Extra as $Service)
<!--Start of hero section-->
<section class="hero-section">
    <div class="hero-service">
        <img src="{{asset('theme/images/image-034.png')}}" alt="" />
        @foreach($Services as $Serv)
        <div class="hero-service-cover">
            <h1>{{$Serv->title}}</h1>
            @if($Serv->pre == '' OR $Serv->pre == null)

            @else
            <h4>
                {!!html_entity_decode($Serv->pre)!!}
            </h4>

            @endif
        </div>
        @endforeach
    </div>
    <!--Drop down that will appear when one click the navbar menu-->
    @include('front.menus.main')
    <!--Drop down that will appear when one click the navbar menu-->
</section>
<!--End of hero section-->
@if($Service->content == '' OR $Service->content == null)

@else
<!--no event is complete-->
<section class="no-event">
    <div class="no-event-top">

       <h4 class="service-content">
           {!!html_entity_decode($Service->content)!!}

       </h4>


    </div>
    <div class="no-event-bottom"></div>
</section>
@endif






<!--End of Extras-->

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
