<div class="nav-drop-down" id="nav-menu">
    <div class="nav-drop-down-left">
      <ul>
        <?php $Services = DB::table('services')->get(); ?>
        @foreach ($Services as $Service)
        <li>
            <a style="color:#000000" href="{{url('/')}}/av-services/{{$Service->slung}}">{{$Service->title}}</a>
        </li>
        @endforeach
      </ul>
    </div>
    <div class="nav-drop-down-right">
      <ul>
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a href="{{url('/')}}/about-us">About Us</a></li>
        <li><a href="{{url('/')}}/our-work">Our Work</a></li>
        <li><a href="{{url('/')}}/av-services/full-production-event-packages">Av Services</a></li>
        <li><a href="{{url('/')}}/contact-us">Contact us</a></li>
      </ul>
    </div>
  </div>
