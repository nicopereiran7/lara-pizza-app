@extends('layouts.layout')

@section('content')
<!-- Modal -->
<div class="register">
  <form action={{ route('registrar.user') }} method="POST" class="form-register">
    @csrf
    <h2>REGISTRATE</h2>
    <div class="input">
      <div class="label-name">
        <i class="far fa-envelope"></i>
        <label for="email">Nombre</label>
      </div>
      <div class="input-form">
        <input type="text" name="name">
      </div>
    </div>
    <div class="input">
      <div class="label-name">
        <i class="far fa-envelope"></i>
        <label for="email">Email</label>
      </div>
      <div class="input-form">
        <input type="email" name="email">
      </div>
    </div>
    <div class="input">
      <div class="label-name">
        <i class="fas fa-lock"></i>
        <label for="email">Contraseña</label>
      </div>
      <div class="input-form">
        <input type="password" name="password">
      </div>
    </div>
    <div class="input">
      <div class="label-name">
        <i class="fas fa-lock"></i>
        <label for="email">Repetir Contraseña</label>
      </div>
      <div class="input-form">
        <input type="password" name="repeatPassword">
      </div>
    </div>
    <button type="submit" class="cart">INGRESAR</button>
  </form>
</div>

<style>
  /* modal */
.register {
  padding: 0 120px;
  display: grid;
  justify-content: center;
  margin-top: 40px;
}

.form-register {
  padding: 40px;
  min-width: 400px;
  background-color: #fff;
  box-shadow: 0 2px 4px 0 rgb(0 0 0 / 15%);
}
</style>
@endsection