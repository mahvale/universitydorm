<style type="text/css">


.image-container img {
    max-width: 100%;
    height: auto;
    cursor: pointer;
}

/* Modal Styles */
.modalimg {
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

.modal-contentimg {
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

.modal-contentimg img {
    max-width: 100%;
    height: auto;
}

.closeimg {
    position: absolute;
    top: 50px;
    right: 20px;
    font-size: 30px;
    font-weight: bold;
    cursor: pointer;
}

.modal.show .modal-contentimg {
    transform: scale(1);
}

@keyframes animateTop {
    from {top: -300px; opacity: 0}
    to {top: 50%; opacity: 1}
}

</style>
<div id="imageModal" class="modalimg">
        <div class="modal-content">
            <span class="closeimg">&times;</span>
            <img id="modalImage" src="" alt="Scaled Image">
        </div>
    </div>