<!-- --------LOGIN PRINCIPAL----------------------------------------------------------------- -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/x-icon" href="/assets/logo-vt.svg" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
</head>

<body class="bg-success d-flex justify-content-center align-items-center vh-100">
  <div class="bg-white p-5 rounded-5 text-secondary shadow" style="width: 25rem">

    <!--logo de login-->
    <div class="d-flex justify-content-center">
      <img src="login_registro/assets/login-icon.svg" alt="login-icon" style="height: 7rem" />
    </div>



    <div class="text-center fs-1 fw-semibold">Iniciar sesión</div>
    <form action="login_registro/php/login.php" method="POST">
      <!--logo y campo de username -->
      <div class="input-group mt-4">
        <div class="input-group-text bg-success">
          <img src="login_registro/assets/username-icon.svg" alt="username-icon" style="height: 1rem" />
        </div>
        <!-- <input class="form-control bg-light" type="text" placeholder="Username" /> -->
        <input class="form-control bg-light" type="text" placeholder="Username" name="nombre_user" />
      </div>

      <!--logo y campo de password -->
      <div class="input-group mt-2">
        <div class="input-group-text bg-success">
          <img src="login_registro/assets/password-icon.svg" alt="password-icon" style="height: 1rem" />
        </div>
        <input class="form-control bg-light" type="password" placeholder="Password" name="contrasena_user" />
      </div>

      <!--Olvidaste tu ontraseña-->
      <div class="d-flex justify-content-around mt-1">
        <div class="d-flex align-items-center gap-1">
          <input class="form-check-input" type="checkbox" />
          <div class="pt-1" style="font-size: 0.9rem">Recuérdame</div>
        </div>
        <div class="pt-1">
          <a href="#" class="text-decoration-none text-info fw-semibold fst-italic" style="font-size: 0.9rem">¿Olvidaste
            tu contraseña?</a>
        </div>
      </div>

      <!--Boton iniciar sesion-->
      <!-- <div class="btn btn-success text-white w-100 mt-4 fw-semibold shadow-sm">
      Iniciar sesión
    </div> -->
      <button class="btn btn-success text-white w-100 mt-4 fw-semibold shadow-sm" type="submit" name="loginn">Iniciar
        sesión</button>
    </form>
    <!--No tienes cuenta -->
    <div class="d-flex gap-1 justify-content-center mt-1">
      <div>¿No tienes una cuenta?</div>
      <a href="login_registro/registro.html" class="text-decoration-none text-info fw-semibold">Registrarse</a>
    </div>

    <!--or-->
    <!-- <div class="p-3">
      <div class="border-bottom text-center" style="height: 0.9rem">
        <span class="bg-white px-3">or</span>
      </div>
    </div>

    
    <div class="btn d-flex gap-2 justify-content-center border mt-3 shadow-sm">
      <img src="login_registro/assets/google-icon.svg" alt="google-icon" style="height: 1.6rem" />
      <div class="fw-semibold text-secondary">Continuar con Google</div>

    </div> -->
  </div>
</body>

</html>