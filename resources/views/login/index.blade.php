<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body class="login-body">
    <div class="container">
      <div class="container-login">
          <div class="form_content">
            {{-- <img src="{{ asset('img/logo.png') }}" class="" height="130" width="200"> --}}
            <h1><center>¿Aún no tienes cuenta?</center></h1>
            <center><a href="#" class="button">Registrate Aquí</a></center>
          </div>
          <div class="login_form">

              <h1><center>Inicia Sesión</center></h1>
              <form>
                  <input type="text" name="" required placeholder="Usuario">
                  <input type="password" name="" required placeholder="Contraseña">
                  <input type="submit" name="" value="Entrar">
              </form>
              <center><a href="#">Olvidaste la Contraseña</a></center>
          </div>
      </div>
    </div>
  </body>
