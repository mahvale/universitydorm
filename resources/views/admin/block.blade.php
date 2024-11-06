<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags --> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>UniversityDorm Admin residence</title>
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

    <link rel="stylesheet" href="/user/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/user/css/animate.css">
    
    <link rel="stylesheet" href="/user/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/user/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/user/css/magnific-popup.css">
 
    <link rel="stylesheet" href="/user/css/aos.css">
<link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/user/css/ionicons.min.css">

    <link rel="stylesheet" href="/user/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/user/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="/user/css/flaticon.css">
    <link rel="stylesheet" href="/user/css/icomoon.css">

  <link rel="stylesheet" href="/admin/css/style.css">
  <!-- endinject -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" href="/admin/images/favicon.png" />

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
    z-index: 1;
    right: 0;
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
  </style>
</head>
<body>
  <div class="container-scroller">
    @include('php.funtion_residense')
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
              <input type="text" class="form-control" id="tableFilter" placeholder="Search Projects.." aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown d-lg-flex d-none">
                <button type="button" id="openModal" class="btn btn-info font-weight-bold">+  </button>
            </li>
          <li class="nav-item dropdown d-flex">
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
              <i class="icon-air-play mx-0"></i> 
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="/admin/images/favicon.png" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-normal">David Grey
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="/admin/images/favicon.png" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    New product launch
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="/admin/images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-normal"> Johnson
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
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
    <div class="container-fluid page-body-wrapper" style="position: absolute;left: 0px;">
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
              <h4 class="font-weight-bold text-dark">Hi, welcome back!</h4>
              <p class="font-weight-normal mb-2 text-muted" id="currentDate">APRIL 1, 2019</p>
            </div>
          </div>

            <div class="row">
       <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-uppercase ">Listes des blocks </h4>
                  <p class="card-description">
                    Classer  <code>.Par date</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead style="font-family: Roboto;text-transform: uppercase;font-size: 12px;">
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            numero
                          </th>
                          <th>
                            capacite
                          </th>
                          <th>
                            Residence
                          </th>
                          <th>
                            Nbre de Chambres
                          </th>
                        </tr>
                      </thead>
                      <tbody id="tableBody">
                        @forelse($blocks as $r)
                        <tr class="" style="cursor:pointer;">
                          <td class="py-1">
                            <div class="col-sm-12 col-md ftco-animate">
                              <a href="/files/{{$r->photo}}" class="insta-img open-popup" style="background-image: url(/files/{{$r->photo}});">
                                <div class="icon d-flex justify-content-center">
                                  <span class=""></span>
                                  <img class="icon-instagram align-self-center" src="/files/{{$r->photo}}" alt="image"/>
                                </div>
                              </a>
                            </div>
                          </td>
                          <td>
                            {{$r->name}}
                          </td>
                          <td>
                            {{$r->capacite}}
                          </td>
                          <td>
                            {{ name_residence($r->residence) }}
                          </td>
                          <td>
                             <a href="/show_chambre/{{$r->id}}">{{ count_chambre_block($r->id) }}</a>
                          </td>
                          <td>
                            <div class="dropdown">
                                <button class="dropbtn">⋮</button>
                                <div class="dropdown-content">
                                    <a href="#" class="hoverables"  data-id="{{$r->id}}">Supprimer</a>
                                    <a href="#" class="hoverable"  data-id="{{$r->id}}" >Afficher</a>
                                </div>
                            </div>
                        </td>
                        </tr>
                        @empty
                        <tr>
                          <td colspan="4"><span style="font-family: Roboto;">Aucune reservation</span></td>
                        </tr>
                        @endforelse
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            </div>


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
@include('block.modal')
@include('block.modal-img')
@include('block.modal-detail')

 


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
  <!-- End custom js for this page-->


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
    $(function() {

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

  $('.closeb').click(function(e) {
     e.preventDefault()
    $('.modal').fadeOut();
  });

    $('#valider_block').click(function(e) {
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
              url: '{{ route("valider_block") }}',
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
                       title: 'Block ',
                       html:textEroor,
                       preConfirm: () => {console.log("object")}
                   })
                }else{
                  $('.modal').fadeOut();
                    Swal.fire({
                       icon: 'success',
                       title: 'Block ',
                       text:'created successfully',
                       preConfirm: () => {location.reload()}
                   })
                }
               
              },
              error: function(xhr, textStatus, errorThrown) {
               console.log(xhr.responseText)
              }
            });
  });



           function RefreshTableHref() {
     location.reload()
        }

        function RefreshTableBloc() {
         location.reload()
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

        
    var modal = $('#imageModal');
    var modalImg = $('#modalImage');
    var span = $('.closeimg');

    $('.imageToScale').on('click', function() {
        modalImg.attr('src', this.src);
        modal.show().addClass('show');
    });

    span.on('click', function() {
        modal.removeClass('show');
        setTimeout(function() {
            modal.hide();
        }, 300); // Match the transition duration
    });

    $(window).on('click', function(event) {
        if (event.target == modal[0]) {
            modal.removeClass('show');
            setTimeout(function() {
                modal.hide();
            }, 300); // Match the transition duration
        }
    });

    $('.hoverable-row').hover(
        function() {
            $(this).addClass('scaled');
        },
        function() {
            $(this).removeClass('scaled');
        }
    );
    $('.hoverable').click(function(e) {
      e.preventDefault()
      let id = $(this).attr('data-id');
      var token = $('meta[name="csrf-token"]').attr('content');
       $.ajax({
                    url: '/block/' + id + '/edit',
                    type: 'GET',
                    success: function(response) {
                        if (response.element) {
                          $('#editForm').attr('data-id', id);
                          $('#img_residenceu').attr('src', '/files/'+response.element.photo);
                           $('#named').val(response.element.name);
                           $('#rname').text(response.element.name);
                           $('#capacited').val(response.element.capacite);
                           $('#messaged').val(response.element.message);
                           $('#pu').val(response.element.photo)
                        } else {
                            alert(response.error);
                        }
                    }
                });
      $('#myModal').css('display', 'block');

    });

     $('.hoverables').click(function(event) {
      let id = $(this).attr('data-id');
       var token = $('meta[name="csrf-token"]').attr('content');

                if (confirm('Are you sure you want to delete this item?')) {
                    $.ajax({
                        url: '/block/' + id,
                        type: 'DELETE',
                        data: {
                            "_token": token,
                        },
                        success: function(response) {
                            if (response.success) {
                                $('#element-' + id).remove();
                                alert(response.success);
                                location.reload()
                            } else {
                                alert(response.error);
                            }
                        }
                    });
                }
    });

     var myModal = $('#myModal');
    var openModal = $('.openModal');
    var close = $('.closedetail');

    openModal.on('click', function() {
        myModal.css('display', 'block');
    });

    close.on('click', function() {
        myModal.css('display', 'none');
    });

    $(window).on('click', function(event) {
        if ($(event.target).is(myModal)) {
            myModal.css('display', 'none');
        }
    });

     $('#editForm').submit(function(event) {
      var token = $('meta[name="csrf-token"]').attr('content');
                event.preventDefault();
                var id = $(this).attr('data-id');
                var name = $('#named').val();
                var capacite = $('#capacited').val();
                var message = $('#messaged').val();
                var file = $('#pu').val();
                $.ajax({
                    url: '{{ route("update_b") }}',
                    type: 'GET',
                    data: {
                        "_token": token,
                        "name": name,
                        "capacite": capacite,
                        "message": message,
                        "id": id,
                        "file": file,
                    },
                    success: function(response) {
                      console.log(response)
                        if (response.success) {
                            $('#myModal').css('display', 'none');
                            alert(response.success);
                        } else {
                            alert(response.error);
                        }
                    }
                });
            });

     $('#photou').change(function(event) {
       let file = $(this).get(0).files[0]
       if (file) {
        var reader = new FileReader()

        reader.onload = function(){
          $('#img_residenceu').attr('src', reader.result);
        }
        reader.readAsDataURL(file)


         var files = $('#photou')[0].files;
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
                            $('#pu').val(response)
                          }, 
                          error: function(response){
                            
                                console.log(response.responseText);
                                $('#pu').val(response.responseText)
                          }
                     });
       }
               
      });


     $('.open-popup').magnificPopup({

    items: [
     @foreach($blocks as $r)
      {
        src: '/files/{{$r->photo}}',
        title: '{{$r->name}}'
      },
     @endforeach
    ],
    gallery: {
      enabled: true
    },
    type: 'image' // this is a default type
});
    });
  </script>
</body>

</html>




