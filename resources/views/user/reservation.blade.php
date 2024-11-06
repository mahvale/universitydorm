<!DOCTYPE html>
<html lang="en">
  <head>
    <title>UniversityDorm </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="/user/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/user/css/animate.css">
    
    <link rel="stylesheet" href="/user/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/user/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/user/css/magnific-popup.css">

    <link rel="stylesheet" href="/user/css/aos.css">

    <link rel="stylesheet" href="/user/css/ionicons.min.css">

    <link rel="stylesheet" href="/user/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/user/css/jquery.timepicker.css">
 
    
    <link rel="stylesheet" href="/user/css/flaticon.css">
    <link rel="stylesheet" href="/user/css/icomoon.css">
    <link rel="stylesheet" href="/user/css/style.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">UniversityDorm</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="/etudiant" class="nav-link active">Chambres</a></li>
	          <li class="nav-item"><a href="/residences" class="nav-link">Residences</a></li>
	          <li class="nav-item"><a href="/blocks" class="nav-link">Block</a></li>
	          <li class="nav-item"><a href="/reservation2" class="nav-link">Reservation</a></li>
	          <li class="nav-item"><a href="/logout" class="nav-link">Quitter</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
@forelse($reservations as $r)
    <div class="hero-wrap" style="background-image: url('files/{{$r->chambre_photo}}');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="">RESERVATION</a></span> <span>A propos</span></p>
	            <h1 class="mb-4 bread">RESERVATION</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
     @empty
       <p class="text-center text-lg bg-warning" >AUCUNE RESERVATION</p>
@endforelse 
    	<div class="tab-content" id="resultsTable">
    		@foreach($reservations as $r) 
                 <p class="text-lg" style="font-size: 34px;text-align: center;margin-top: 20px;">
                 	SALUT Mr {{$user->name}} votre reservation  @if($r->status == 0)  est en cour <a href="/room/{{$r->id_chambre}}">détails... </a> @endif 
                 	@if($r->status == 1)  a été  Valider <a href="/room/{{$r->id_chambre}}">détails... </a> @endif   
                 	@if($r->status == 2)  a  été Annulée <a href="/room/{{$r->id_chambre}}">détails... </a>  @endif  
                 </p>  
                 @endforeach
                </div>
   
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="/user/js/jquery.min.js"></script>
  <script src="/user/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/user/js/popper.min.js"></script>
  <script src="/user/js/bootstrap.min.js"></script>
  <script src="/user/js/jquery.easing.1.3.js"></script>
  <script src="/user/js/jquery.waypoints.min.js"></script>
  <script src="/user/js/jquery.stellar.min.js"></script>
  <script src="/user/js/owl.carousel.min.js"></script>
  <script src="/user/js/jquery.magnific-popup.min.js"></script>
  <script src="/user/js/aos.js"></script>
  <script src="/user/js/jquery.animateNumber.min.js"></script>
  <script src="/user/js/bootstrap-datepicker.js"></script>
  <script src="/user/js/jquery.timepicker.min.js"></script>
  <script src="/user/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="/user/js/google-map.js"></script>
  <script src="/user/js/main.js"></script>
  <script type="text/javascript">
  	$(document).ready(function() {

   $('#step_range_min').change(function(e) {
     let value = $(this).val()
     $('#step_input_min').val(value)
   });

    $('#step_range_max').change(function(e) {
     let value = $(this).val()
     $('#step_input_max').val(value)
   });

  $('#recherche').click(function(e) {
  	/* Act on the event */
  });
});

  </script>
    
  </body>
</html>


