<!DOCTYPE html>
<html lang="en">
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

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">UniversityDorm</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	     <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="/etudiant" class="nav-link active">Chambres</a></li>
            <li class="nav-item"><a href="/residences" class="nav-link">Résidences</a></li>
            <li class="nav-item"><a href="/blocks" class="nav-link">Blocs</a></li>
            <li class="nav-item active"><a href="/reservation2" class="nav-link">Réservation</a></li>
            <li class="nav-item"><a href="/logout" class="nav-link">Quitter</a></li>
          </ul>
        </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <div class="hero-wrap" style="background-image: url('/files/{{$chambres->chambre_photo}}');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <p class="breadcrumbs mb-2" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span class="mr-2"><a href="/">CHAMBRE </a></span> <span>{{$chambres->nom_chambre}}</span></p>
	            <h1 class="mb-4 bread">{{$chambres->nom_chambre}}</h1>
            </div>
          </div>
        </div>
      </div>
    </div>


    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
          	<div class="row">
          		<div class="col-md-12 ftco-animate">
          			<h2 class="mb-4">{{$chambres->nom_chambre}}</h2>
          			<div class="single-slider owl-carousel">
          				<div class="item">
          					<div class="room-img" style="background-image: url(/files/{{$chambres->chambre_photo}});"></div>
          				</div>
          			</div>
          		</div>
          		<div class="col-md-12 room-single mt-4 mb-5 ftco-animate">
    						<p>{{$chambres->contenu}}</p>
    						<div class="d-md-flex mt-5 mb-5">
    							<ul class="list">
	    							<li><span>Max:</span> {{$chambres->chambre_capacite}} Persons</li>
	    							<li><span>prix :</span> {{$chambres->chambre_prix}} FCFA</li>
	    						</ul>
	    						<ul class="list ml-md-5">
	    							<li><span>BLOCK :</span> {{$chambres->num_block}}</li>
	    							<li><span>RESIDENCE:</span> {{$chambres->nom_residence}}</li>
	    						</ul>
    						</div>
    						<p>FAIRE UNE RESERVATIONS </p>
    							<p class="pt-1"><a href="" id="bd" class="btn-custom">RESERVATIONS <span class="icon-long-arrow-right"></span></a></p>
    							<p class="pt-1"><a href="" id="bp" class="btn-custom">PAYEMENTS DIRECT <span class="icon-long-arrow-right"></span></a></p>
                   <p style="text-align: center;font-family: Roboto;display: block;margin-top: 20px;" class="d-block" > Autres chambres  </p>
          		</div>
             <br>
                    @forelse($prix_chambre as $r)
                       <div class="col-md-4">
                          <div class="post-entry">
                            <a href="blog-single.html"><img src="/files/{{$r->chambre_photo}}" alt="Image placeholder" class="img-fluid"></a>
                            <div class="body-text">
                              <div class="category">{{$r->nom_residence}} </div>
                              <h3 class="mb-3"><a href="/room/{{$r->id_chambre}}">{{$r->nom_chambre}}</a></h3>
                            </div>
                          </div>
                        </div>

                    @empty
                <p> </p>
       
                @endforelse
          		
          	</div>
          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar ftco-animate">
           <div class="col-md-12 properties-single ftco-animate mb-5 mt-4">

          			 <div class="col-md-5" data-aos="fade-up" data-aos-delay="200">
            <div class="row">
              <div class="col-md-10 ml-auto contact-info">
                <p>
                  <span>Détails utilisateur </span>
                </p>
                <p style="">
                  <span class="d-block" style="color:#cdad83;text-decoration: underline;" >FILIÈRE  :</span> 
                  <span class="text-black"> {{$user->filiere}}</span>
                </p>
                <p style=""><span class="" style="color:#cdad83;text-decoration: underline;" >TELEPHONE:</span> <span class="text-black"> {{$user->tel}}</span></p>
                <p style=""><span class="d-block" style="color:#cdad83;text-decoration: underline;" >ADRESSE Email:</span> <span class="text-black"> {{$user->email}}</span></p>
              </div>
            </div>
          </div>
          		</div>
          </div>
        </div>
      </div>
    </section> <!-- .section -->


    <section class="section contact-section" id="next" style="position: relative;top: -100px;">
      <div class="container">
        <div class="row">
          <div class="col-md-10" data-aos="fade-up" data-aos-delay="100">
            
            <form action="#" id="fp" style="display: none;" method="post" class="bg-white p-md-5 p-4 mb-5 border">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label class="text-black font-weight-bold" for="name">Nom</label>
                  <input type="text" disabled value="{{$user->name}}" id="name" class="form-control ">
                </div>
                <div class="col-md-6 form-group">
                  <label class="text-black font-weight-bold" for="phone">Tel</label>
                  <input type="text" disabled id="phone" value="{{$user->tel}}" class="form-control ">
                </div>
              </div>
          
              <div class="row">
                <div class="col-md-12 form-group">
                  <label class="text-black font-weight-bold" for="email">Email</label>
                  <input type="email" id="email" disabled value="{{$user->email}}" class="form-control ">
                </div>
              </div>

              <div class="row">
               
                <div class="col-md-6 form-group">
                  <label class="text-black font-weight-bold" for="checkout_datep">Durée en Mois</label>
                  <input type="number" id="checkout_datep" class="form-control">
                </div>
              </div>

              <input type="hidden" value="{{$chambres->chambre_prix}}" id="prix" name="">
              <input type="hidden" value="{{$chambres->id_chambre}}" id="room" name="">
              

              <div class="row mb-4">
                <div class="col-md-12 form-group">
                  <label class="text-black font-weight-bold" for="message">Descriptions </label>
                  <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="submit" value="Payer maintenant" id="payement" class="btn btn-primary text-white py-3 px-5 font-weight-bold">
                </div>
              </div>
            </form>


            <form action="#" id="fd" style="display: none;" method="post" class="bg-white p-md-5 p-4 mb-5 border">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label class="text-black font-weight-bold" for="name">Nom</label>
                  <input type="text" disabled value="{{$user->name}}" id="name" class="form-control ">
                </div>
                <div class="col-md-6 form-group">
                  <label class="text-black font-weight-bold" for="phone">Tel</label>
                  <input type="text" disabled id="phone" value="{{$user->tel}}" class="form-control ">
                </div>
              </div>
          
              <div class="row">
                <div class="col-md-12 form-group">
                  <label class="text-black font-weight-bold" for="email">Email</label>
                  <input type="email" id="email" disabled value="{{$user->email}}" class="form-control ">
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 form-group">
                  <label class="text-black font-weight-bold" for="checkout_date">Durée en Mois </label>
                  <input type="number" id="checkout_date" class="form-control">
                </div>
              </div>

              
              

              <div class="row mb-4">
                <div class="col-md-12 form-group">
                  <label class="text-black font-weight-bold" for="message">Descriptions </label>
                  <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="submit" id="reserver" value="Réservez maintenant" class="btn btn-primary text-white py-3 px-5 font-weight-bold">
                </div>
              </div>
            </form>

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
  <script type="text/javascript" src="/js/sweetalert2.all.min.js"></script>
  <script type="text/javascript">
  	$(document).ready(function() {
  		$('#bp').click(function(e) {
  			e.preventDefault()
  			$("#fp").show('slow');
  			$("#fd").hide('slow');
  		});

  		$('#bd').click(function(e) {
  			e.preventDefault()
  			$("#fd").show('slow');
  			$("#fp").hide('slow');
  		});
  		$("#payement").click(function(e) {
  		
  			e.preventDefault()
  			var prix = $('#prix').val()
  			var room = $('#room').val()
  			console.log(room)
  			var debut = $('#checkout_datep').val()
  			 var url = '{{ url("payement") }}/'+prix+'/'+debut+'/'+room;
  			 console.log(debut)
			window.location.href = url;

  		});

  		$("#reserver").click(function(e) {
  		
  			e.preventDefault()
  			var prix = $('#prix').val() 
  			var room = $('#room').val()
  			console.log(room)
  			var debut = $('#checkout_date').val()
  			 var url = '{{ url("reserver") }}/'+prix+'/'+debut+'/'+room;
  			 console.log(debut)
			window.location.href = url;

  		});

      @if (session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Erreur',
                text: '{{ session('error') }}',
                timer: 3000,
                showConfirmButton: false,
                timerProgressBar: true,
                willClose: () => {
                    clearInterval(timerInterval)
                }
            });
        @endif
  	});
  </script>
    
  </body>
</html>