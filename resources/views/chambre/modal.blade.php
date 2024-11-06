 <style type="text/css">


button {
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
}

.modal {
    display: none;
    position: fixed; 
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.8);
    z-index: 99999;
}

.modal-content {
    position: relative;
    margin: auto;
    padding: 20px;
    background-color: white;
    width: 80%;
    max-width: 1000px;
    top: 50%;
    transform: translateY(-50%);
    text-align: center;
}

.closeb {
    position: absolute;
    top: 10px;
    right: 20px;
    font-size: 30px;
    font-weight: bold;
    cursor: pointer;
    z-index: 99999;
}

  </style>
<div class="modal">
  <div class="modal-content">
       <section class="site-section">
        <span class="closeb">&times;</span>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2 class="mb-5">CREER CHAMBRE</h2>
          <form action="#" method="post">
                  <div class="row">
                    <div class="col-md-12 form-group"> 
                      <label for="name">Name</label>
                      <input type="text" id="name" class="form-control">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="phone">Capacite</label>
                      <input type="text" id="capacite" class="form-control">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="phone">Prix</label>
                      <input type="text" id="prix" class="form-control">
                    </div>
                  </div>


                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="phone">Block</label>
                      <select name="residence" id="blocs" class="form-control">
                        @forelse($blocks as $r)
                        <option value="{{$r->id}}"> {{$r->name}} </option>
                         @empty
                         <option disabled >AUCUN BLOCK</option>
                         @endforelse
                      </select>
                    </div> 
                  </div>
                 
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="message">Description</label>
                      <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="submit" value="Valider" id="valider_chambre" class="btn btn-primary">
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-5">
                <h3 class="mb-5">Image</h3>
                <p class="mb-5">
                <label for="photo">
                  <img src="/admin/images/img_4.jpg" id="img_residence" alt="" class="img-fluid">
                 </label>
                </p>
              </div>
        </div>
      </div>
    </section>
  </div>
</div>
<input type="file" id="photo" style="display: none;" name="">



                    
                 