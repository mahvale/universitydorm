<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>CONNEXION</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="/compte/fonts/linearicons/style.css">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="/compte/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- DATE-PICKER -->
		<link rel="stylesheet" href="/compte/vendor/date-picker/css/datepicker.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="/compte/css/style.css">
		<link rel="shortcut icon" href="/admin/images/favicon.png" />
		<meta name="csrf-token" content="{{ csrf_token() }}">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<form action="">
					<h3 style="font-family: Roboto;" >CONNEXION ETUDIANT </h3>
					<div class="form-row">
						<div class="form-wrapper">
							<label for="">Email *</label>
							<input type="text" class="form-control" id="email" placeholder="Your Email">
						</div>
						<div class="form-wrapper">
							<label for="">Password *</label>
							<input type="password" class="form-control" id="passe" placeholder="Password">
						</div>
					</div>
					
					<div class="checkbox">
						<label>
							<span>Vous n'avez pas de compte <a href="register"> Creer</a></span> 
						</label><br >
						<label>
							<span>Utiliser un compte  <a href="loginadmin"> Admin</a></span> 
						</label>
					</div>
					<button id="valider" data-text="VALIDER">
						<span>CONNEXION</span>
					</button>
				</form>
			</div>
		</div>
		@include('layout.loader')
		<script src="/compte/js/jquery-3.3.1.min.js"></script>

		<!-- DATE-PICKER -->
		<script src="/compte/vendor/date-picker/js/datepicker.js"></script>
		<script src="/compte/vendor/date-picker/js/datepicker.en.js"></script>

		<script src="/compte/js/main.js"></script>
		 <script type="text/javascript" src="/js/sweetalert2.all.min.js"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
        $('#valider').click(function(e) {
            e.preventDefault()
            $('#loader').show('400')
            var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
            let email = $('#email').val()
            let passe = $('#passe').val()

             var fd = new FormData();
             fd.append('email',email);
             fd.append('passe',passe);
             fd.append('_token',CSRF_TOKEN);

            jQuery.ajax({
              url: '{{ route("login") }}',
              type: 'POST',
              data:fd, 
              contentType: false,
              processData: false,
              dataType: 'json',
              complete: function(xhr, textStatus) {
              console.log(xhr)
              },
              success: function(data, textStatus, xhr) {
      		console.log(data)
               setTimeout(()=>{
                  $('#loader').hide('400')
                },2000)
               if(data['error']){
                  Swal.fire({
                       icon: 'error',
                       title: 'User ',
                       text:'email ou Password incorrect !',
                       preConfirm: () => {console.log("object")}
                   })
               }else {
               location.href = '/etudiant';
                
               }
              },
              error: function(xhr, textStatus, errorThrown) {
                 setTimeout(()=>{
                  $('#loader').hide('400')
                },2000)
               console.log(xhr.responseText)
              }
            });
            
       });
    });
  </script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>