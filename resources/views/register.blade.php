<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v9 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="/compte/fonts/linearicons/style.css">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="/compte/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- DATE-PICKER -->
		<link rel="stylesheet" href="/compte/vendor/date-picker/css/datepicker.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="/compte/css/style.css">

		<link href="assets/css/main.css" rel="stylesheet">

		<meta name="csrf-token" content="{{ csrf_token() }}">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<form action="">
					<h3>ENREGISTREMENT</h3>
					<div class="form-row">
						<div class="form-wrapper">
							<label for="">Name *</label>
							<input type="text" class="form-control" id="name" placeholder="Your Name">
						</div>
						<div class="form-wrapper">
							<label for="">Email *</label>
							<input type="text" class="form-control" id="email" placeholder="Email">
						</div>
					</div>
					
					<div class="form-row last">
						<div class="form-wrapper">
							<label for="">Filiere *</label>
							<select name=""  id="filiere" class="form-control">
								@forelse($filieres as $f)
								<option value="{{$f->nom}}">{{$f->nom}}</option>
										@empty
										<option value="">AUCUNE FILIERE</option>
								@endforelse
							</select>
							<i class="zmdi zmdi-chevron-down"></i>
						</div>
						<div class="form-wrapper">
							<label for="">Sexe *</label>
							<select name="" id="sexe" class="form-control">
								<option value="M">M</option>
								<option value="F">F</option>
							</select>
							<i class="zmdi zmdi-chevron-down"></i>
						</div>
					</div>

					<div class="form-row">
						<div class="form-wrapper">
							<label for="">Telephone *</label>
							<input type="text" class="form-control" id="tel" placeholder="Your Telephone">
						</div>
						<div class="form-wrapper">
							<label for="">Password *</label>
							<input type="password" class="form-control" id="passe" placeholder="Password">
						</div>
					</div>

					<div class="form-row">
						<div class="form-wrapper">
							<label for="">Niveaux *</label>
							<select name=""  id="niveau" class="form-control">
								@forelse($niveaus as $f)
								<option value="{{$f->niveau}}">{{$f->niveau}}</option>
										@empty
										<option value="">AUCUN niveau</option>
								@endforelse
							</select>
							<i class="zmdi zmdi-chevron-down"></i>
						</div>
						<div class="form-wrapper">
							<label for="">Matricule *</label>
							<input type="text" class="form-control" id="matricule" placeholder="matricule">
						</div>
					</div>

					<div class="checkbox">Telephone
						<label>
							<input type="checkbox"> 
							<span class="checkmark"></span>
						</label>
					</div>

					<button id="valider"  data-text="VALIDER">
						<span>VALIDER</span>
					</button>
				</form>
			</div>
		</div>
		
		 <div class="col-lg-4 col-md-6 member" style="position:absolute;right:800px;top: 500px;" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
            <label for="photo" style="width: 100%;">Photo
              <img id="img-photo" style="width: 50px;height: 50px;border-radius: 50%;" src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
            </label>
            </div>
           <input type="file" id="photo" style="display: none;" class="form-control form-control-lg border-left-0" placeholder="file">  
          </div>
			<input type="hidden" id="p" value="ict.png"  name="">
		<script src="/compte/js/jquery-3.3.1.min.js"></script>

		<!-- DATE-PICKER -->
		<script src="/compte/vendor/date-picker/js/datepicker.js"></script>
		<script src="/compte/vendor/date-picker/js/datepicker.en.js"></script>

		<script src="/compte/js/main.js"></script>
		 <script type="text/javascript" src="/js/sweetalert2.all.min.js"></script>
  <!-- endinject -->
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
       $('#photo').change(function(event) {
       let file = $(this).get(0).files[0]
       if (file) {
        var reader = new FileReader()

        reader.onload = function(){
          $('#img-photo').attr('src', reader.result);
        }
        reader.readAsDataURL(file)


         var files = $('#photo')[0].files;
                     var fd = new FormData();

                     // Append data 
                     fd.append('file',files[0]);
                     fd.append('_token',CSRF_TOKEN);

                     // Hide alert 
                     $('#responseMsg').hide();

                     // AJAX request 
                     $.ajax({ 
                          url: "{{ route('uploadFile') }}",
                          method: 'post',
                          data: fd,
                          contentType: false,
                          processData: false,
                          dataType: 'json',
                          success: function(response){
                            console.log(response)
                            $('#p').val(response)
                          }, 
                          error: function(response){
                            
                                console.log(response.responseText);
                                $('#p').val(response.responseText)
                          }
                     });
       }
         // Get the selected file 
              
               
      });

       $('#valider').click(function(e) {
        $('#loader').show('400')
        e.preventDefault()
            let nom = $('#name').val()
            let email = $('#email').val()
            let filiere = $('#filiere').val()
            let tel = $('#tel').val()
            let sexe = $('#sexe').val()
            let passe = $('#passe').val()
            let file = $('#p').val()
            let niveau = $('#niveau').val()
            let matricule = $('#matricule').val()

             var fd = new FormData();
             fd.append('nom',nom);
             fd.append('email',email);
             fd.append('filiere',filiere);
             fd.append('tel',tel);
             fd.append('sexe',sexe);
             fd.append('passe',passe);
             fd.append('file',file);
             fd.append('niveau',niveau);
             fd.append('matricule',matricule);
             fd.append('_token',CSRF_TOKEN);

            jQuery.ajax({
              url: '{{ route("register") }}',
              type: 'POST',
              data:fd,
              contentType: false,
              processData: false,
              dataType: 'json',
              complete: function(xhr, textStatus) {
              console.log(xhr)
              },
              success: function(data, textStatus, xhr) {
                if(data['error']){
                   let textEroor = '';
                let json = JSON.parse(xhr.responseText)

                json['error'].forEach((item,index)=>{
                    textEroor +='<p class="text-danger" >'+item+'</p>';
                })
                $('#loader').hide('400')
                  Swal.fire({
                       icon: 'error',
                       title: 'User ',
                       html:textEroor,
                       preConfirm: () => {console.log("object")}
                   })
                }else{
                    Swal.fire({
                       icon: 'success',
                       title: 'User ',
                       text:'created successfully',
                       preConfirm: () => {RefreshTableHref()}
                   })
                }
               
              },
              error: function(xhr, textStatus, errorThrown) {
                $('#loader').hide('400')
               console.log(xhr.responseText)
              }
            });
            
       });
        function RefreshTableHref() {
                 location.href = '/';
               }
    });
  </script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>