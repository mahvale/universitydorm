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
  <div class="modal-content">
       <section class="site-section">
        <span class="closedetail">&times;</span>
<div class="wrapper">
      <div class="inner">
        <div class="image-holder">
         <label for="photo">
          <img id="img_residenceu" style="width: 300px;height:500px;" src="/admin/images/registration-form-6.jpg" alt="">
        </label>
        </div>
        <form action="#" method="post" id="editForm">
          <h3>BLOCKS <span id="rname"></span></h3>
          <div class="row mb-4" style="display: flex;flex-direction: row;">
            <input type="text" class="form-control col-5 mr-1" id="named"  placeholder="Numero">
            <input type="text" class="form-control col-5 ml-1" id="capacited" placeholder="Capacite">
          </div>
          <div class="row">
            <div class="form-holder col-5">
              <select name="residence" id="residenced"  class="form-control">
                <option value="" disabled selected>Residence</option>
                 @forelse($res as $r)
                              <option value="{{$r->id}}"> {{$r->name}} </option>
                               @empty
                               <option disabled >AUCUNE RESIDENCE</option>
                               @endforelse
              </select>
              <i class="zmdi zmdi-chevron-down"></i>
            </div>
             <textarea name="message" id="messaged"  placeholder="Description" class="form-control col-6" style="height: 130px;"></textarea>
          </div>
         
          <button class="BTN" id="Modifier" type="submit" >MODIFIER
            <i class="zmdi zmdi-long-arrow-right"></i>
          </button>
        </form>
        
      </div>
    </div>
    </section>
  </div>
</div>
<input type="file" id="photou" style="display: none;" name="">
<input type="hidden" id="pu" value="">

