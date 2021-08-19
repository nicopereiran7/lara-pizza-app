<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="content-edit">
        <div class="form-image">
          <img src="https://www.papajohns.cl/static/media/bg_login_food.2f4efa9b.png" alt=""/>
        </div>
        <form method="POST">
          @csrf
          <div class="input">
            <div class="label-name">
              <i class="far fa-envelope"></i>
              <label for="email">Email</label>
            </div>
            <div class="input-form">
              <input type="text">
            </div>
          </div>
          <div class="input">
            <div class="label-name">
              <i class="fas fa-lock"></i>
              <label for="email">Contraseña</label>
            </div>
            <div class="input-form">
              <input type="text">
            </div>
          </div>
          <button>INGRESAR</button>
          <div>
            <p>¿Aun no tienes cuenta?</p>
          </div>
        </form>
      </div>
      {{-- <button type="button" class="close-edit" data-dismiss="modal" aria-label="Close">
        <i class="fas fa-times"></i>
      </button> --}}
    </div>
  </div>
</div>

<style>
  @import "./_variables.css";
  /* modal */
@media (min-width: 576px) {
    .modal-dialog {
        max-width: 600px;
    }
}

.content-edit {
    padding: 0 100px 40px;
}

.close-edit {
    height: 20px;
    position: absolute;
    right: 15px;
    top: 15px;
    width: 20px;
    z-index: 1;
}

.form-image img {
    width: 100%;
    object-fit: cover;
}

.input {
    margin-bottom: 16px;
}

.label-name label {
    color: #717171;
}

.input-form input {
    width: 100%;
    border: 1px solid #d6d6d6;
    padding: 4px;
}


</style>