@extends('layout.testprep.main')

@section('metatag')
<x-testprep.metatag :pagemeta="$pagemeta" />
@endsection

@section('main-container')
<body class="bg-white">
<x-testprep.navbar active="" />

<main class="contact contact-newupdt">
  <section class="section contusdtl-newupdt-toprow">
<div class="custom-container border-top">
<div class="row">
 <div class="col-lg-12 col-md-12">
<div class="tophdtext">
@include('components.utils.section-tag', ["title"=>"Contact Us"])
<h1 class="section--hero text--primary text--semi">We are here assist you</h1>
</div>
</div>
</div>
	
<div class="row contact-dtlwrap">
	  <div class="col-lg-4 col-md-4 divedline">
		  <div class="contusdtlbox adsrsbox">
		  <div class="location--address--icon"></div>
		 <p><span class="text--primary companyn">Canamprep Education Limited</span><span class="text--light text--regular addresstb">SCO 81-82, Level II, Sector 17-D, <br/> Chandigarh 160017 India,<br/> India</span></p>
</div>		 
</div>
        <div class="col-lg-4 col-md-4 divedline">
		 <div class="contusdtlbox schdlbox">
<div class="location--mobile--icon"></div>
<p><a href="tel:18001378055" class="text--primary phone">1800 137 5499</a>
		 <span class="text--light text--regular addresstb">Monday - Saturday<br/>
10AM to 6PM IST</span></p>	
</div>		 
</div>
		 <div class="col-lg-4 col-md-4 divedlinelast">
		  <div class="contusdtlbox emailbox">
		  <div class="location--mail--icon"></div>
		 <p><a href="mailto:info@canamgroup.com" class="text--primary email">info@canamprep.com</a></p>
</div>		 
		</div>
		
		 <!--
	
		 <div class="col-lg-4 col-md-4">
		 <div class="contusdtlbox jobjbox">
		   <p class="text--regular text--primary location--mail">
		   <span>Interested in working with us?</span>
		   <span class="wautoad">@include('components.utils.arrow-link', ["type"=>"link", "color"=>"red","arrow"=>"", "text"=>"Explore Jobs","link"=>"/career"])</span>
		   </p>
            
         </div>
		</div>-->
         
                 
          
       
		</div>

<div class="row horizdivline">
<div class="col-lg-12 col-md-12"></div>	  
</div>	
	
      
      <h2 class="section--title text--primary text--semi">Contact us!</h2>
      <div class="map" >
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15280146.09067862!2d73.72373388802687!3d20.770871580781524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1651222322558!5m2!1sen!2sin" width="100%" height="492" style="border:0;" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="row">
        @foreach($branches as $branch)


        <div class="col-xl-4 col-lg-6 col-md-6 col-12 location--card__container">
          <div class="location--card">
            <p class="location--name text--primary text--semi">{{ $branch->center_name }}</p>
            <p class="location--desc text--light text--regular">{{ $branch->address_line_1 }}</p>
            <p class="location--mobile text--regular"> @foreach(explode(',',$branch->contact) as $contact) <a href="tel:{{ $contact }}" class="text--primary">{{ $contact }}</a>@endforeach</p>
            <p class="location--mail text--regular"><a href="mailto:{{ $branch->email }}" class="text--primary">{{ $branch->email }}</a></p>
          </div>
        </div>
        @endforeach
       
        
      </div>
    </div>
  </section>
</main>

@endsection
@section('scripts')
<!-- Google Map-->
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyDvcScsrfxXAHJ0EWUUWN9Da2jS6rhki64"></script> 
<!--script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script-->
<script type="text/javascript" src="{{ url('/prep/js/jquery.gmap.js') }}"></script> 
@php


$i=0;
foreach($branches as $val){
if($val->international == 1){
  $image ='flag1.gif';
}
else{
  $image ='flag.gif';
}
  
  
  
  $latlong[$i]["latitude"]=$val->latitude;
  $latlong[$i]["longitude"]=$val->longitude; 
  $latlong[$i]["html"]=nl2br('<H4>Canam Consultants Limited</H4><br/>'.$val->address);
  $latlong[$i++]["icon"]=array(
              'image' =>$image,
              //iconsize: array(26, 46),
              'iconsize' => array(100, 78),
              'iconanchor' =>array(12,46),
            );
  
}

@endphp


<script type="text/javascript" charset="utf-8">
    
    
    $(function()
    {
       var img="flag.gif"
        var vlat=25.0000;
       var vlong=80.0000;
       
      // $('#map').gMap();

      
      
      $("#map_extended").gMap({

        controls: {
               panControl: true,
               zoomControl: false,
               mapTypeControl: false,
               scaleControl: true,
               streetViewControl: false,
               overviewMapControl: false
             },
        scrollwheel: true,
        //maptype: 'TERRAIN',
        markers:<?php echo json_encode($latlong ); ?>,

        latitude: vlat,
        longitude: vlong,
        zoom: 4
      });
    });
</script>
<!-- Google Map-->
@endsection