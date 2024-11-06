<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>UniversityDorm</title>
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
@include('php.funtion_residense')
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">UniversityDorm</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="/etudiant" class="nav-link active">Chambres</a></li>
	          <li class="nav-item"><a href="/residences" class="nav-link">Résidences</a></li>
	          <li class="nav-item"><a href="/blocks" class="nav-link">Blocs</a></li>
	          <li class="nav-item"><a href="/reservation2" class="nav-link">Réservation</a></li>
	          <li class="nav-item"><a href="/logout" class="nav-link">Quitter</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- FIN nav -->

    <div class="hero-wrap" style="background-image: url('/user/images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="">Chambres</a></span> <span>À propos</span></p>
	            <h1 class="mb-4 bread">Chambres</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
	        <div class="col-lg-9">
		    		<div class="row">
		    			@forelse($chambres as $r)
		    			<div class="col-sm col-md-6 col-lg-4 ftco-animate" id="rooom">
		    				<div class="room">
		    					<a href="/room/{{$r->id_chambre}}" class="img d-flex justify-content-center align-items-center" style="background-image: url(/files/{{$r->chambre_photo}});">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3 text-center">
		    						<h3 class="mb-3"><a href="room/{{$r->id_chambre}}">{{$r->nom_chambre}}</a></h3>
		    						<p><span class="price mr-2">{{$r->chambre_prix}}</span> <span class="per">FCFA</span></p>
		    						<ul class="list">
		    							<li><span>Max:</span> {{$r->chambre_capacite}} Personnes</li>
		    							<li><span>Bloc:</span> {{$r->num_block}}</li>
		    							<li><span>RÉSIDENCE:</span> {{$r->nom_residence}}</li>
		    							<li><span>Réservé:</span> {{reservation_name($r->id_chambre)}}</li>
		    						</ul>
		    						<hr>
		    						<p class="pt-1"><a href="/room/{{$r->id_chambre}}" class="btn-custom">DÉTAILS <span class="icon-long-arrow-right"></span></a></p>
		    					</div>
		    				</div>
		    				@if(reservation_name($r->id_chambre) > 0)
		    				<div class="ftco-animate" style="width:40px;height:40px;background-color: blue;position: relative;top: -607px;right: -215px;border-bottom-left-radius:30px;"> <span style="color: #fff;font-weight: bold;position: relative;left: 15px;">R</span> 
		    				</div>
		    				@endif
		    			</div>
		    				@empty
		    				<p>Aucune Chambre</p>
		    				@endforelse
		    		</div>
		    	</div>

		    	<div class="col-lg-3 sidebar">
	      		<div class="sidebar-wrap bg-light ftco-animate">
	      			<h3 class="heading mb-4">Recherche avancée</h3>
	      			<form action="{{ route('search') }}" method="GET">
	      				<div class="fields">
		              <div class="form-group">
		                <div class="select-wrap one-third">
	                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                    <select name="residence" id="" class="form-control">
	                    	<option selected disabled value="">Résidences</option>
	                    	@foreach($res as $r)
	                    	<option value="{{$r->id}}">{{$r->name}}</option>
	                      @endforeach
	                    </select>
	                  </div>
		              </div>

		              <div class="form-group">
		                <div class="select-wrap one-third">
	                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                    <select name="block" id="" class="form-control">
	                    	<option selected disabled value="">Bloc</option>
	                      @foreach($blocks as $r)
	                    	<option value="{{$r->id}}">{{$r->name}}</option>
	                      @endforeach
	                    </select>
	                  </div>
		              </div>

		              <div class="form-group">
		                <input type="text" id="" name="capacite" class="form-control" placeholder="Capacité">
		              </div>

		              <div class="form-group">
		              	<div class="range-slider">
		              		<span>
										    <input type="number" id="step_input_min" name="min" value="0" min="0" max="120000"/>	-
										    <input type="number" id="step_input_max" name="max" value="120000" min="0" max="120000"/>
										  </span>
										  <input value="1000" min="0" id="step_range_min"  max="120000" step="500" type="range"/>
										  <input value="50000" min="0" id="step_range_max" max="120000" step="500" type="range"/>
										  </svg>
										</div>
		              </div>
		              <div class="form-group">
		                <input type="submit" value="Recherche" class="btn btn-primary py-3 px-5">
		              </div>
		            </div>
	            </form>
	      		</div>

	      		<div class="sidebar-wrap bg-light ftco-animate">
	      			<h3 class="heading mb-4">Étoiles</h3>
	      			<form method="post" class="star-rating">
							  <div class="form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">
										<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></p>
									</label>
							  </div>
							  <div class="form-check">
						      <input type="checkbox" class="form-check-input" id="exampleCheck1">
						      <label class="form-check-label" for="exampleCheck1">
						    	   <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i></span></p>
						      </label>
							  </div>
							  <div class="form-check">
						      <input type="checkbox" class="form-check-input" id="exampleCheck1">
						      <label class="form-check-label" for="exampleCheck1">
						      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
						     </label>
							  </div>
							  <div class="form-check">
							    <input type="checkbox" class="form-check-input" id="exampleCheck1">
						      <label class="form-check-label" for="exampleCheck1">
						      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
						      </label>
							  </div>
							  <div class="form-check">
						      <input type="checkbox" class="form-check-input" id="exampleCheck1">
						      <label class="form-check-label" for="exampleCheck1">
						      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
							    </label>
							  </div>
							</form>
	      		</div>
	      		
	        </div>
		    </div>
    	</div>
    </section>

<p id="printButton">Imprimer</p>
   
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
