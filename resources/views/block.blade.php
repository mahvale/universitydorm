 @include('layout.header')
  <div class="container-scroller" id="content" style="display: none;" >
    <!-- partial:partials/_navbar.html -->

    <!-- partial -->
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <!-- partial:partials/_sidebar.html -->
     @include('layout.sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
           <div class="col-lg-12 offset-lg-1">
                        <div class="ft-newslatter mt-2" style="display:flex;flex-direction: row;margin-top: 12px;">
                            <p style="margin-right:500px;" >.</p>
                            <form action="#" class="fn-form mt-2"style="display:flex;flex-direction: row;">
                                <input id="search_user" type="text" placeholder="Search...">
                                <button id="submit_search" type="submit"><i class="fa fa-send"></i></button>
                            </form>
                        </div>
                       
                          <ul class="list-group col-3" id="list_user" style="position:absolute;left:750px;">
                              
                          </ul>
 
          <div class="row mt-3">
              <!--================Home Banner Area form-residence =================-->
      
  <!--================End Home Banner Area =================-->
    @include('layout.show-block2')
  <!--================Booking Area =================-->
  
  <!--================End Booking Area =================-->
          </div>



        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('layout.footer')
        @include('layout.event')