<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Fullscreen Modal Example</title>
<style type="text/css">
	.modal {
  display: none;
  position: fixed; 
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0,0.4);
  z-index: 9999;
}

.modal-content {
  background-color: #fefefe;

  padding: 20px;
  border: 1px solid #888;
  width: 100%;
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
  z-index: 9999;
  position: fixed;
  top: 10;
  right: 10;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>
<body>

<div class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
        <div class="colorlib-product" style="">
      <div class="container">
        <div class="row row-pb-lg product-detail-wrap">

          <div class="col-sm-12">
            <div class="owl-carousel">

              <div class="item">
                <div class="product-entry border">
                  <a href="#" class="prod-img">
                    <img src="images/item-1.jpg" id="img-reservation" style="width: 100%;height: 550px;" class="img-fluid" alt="Free html5 bootstrap 4 template">
                  </a>
                </div>
              </div>

            </div>
          </div>

          <div class="col-sm-4">
            <div class="product-desc">
              <div style="display: flex;flex-direction: row;">
                <h3 id="name-reservation" style="margin-left: 25px;">Women's Boots Shoes Maca</h3>
                <h3 id="montant-reservation" style="margin-left: 55px;">Women's Boots Shoes Maca</h3>
                <h3 id="montant-reservation"></h3>
              </div>
              
             
                     <div class="input-group mb-4">
                        <h2 style="font-family: Roboto;">Signature </h2>
                         <canvas id="signature-pad" class="" width="1000" height="200" style="border: 1px solid #50bc91;"></canvas>
                         <button class="btn btn-secondary mt-4"  id="clear">EFFACER</button>
                         <button class="btn btn-success mt-4"  id="save">ENREGISTRER</button>
                         <button class="btn btn-danger mt-4"  id="danger">ANNULER</button>
                         <form id="signature-form" method="POST" action="{{ route('save-signature') }}">
                             @csrf
                             <input type="hidden" name="signature" id="signature-input">
                             <input type="hidden" value="" id="reservation" name="id">
                             <button type="submit" class="btn btn-info mt-4" id="submit-btn"><i class="icon-shopping-cart"></i>VALIDER</button>
                         </form>
                    </div>
                    <div class="row">
              </div>
            </div>
          </div>
        </div>

   

      </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/signature_pad.min.js"></script>
<script src="script.js"></script>
</body>
</html>