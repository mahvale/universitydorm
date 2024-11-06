<style type="text/css">
	/* styles.css */
body {
    font-family: Arial, sans-serif;
}

#openModal {
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
}

.modaldetail {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.9);
    z-index: 9999;
}

.modal-contentdetail {
    position: relative;
    margin: auto;
    padding: 20px;
    top: 50%;
    transform: translateY(-50%);
    width: 80%;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    animation-name: animateTop;
    animation-duration: 0.4s;
}

@keyframes animateTop {
    from {top: -300px; opacity: 0}
    to {top: 50%; opacity: 1}
}

.closedetail {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.closedetail:hover,
.closedetail:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

</style>

<div id="myModal" class="modaldetail">
        <div class="modal-contentdetail">
            <span class="closedetail">&times;</span>
             <section class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2 class="mb-5 text-uppcase">Residence <span id="rname"></span> </h2>
          <form action="#" method="post" id="editForm">
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Name</label>
                      <input type="text" id="named" value=""  class="form-control ">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="phone">Capacite</label>
                      <input type="text" id="capacited" value="" class="form-control ">
                    </div>
                  </div>
                 
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="message">Description</label>
                      <textarea name="message" id="messaged"  class="form-control " cols="30" rows="8"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="submit" value="Modifier" id="" class="btn btn-primary">
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-5">
                <h3 class="mb-5">Image</h3>
                <p class="mb-5">
                <label for="photo">
                  <img src="/admin/images/img_4.jpg" id="img_residenced" alt="" class="img-fluid">
                 </label>
                </p>
              </div>
        </div>
      </div>
    </section>
        </div>
    </div>
<input type="file" id="photo" style="display: none;" name="">
