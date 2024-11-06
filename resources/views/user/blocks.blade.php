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
		@include('php/funtion_residense')
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">UniversityDorm</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="/etudiant" class="nav-link">Chambres</a></li>
	          <li class="nav-item"><a href="/residences" class="nav-link">Residences</a></li>
	          <li class="nav-item active"><a href="/blocks" class="nav-link">Block</a></li>
	          <li class="nav-item"><a href="/logout" class="nav-link">Quitter</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <div class="hero-wrap" style="background-image: url('/user/images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="">BLOCKS</a></span> <span>A propos</span></p>
	            <h1 class="mb-4 bread">BLOCKS</h1>
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
		    			@forelse($blocks as $r)
		    			<div class="col-sm col-md-6 col-lg-4 ftco-animate" id="rooom">
		    				<div class="room">
		    					<a href="/show_chambre2/{{$r->id}}" class="img d-flex justify-content-center align-items-center" style="background-image: url(/files/{{$r->photo}});">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3 text-center">
		    						<h3 class="mb-3"><a href="">{{$r->name}}</a></h3>
		    						<p><span class="price mr-2">{{$r->capacite}}</span> <span class="per">CAPACITES</span></p>
		    						<ul class="list">
		    							<li><span>Persons:</span> {{$r->capacite}}</li>
		    							<li><span>RESIDENCE:</span> {{block_residence($r->residence)->name}}</li>
		    							<li><span> Nbre Chambre:</span> {{count_chambre_block($r->id)}}</li>
		    							<li><span>Bed:</span> 1</li>
		    						</ul>
		    						<hr>
		    						<p class="pt-1"><a href="/show_chambre2/{{$r->id}}" class="btn-custom">DETAILS <span class="icon-long-arrow-right"></span></a></p>
		    					</div>
		    				</div>
		    			</div>

		    				@empty
		    				<p>Aucune Chambres </p>
		   
		    				@endforelse
		    		</div>
		    	</div>
		    	<div class="col-lg-3 sidebar">
	      		<div class="sidebar-wrap bg-light ftco-animate">
	      			<h3 class="heading mb-4">RECHERCHE </h3>
	      			<form  action="{{ route('search') }}" method="GET">
	      				<div class="fields">
		              
		              <div class="form-group">
		                <div class="select-wrap one-third">
	                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                    <select name="residence" id="" class="form-control">
	                    	<option selected disabled value="">Residences</option>
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
	                    	<option selected disabled value="">Block</option>
	                      @foreach($res as $r)
	                    	<option value="{{$r->id}}">{{$r->name}}</option>
	                      @endforeach
	                    </select>
	                  </div>
		              </div>

		              <div class="form-group">
		                <input type="text" id="" name="capacite" class="form-control" placeholder="Capacite">
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
		                <input type="submit"  value="recherche" class="btn btn-primary py-3 px-5">
		              </div>
		            </div>
	            </form>
	      		</div>
	      		<div class="sidebar-wrap bg-light ftco-animate">
	      			<h3 class="heading mb-4">Star Rating</h3>
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


