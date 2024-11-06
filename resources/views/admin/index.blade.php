<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags --> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>UniversityDorm Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="/admin/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/admin/vendors/feather/feather.css">
  <link rel="stylesheet" href="/admin/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="/admin/vendors/flag-icon-css/css/flag-icon.min.css"/>
  <link rel="stylesheet" href="/admin/vendors/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="/admin/vendors/jquery-bar-rating/fontawesome-stars-o.css">
  <link rel="stylesheet" href="/admin/vendors/jquery-bar-rating/fontawesome-stars.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="/admin/css/style.css">
 <link href="css/bootstrap.min.css" rel="stylesheet">
<link href="lib/animate/animate.min.css" rel="stylesheet">
  <!-- endinject -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" href="/admin/images/favicon.png" />
   <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link href="/style.css" rel="stylesheet">
  <style type="text/css">
        .image-container {
    display: inline-block;
    transition: transform 0.3s ease;
}

    .image-container img {
        max-width: 100%; 
        height: auto;
        cursor: pointer;
    }

    .scaled {
        transform: scale(1.5);
        transition: transform 0.3s ease;
    }

      .hoverable-row {
    transition: transform 0.3s ease;
      }

      .hoverable-row:hover {
          transform: scale(1.1);
      }

      .dropdown {
    position: relative;
    display: inline-block;
    z-index: 9999;
}

.dropbtn {
    background-color: #fff;
    border: none;
    cursor: pointer;
    font-size: 16px;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 120px;
    box-shadow: 0 8px 16px rgba(0,0,0,0.2);
    z-index: 9999;
    right: 0;
    top: 0;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #f1f1f1;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #f1f1f1;
}

.form1 {
    margin: 10px;
    border-radius: 5px;
    width: 900px;
    display: flex;
}

.label1 {
    display: block;
    margin-bottom: 10px;
}

input[type="date"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #50bc91;
    border-radius: 5px;
    margin-left: 5px;
}

.button1 {
    background-color: #50bc91;
    color: white;
    border: none;
    padding: 1px 10px;
    border-radius: 5px;
    cursor: pointer;
    margin-left: 10px;
    height: 40px;
}

  </style>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="/admin/images/favicon.png" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="autocomplete" placeholder="Search Projects.." aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown d-lg-flex d-none">
                <button type="button" class="btn btn-info font-weight-bold">+  </button>
            </li>

        

          <li class="nav-item dropdown d-flex mr-4 ">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-cog"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Settings</p>
              <a class="dropdown-item preview-item">               
                  <i class="icon-head"></i> Profile
              </a>
              <a href="logout" style="cursor:pointer;" class="dropdown-item preview-item">
                  <i class="icon-inbox"></i> Logout
              </a>
            </div>
          </li>
          <li class="nav-item dropdown mr-4 d-lg-flex d-none">
            <a class="nav-link count-indicatord-flex align-item s-center justify-content-center" href="#">
              <i class="icon-grid"></i>
            </a>
          </li>
        </ul>

        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper" style="position: absolute;left: -15px;">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="user-profile">
          <div class="user-image">
            <img src="/admin/images/favicon.png">
          </div>
          <div class="user-name">
              UniversityDorm
          </div>
          <div class="user-designation">
              Admin
          </div>
        </div>
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link active" href="/admin2">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">RESERVATIONS</span>
            </a>
          </li>
 <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basir" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">RESIDENCES</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basir">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/residence">AFFICHER</a></li>
              </ul>
            </div>
          </li>
         <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basib" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">BLOCKS</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basib">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/block">AFFICHER</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">CHAMBRES</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/chambre">AFFICHER</a></li>
              </ul>
            </div>
          </li>
           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basis" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">STATS</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basis">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/stat">AFFICHER</a></li>
              </ul>
            </div>
          </li>
          
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12 mb-4 mb-xl-0">
              <h4 class="font-weight-bold text-dark">Vos, Reservations!</h4>
              <p class="font-weight-normal mb-2 text-muted" id="currentDate">APRIL 1, 2019</p>
            </div>
          </div>
                <form class="form1" action="{{ route('search_date') }}" method="GET">
                    <input type="date" class="" id="start_date" name="start_date">
                    <input type="date" id="end_date" name="end_date">
                    <button class="button1" type="submit">Search</button>
                </form>
  <!-- Property List Start -->
        <div class="container-xxl py-5">
            <div class="container"> 
                <div class="row g-0 gx-5 align-items-end">

                    <div class="col-lg-7 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                        <ul class="nav nav-pills d-inline-flex justify-content-end mb-5" style="display: flex;flex-direction: row;">
                            <li class="nav-item me-2">
                                <a class="btn btn-outline-primary active pill all" data-bs-toggle="pill"  href="all">Reservation</a>
                            </li>
                            <li class="nav-item me-2">
                                <a class="btn btn-outline-primary pill encour" data-bs-toggle="pill" href="encour">En cour</a>
                            </li>
                            <li class="nav-item me-2">
                                <a class="btn btn-outline-primary pill valider" data-bs-toggle="pill" href="valider">Valider</a>
                            </li>
                            <li class="nav-item me-0">
                                <a class="btn btn-outline-primary pill annuler" data-bs-toggle="pill" href="annuler">Annuler</a>
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="tab-content" id="resultsTable">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4 tbody">

                           @forelse($reservations as $r)
                            <div class="col-lg-4 col-md-6 wow All fadeInUp @if($r->status == 0) r-encour @endif @if($r->status == 1) r-valider @endif @if($r->status == 2) r-annuler @endif ftco-animate" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="" class="hoverables openModal" data-id="{{$r->idr}}" data-name="{{$r->name}}" data-img="{{$r->chambre_photo}}" data-m="{{$r->montant}}" data-id="{{$r->idr}}"><img class="img-fluid" src="files/{{$r->chambre_photo}}" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">@if($r->status == 0) En Attente @endif @if($r->status == 1) Valider @endif @if($r->status == 2) Annuler @endif</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3" style="background-color: #fff;z-index: 999;">{{$r->name}}</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3 mt">{{$r->montant}} FCFA</h5>
                                        <a class="d-block h5 mb-2" href="">{{$r->nom_chambre}}</a>
                                        <p class="date_res">{{$r->date}}</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>{{$r->nom_residence}}</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 {{$r->chambre_capacite}}</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>{{$r->num_block}}</small>
                                    </div>
                                </div>
                            </div>

                             @empty
                            <p class="text-center text-lg" style="color: #50bc91;" >AUCUNE RESERVATION</p>
                            @endforelse         
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Property List End -->
<script>
       
    </script>

          </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
       
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
@include('layout.loader')
@include('reservation.modal-validation')
  <!-- base:js -->
   <input type="hidden" id="p" value="ict.png"  name="">
  <script src="/admin/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="/admin/js/off-canvas.js"></script>
  <script src="/admin/js/hoverable-collapse.js"></script>
  <script src="/admin/js/template.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="/admin/vendors/chart.js/Chart.min.js"></script>
  <script src="/admin/vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="/admin/js/dashboard.js"></script>
  <script src="/compte/js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="/js/sweetalert2.all.min.js"></script>
  <script src="/js/date-fns@3.6.0cdn.min.js"></script>
<script type="text/javascript" src="/js/sweetalert2.all.min.js"></script>
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
  <script src="/user/js/jquery-ui.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/accounting.js/0.1/accounting.min.js"></script>
  <!-- End custom js for this page-->
  <script type="text/javascript">
    $(function() {

      $('.openModal').click(function(e) {
        e.preventDefault()
        let idr = $(this).attr('data-id');
        let img = $(this).attr('data-img');
        let name = $(this).attr('data-name');
        let montant = $(this).attr('data-m');
        console.log(idr)
        $('#reservation').val(idr)
        $('#img-reservation').attr('src', 'files/'+img);
        $('#name-reservation').html(name);
       

                       var number = parseInt(montant) 

                         // Formatage avec options personnalisées
                          var customFormattedMoney = accounting.formatMoney(number, {
                              symbol: "fcfa ",
                              format: "%v %s",
                              precision: 2,
                              thousand: ".",
                              decimal: ","
                          });
                           $('#montant-reservation').html(customFormattedMoney);
                 
    $('.modal').fadeIn();
  });

  $('.close').click(function() {
    $('.modal').fadeOut();
  });

        var days = ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'];
        var months = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
        
        var now = new Date();
        var dayName = days[now.getDay()];
        var monthName = months[now.getMonth()];
        var dayNumber = now.getDate();
        var year = now.getFullYear();
        
        var formattedDate = dayName + ' ' + dayNumber + ' ' + monthName + ' ' + year;
        
        $('#currentDate').text(formattedDate);

             $('#tableFilter').on('keyup', function() {
            var value = $(this).val().toLowerCase();
            $('#tableBody tr').filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            });
        });

      var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
      $('#openModal').click(function(e) {
        e.preventDefault()
    $('.modal').fadeIn();
  });

  $('.close').click(function(e) {
     e.preventDefault()
    $('.modal').fadeOut();
  });

          $('#valider_residence').click(function(e) {
          $('#loader').show('400')
          e.preventDefault()
          let name = $('#name').val()
          let capacite = $('#capacite').val()
          let message = $('#message').val()
          let file = $('#p').val()
          let residence = $('#residence').val()
                var fd = new FormData();

                fd.append('name',name);
                fd.append('capacite',capacite);
                fd.append('message',message);
                fd.append('file',file);
                fd.append('residence',residence);
                fd.append('_token',CSRF_TOKEN)

                    

            jQuery.ajax({
              url: '{{ route("valider_residence") }}',
              type: 'POST',
              data:fd,
              contentType: false,
              processData: false,
              dataType: 'json',
              complete: function(xhr, textStatus) {
             $('#loader').hide('400')
              },
              success: function(data, textStatus, xhr) {
                if(data['error']){
                   let textEroor = '';
                let json = JSON.parse(xhr.responseText)

                json['error'].forEach((item,index)=>{
                    textEroor +='<p class="text-danger" >'+item+'</p>';
                })
                  Swal.fire({
                       icon: 'error',
                       title: 'residence ',
                       html:textEroor,
                       preConfirm: () => {console.log("object")}
                   })
                }else{
                  $('.modal').fadeOut();
                    Swal.fire({
                       icon: 'success',
                       title: 'residence ',
                       text:'created successfully',
                       preConfirm: () => {RefreshTableHref()}
                   })
                }
               
              },
              error: function(xhr, textStatus, errorThrown) {
               console.log(xhr.responseText)
              }
            });
  });

           function RefreshTableHref() {
          $('#name').val("")
          $('#capacite').val("")
          $('#message').val("")
          $('#img_residence').attr('src', "images/photo.png");
          $('#text-name').text("")
          $('#text-capacite').text("")
        }

        function RefreshTableBloc() {
          $('#name').val("")
          $('#capacite').val("")
          $('#message').val("")
          $('#residence').val("")
          
          $('#img_residence').attr('src', "images/photo.png");
          $('#div-img').hide();
          $('#text-name').text("")
          $('#text-capacite').text("")

          $('#img-name').text("")
          $('#img-capacite').text("")
        }


             $('#photo').change(function(event) {
       let file = $(this).get(0).files[0]
       if (file) {
        var reader = new FileReader()

        reader.onload = function(){
          $('#img_residence').attr('src', reader.result);
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
               
      });
           function formatDate(dateStr) {
                const monthNames = [
                    "Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin",
                    "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre"
                ];

                // Diviser la chaîne de date en composants
                const parts = dateStr.split("-");
                const year = parts[0];
                const month = monthNames[parseInt(parts[1], 10) - 1];
                const day = parseInt(parts[2], 10);

                // Retourner la date formatée
                return `${day} ${month} ${year}`;
            }

            $('.date_res').each(function() {
                var dateText = $(this).text();
                var formattedDate = formatDate(dateText);
                console.log(formattedDate)
                $(this).text(formattedDate);
            });

            $('.date_fin').each(function() {
                var dateText = $(this).text();
                var formattedDate = formatDate(dateText);
                console.log(formattedDate)
                $(this).text(formattedDate);
            });

             $('#autocomplete').on('input', function() {
        let query = $(this).val();


        if (query == '') {
          $.ajax({
            url: '{{ route("autocomplete.search2") }}',
            type: 'GET',
            data: {param1: 'value1'},
          })
          .done(function(data) {
             let tableBody = $('#resultsTable .tbody');
                    tableBody.empty(); // Vide le tableau avant de le mettre à jour

                    data.forEach(function(item) {
                      if (item.status == 0) {
                        tableBody.append(`
                           
    <div class="col-lg-4 col-md-6 wow fadeInUp All r-encour" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="" class="hoverables openModal" data-id="${item.idr}" data-name="${item.name}" data-img="${item.chambre_photo}" data-m="${item.montant}" data-id="${item.idr}"><img class="img-fluid" src="files/${item.chambre_photo}" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">En attente</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3" style="background-color: #fff;z-index: 999;">${item.name}</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">${item.montant} FCFA</h5>
                                        <a class="d-block h5 mb-2" href="">${item.nom_chambre}</a>
                                        <p class="date_res">${item.date}</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>${item.nom_residence}</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 ${item.chambre_capacite}</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>${item.num_block}</small>
                                    </div>
                                </div>
                            </div>
                        `);
                      }

                       if (item.status == 1) {
                        tableBody.append(`
                           
    <div class="col-lg-4 col-md-6 wow fadeInUp r-valider All" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="" class="hoverables openModal" data-id="${item.idr}" data-name="${item.name}" data-img="${item.chambre_photo}" data-m="${item.montant}" data-id="${item.idr}"><img class="img-fluid" src="files/${item.chambre_photo}" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">En attente</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3" style="background-color: #fff;z-index: 999;">${item.name}</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">${item.montant} FCFA</h5>
                                        <a class="d-block h5 mb-2" href="">${item.nom_chambre}</a>
                                        <p class="date_res">${item.date}</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>${item.nom_residence}</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 ${item.chambre_capacite}</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>${item.num_block}</small>
                                    </div>
                                </div>
                            </div>
                        `);
                      }

                       if (item.status == 2) {
                        tableBody.append(`
                           
    <div class="col-lg-4 col-md-6 wow fadeInUp r-annuler All" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="" class="hoverables openModal"data-id="${item.idr}" data-name="${item.name}" data-img="${item.chambre_photo}" data-m="${item.montant}" data-id="${item.idr}"><img class="img-fluid" src="files/${item.chambre_photo}" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">En attente</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3" style="background-color: #fff;z-index: 999;">${item.name}</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">${item.montant} FCFA</h5>
                                        <a class="d-block h5 mb-2" href="">${item.nom_chambre}</a>
                                        <p class="date_res">${item.date}</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>${item.nom_residence}</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 ${item.chambre_capacite}</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>${item.num_block}</small>
                                    </div>
                                </div>
                            </div>
                        `);
                      }
                        
                    });
          })
          .fail(function() {
            console.log("error");
          })
          .always(function() {
            $('.date_res').each(function() {
                var dateText = $(this).text();
                var formattedDate = formatDate(dateText);
                console.log(formattedDate)
                $(this).text(formattedDate);
            });

             $('.mt').each(function(index, el) {
                       var number = parseInt($(el).text()) 

                         // Formatage avec options personnalisées
                          var customFormattedMoney = accounting.formatMoney(number, {
                              symbol: "fcfa ",
                              format: "%v %s",
                              precision: 2,
                              thousand: ".",
                              decimal: ","
                          });
                          $(el).text(customFormattedMoney);
                      });
          });
          
        }

        if (query.length >= 1) { // Commence la recherche après avoir tapé au moins 3 caractères
            $.ajax({
                url: '{{ route("autocomplete.search") }}',
                type: 'GET',
                data: { query: query },
                success: function(data) {
                  console.log(data)
                    let tableBody = $('#resultsTable .tbody');
                    tableBody.empty(); // Vide le tableau avant de le mettre à jour

                    data.forEach(function(item) {
                      if (item.status == 0) {
                        tableBody.append(`
                           
    <div class="col-lg-4 col-md-6 wow fadeInUp All r-encour" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="" class="hoverables openModal" data-id="${item.idr}" data-name="${item.name}" data-img="${item.chambre_photo}" data-m="${item.montant}" data-id="${item.idr}"><img class="img-fluid" src="files/${item.chambre_photo}" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">En attente</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3" style="background-color: #fff;z-index: 999;">${item.name}</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">${item.montant} FCFA</h5>
                                        <a class="d-block h5 mb-2" href="">${item.nom_chambre}</a>
                                        <p class="date_res">${item.date}</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>${item.nom_residence}</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 ${item.chambre_capacite}</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>${item.num_block}</small>
                                    </div>
                                </div>
                            </div>
                        `);
                      }

                       if (item.status == 1) {
                        tableBody.append(`
                           
    <div class="col-lg-4 col-md-6 wow fadeInUp r-valider All" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="" class="hoverables openModal" data-id="${item.idr}" data-name="${item.name}" data-img="${item.chambre_photo}" data-m="${item.montant}" data-id="${item.idr}"><img class="img-fluid" src="files/${item.chambre_photo}" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">En attente</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3" style="background-color: #fff;z-index: 999;">${item.name}</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">${item.montant} FCFA</h5>
                                        <a class="d-block h5 mb-2" href="">${item.nom_chambre}</a>
                                        <p class="date_res">${item.date}</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>${item.nom_residence}</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 ${item.chambre_capacite}</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>${item.num_block}</small>
                                    </div>
                                </div>
                            </div>
                        `);
                      }

                       if (item.status == 2) {
                        tableBody.append(`
                           
    <div class="col-lg-4 col-md-6 wow fadeInUp r-annuler All" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="" class="hoverables openModal" data-id="${item.idr}" data-name="${item.name}" data-img="${item.chambre_photo}" data-m="${item.montant}" data-id="${item.idr}"><img class="img-fluid" src="files/${item.chambre_photo}" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">En attente</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3" style="background-color: #fff;z-index: 999;">${item.name}</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">${item.montant} FCFA</h5>
                                        <a class="d-block h5 mb-2" href="">${item.nom_chambre}</a>
                                        <p class="date_res">${item.date}</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>${item.nom_residence}</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 ${item.chambre_capacite}</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>${item.num_block}</small>
                                    </div>
                                </div>
                            </div>
                        `);
                      }
                        
                    });
                }
            })
             .always(function() {

                $('.date_res').each(function() {
                var dateText = $(this).text();
                var formattedDate = formatDate(dateText);
                console.log(formattedDate)
                $(this).text(formattedDate);
            });

                 $('.mt').each(function(index, el) {
                       var number = parseInt($(el).text()) 

                         // Formatage avec options personnalisées
                          var customFormattedMoney = accounting.formatMoney(number, {
                              symbol: "fcfa ",
                              format: "%v %s",
                              precision: 2,
                              thousand: ".",
                              decimal: ","
                          });
                          $(el).text(customFormattedMoney);
                      });
            
             });
        }
    });

  $('.pill').click(function(e) {
    e.preventDefault()

    let data = $(this).attr('href');
    console.log(data)
    if (data == 'encour') {
      $('.pill').not('.encour').removeClass('active')
    $('.encour').addClass('active')
    $('.All').not('.r-encour').hide('400')
    $('.r-encour').show('400')
    }
    
   if (data == 'valider') {
       $('.pill').not('.valider').removeClass('active')
    $('.valider').addClass('active')
    $('.All').not('.r-valider').hide('400')
    $('.r-valider').show('400')
    }

    if (data == 'annuler') {
       $('.pill').not('.annuler').removeClass('active')
    $('.annuler').addClass('active')
    $('.All').not('.r-annuler').hide('400')
    $('.r-annuler').show('400')
    }

    if (data == 'all') {
       $('.pill').not('.all').removeClass('active')
    $('.all').addClass('active')
    //$('.All').not('.r-annuler').hide('400')
    $('.All').show('400')
    }
  });
     var canvas = document.getElementById('signature-pad');
           var signaturePad = new SignaturePad(canvas);


           document.getElementById('clear').addEventListener('click', function () {
               signaturePad.clear();
           });

           document.getElementById('save').addEventListener('click', function () {
               var dataURL = signaturePad.toDataURL('image/png');
               document.getElementById('signature-input').value = dataURL;
           });

           document.getElementById('signature-form').addEventListener('submit', function (event) {
               if (signaturePad.isEmpty()) {
                   alert("Please provide a signature first.");
                   event.preventDefault();
               } else {
                //event.preventDefault();
                   var dataURL = signaturePad.toDataURL('image/png');
                   document.getElementById('signature-input').value = dataURL;
                   console.log(dataURL)
               }

           });

            @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Succès',
                text: '{{ session('success') }}',
                timer: 3000,
                showConfirmButton: false,
                timerProgressBar: true,
                willClose: () => {
                    clearInterval(timerInterval)
                }
            });
        @endif

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

       $('#danger').click(function(e) {
        e.preventDefault()
        let idr = $('#reservation').val()

        $.ajax({
         url: '{{ route("annuler") }}',
            type: 'GET',
            data: {idr: idr},
        })
        .done(function(data) {
          Swal.fire({
                       icon: 'info',
                       title: 'Reservation Annuler ',
                       text:'Annuler',
                       preConfirm: () => {location.reload()}
                   })
        })
        .fail(function() {
          console.log("error");
        })
        .always(function() {
          $('.modal').fadeOut();
        });
        
       });

          @if(session('success'))
                        Swal.fire({
                    title: 'Reservation',
                    text: "Imprimer l'affiche de reservation ",
                    icon: 'info',
                    showCancelButton: true,
                    confirmButtonColor: '#50bc91',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Oui, Envoyer',
                    cancelButtonText: 'Non, Quitter!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        location.href = '/generate-pdf'
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                        console.log("object")
                    }
                })
                  @endif

                      $('.mt').each(function(index, el) {
                       var number = parseInt($(el).text()) 

                         // Formatage avec options personnalisées
                          var customFormattedMoney = accounting.formatMoney(number, {
                              symbol: "fcfa ",
                              format: "%v %s",
                              precision: 2,
                              thousand: ".",
                              decimal: ","
                          });
                          $(el).text(customFormattedMoney);
                      });
           @if(session('valide'))
            Swal.fire({
                    title: 'Reservation',
                    text: "Valider avec success voulez vous envoyer un mail a l'etudiant ",
                    icon: 'info',
                    showCancelButton: true,
                    confirmButtonColor: '#50bc91',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Oui, Envoyer',
                    cancelButtonText: 'Non, Quitter!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        location.href = '/mail'
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                       console.log('object')
                    }
                })
           @endif
    });
  </script>
</body>

</html>
<tr>
    
