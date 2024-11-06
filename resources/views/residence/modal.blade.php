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

.closer {
    position: absolute;
    top: 30px;
    right: 20px;
    font-size: 30px;
    font-weight: bold;
    cursor: pointer;
    z-index: 99999;
}
input, textarea, select, button {
  font-family: "Montserrat-Regular";
  font-size: 15px;
  color: #666; }

textarea {
  resize: none; }

:focus {
  outline: none; }

.wrapper {
  min-height: 100vh;
  display: flex;
  align-items: center;
  background: url("../images/bg-registration-form-6.jpg") no-repeat center center;
  background-size: cover; }

.inner {
  min-width: 861px;
  transform: translateX(47px);
  margin: auto;
  display: flex;
  background: #fff;
  border-radius: 20px;
  padding-top: 35px;
  padding-bottom: 35px;
  box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
  -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
  -ms-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
  -o-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2); }

.image-holder img {
  border-radius: 15px;
  transform: translateX(-94px); }

form {
  padding-top: 42px;
  min-width: 63.88%;
  transform: translateX(-34px); }

h3 {
  font-size: 25px;
  text-align: center;
  margin-bottom: 21px;
  color: #333;
  text-transform: uppercase;
  font-family: "ElMessiri-SemiBold.ttf"; }

.form-control {
  height: 47px;
  display: block;
  border: 1px solid #f4d5cc;
  background: none;
  border-radius: 5px;
  padding: 0 19px; }
  .form-control:focus {
    border: 1px solid #f4d5cc; }
  .form-control::-webkit-input-placeholder {
    color: #999; }
  .form-control::-moz-placeholder {
    color: #999; }
  .form-control:-ms-input-placeholder {
    color: #999; }
  .form-control:-moz-placeholder {
    color: #999; }

select.form-control {
  -moz-appearance: none;
  -webkit-appearance: none;
  cursor: pointer;
  color: #999; }
  select.form-control option[value=""][disabled] {
    display: none; }

textarea.form-control {
  width: 100%;
  padding-top: 13px;
  padding-bottom: 13px; }

.form-row {
  display: flex;
  margin-bottom: 20px; }
  .form-row .form-control {
    width: 50%; }
    .form-row .form-control:first-child {
      margin-right: 20px; }
  .form-row .form-holder {
    width: 50%; }
    .form-row .form-holder .form-control {
      width: 100%; }

.form-holder {
  position: relative; }
  .form-holder i {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    right: 20px; }

.BTN {
  height: 47px;
  width: 174px;
  display: flex;
  border: none;
  color: #fff;
  align-items: center;
  justify-content: center;
  margin: auto;
  margin-top: 30px;
  cursor: pointer;
  font-family: "Montserrat-Medium";
  text-transform: uppercase;
  background: #84cde1;
  border-radius: 5px;
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  overflow: hidden;
  -webkit-transition-duration: 0.5s;
  transition-duration: 0.5s;
  -webkit-transition-property: color, background-color;
  transition-property: color, background-color; }
  .BTN i {
    margin-left: 8px;
    -webkit-transform: translateZ(0);
    transform: translateZ(0); }
  .BTN:hover {
    -webkit-animation-name: hvr-back-pulse;
    animation-name: hvr-back-pulse;
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-delay: 0.5s;
    animation-delay: 0.5s;
    -webkit-animation-timing-function: linear;
    animation-timing-function: linear;
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
    background-color: #17c8f8;
    color: white; }
    .BTN:hover i {
      -webkit-animation-name: hvr-icon-buzz-out;
      animation-name: hvr-icon-buzz-out;
      -webkit-animation-duration: 0.75s;
      animation-duration: 0.75s;
      -webkit-animation-timing-function: linear;
      animation-timing-function: linear;
      -webkit-animation-iteration-count: infinite;
      animation-iteration-count: infinite; }

@-webkit-keyframes hvr-back-pulse {
  50% {
    background-color: rgba(32, 152, 209, 0.75); } }
@keyframes hvr-back-pulse {
  50% {
    background-color: rgba(32, 152, 209, 0.75); } }
@-webkit-keyframes hvr-icon-buzz-out {
  10% {
    -webkit-transform: translateX(3px) rotate(2deg);
    transform: translateX(3px) rotate(2deg); }
  20% {
    -webkit-transform: translateX(-3px) rotate(-2deg);
    transform: translateX(-3px) rotate(-2deg); }
  30% {
    -webkit-transform: translateX(3px) rotate(2deg);
    transform: translateX(3px) rotate(2deg); }
  40% {
    -webkit-transform: translateX(-3px) rotate(-2deg);
    transform: translateX(-3px) rotate(-2deg); }
  50% {
    -webkit-transform: translateX(2px) rotate(1deg);
    transform: translateX(2px) rotate(1deg); }
  60% {
    -webkit-transform: translateX(-2px) rotate(-1deg);
    transform: translateX(-2px) rotate(-1deg); }
  70% {
    -webkit-transform: translateX(2px) rotate(1deg);
    transform: translateX(2px) rotate(1deg); }
  80% {
    -webkit-transform: translateX(-2px) rotate(-1deg);
    transform: translateX(-2px) rotate(-1deg); }
  90% {
    -webkit-transform: translateX(1px) rotate(0);
    transform: translateX(1px) rotate(0); }
  100% {
    -webkit-transform: translateX(-1px) rotate(0);
    transform: translateX(-1px) rotate(0); } }
@keyframes hvr-icon-buzz-out {
  10% {
    -webkit-transform: translateX(3px) rotate(2deg);
    transform: translateX(3px) rotate(2deg); }
  20% {
    -webkit-transform: translateX(-3px) rotate(-2deg);
    transform: translateX(-3px) rotate(-2deg); }
  30% {
    -webkit-transform: translateX(3px) rotate(2deg);
    transform: translateX(3px) rotate(2deg); }
  40% {
    -webkit-transform: translateX(-3px) rotate(-2deg);
    transform: translateX(-3px) rotate(-2deg); }
  50% {
    -webkit-transform: translateX(2px) rotate(1deg);
    transform: translateX(2px) rotate(1deg); }
  60% {
    -webkit-transform: translateX(-2px) rotate(-1deg);
    transform: translateX(-2px) rotate(-1deg); }
  70% {
    -webkit-transform: translateX(2px) rotate(1deg);
    transform: translateX(2px) rotate(1deg); }
  80% {
    -webkit-transform: translateX(-2px) rotate(-1deg);
    transform: translateX(-2px) rotate(-1deg); }
  90% {
    -webkit-transform: translateX(1px) rotate(0);
    transform: translateX(1px) rotate(0); }
  100% {
    -webkit-transform: translateX(-1px) rotate(0);
    transform: translateX(-1px) rotate(0); } }
@media (max-width: 991px) {
  .inner {
    min-width: auto;
    max-width: 660px; }

  form {
    padding-top: 0; } }
@media (max-width: 767px) {
  .inner {
    display: block;
    transform: translateX(0);
    border-radius: 0;
    box-shadow: none; }

  .image-holder img {
    transform: translateX(0);
    border-radius: 0; }

  form {
    transform: translateX(0);
    padding-top: 40px; }

  .form-row {
    display: block; }
    .form-row .form-control, .form-row .form-holder {
      width: 100%; }

  .form-control {
    margin-bottom: 20px; }

  .wrapper {
    background: none; } }

/*# sourceMappingURL=style.css.map */

  </style>
<div class="modal">
  <div class="modal-content"> 
       <section class="site-section">
        <span class="closer">&times;</span>
<div class="wrapper">
      <div class="inner">
        <div class="image-holder">
         <label for="photo">
          <img id="img_residence" style="width: 300px;height:500px;" src="/admin/images/registration-form-6.jpg" alt="">
        </label>
        </div>
        <form action="">
          <h3>CREER RESIDENCE</h3>
          <div class="row mb-4" style="display: flex;flex-direction: row;">
            <input type="text" class="form-control mb-2 mr-1" id="name"  placeholder="Numero">
            <input type="text" class="form-control mb-2 ml-1" id="capacite" placeholder="Capacite">
          </div>
          <div class="row">
             <textarea name="message" id="message"  placeholder="Description" class="form-control col-12 mt-2" style="height: 130px;"></textarea>
          </div>
         
          <button class="BTN" id="valider_residence" type="submit" >Valider
            <i class="zmdi zmdi-long-arrow-right"></i>
          </button>
        </form>
        
      </div>
    </div>
    </section>
  </div>
</div>
<input type="file" id="photo" style="display: none;" name="">
