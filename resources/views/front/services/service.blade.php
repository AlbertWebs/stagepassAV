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
<?php
    $Extras = DB::table('extras')->where('service_id',$Service->id)->get();
    $AllExtras = count($Extras);
    $count = 1;
?>
@if($AllExtras == 0)

@else
<!--End of no event is complete-->
<!--Start of Rigging and Truss-->
<section style="background-image: url('{{url('/')}}/uploads/backgrounds/bg.jpeg')" class="rigging rd-parallax bg-gray-base bg-fixed">
    <div class="rigging-top">
        <div class="container">
            <div class="row">
                @foreach($Extras as $value)
                    <div class="col-lg-6 col-md-6 col-sm-12 rigging-left">
                        <h2>{{$value->title}}</h2>
                        <h4 class="quote-body text-center">
                            <?php
                            $original_string = $value->content;
                            $num_words = 60;
                            $words = array();
                            $words = explode(" ", $original_string, $num_words);
                            $shown_string = "";
                            $link = url('/');

                            if(count($words) == 60){
                            $words[59] = "....";
                            }

                            $shown_string = implode(" ", $words);

                        ?>

                        {!!html_entity_decode($shown_string)!!}
                        </h4>
                        @if(count($words) == 60)
                        <button><a href="{{url('/av-services')}}/<?php echo "$Service->slung/$value->slung"; ?>">READ MORE</a></button>
                        @endif

                    </div>
                @endforeach
            </div>
        </div>
    </div>

</section>
<div style="clear: both"></div>
<!--End of Rigging and Truss-->
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
