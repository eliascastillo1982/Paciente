<?php
include './config/connection.php';

$message = '';

if (isset($_POST['login'])) {
  $userName = $_POST['user_name'];
  $password = $_POST['password'];

  $encryptedPassword = md5($password);

  $query = "select `id`, `display_name`, `user_name`, 
`profile_picture` from `users` 
where `user_name` = '$userName' and 
`password` = '$encryptedPassword';";

  try {
    $stmtLogin = $con->prepare($query);
    $stmtLogin->execute();

    $count = $stmtLogin->rowCount();
    if ($count == 1) {
      $row = $stmtLogin->fetch(PDO::FETCH_ASSOC);

      $_SESSION['user_id'] = $row['id'];
      $_SESSION['display_name'] = $row['display_name'];
      $_SESSION['user_name'] = $row['user_name'];
      $_SESSION['profile_picture'] = $row['profile_picture'];

      header("location:dashboard.php");
      exit;
    } else {
      $message = 'Usuario o contraseña incorrectos';
    }
  } catch (PDOException $ex) {
    echo $ex->getTraceAsString();
    echo $ex->getMessage();
    exit;
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema de Gestión de Pacientes</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <link rel="shortcut icon" href="./dist/img/logo1.png" type="image/x-icon">

  <style>
    .login-box {
      width: 430px;
    }

    #system-logo {
      width: 5em !important;
      height: 5em !important;
      object-fit: cover;
      object-position: center center;
    }

    body {
      background-color: #fc7d1c;
    }
  </style>
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo mb-0">
      <img src="dist/img/logo1.jpg" class="img-thumbnail p-0 border rounded-circle" id="system-logo">
      <div class="text-center h2 mb-0">Control de Pacientes "MediWeb"  </div>
    </div>
    <!-- /.login-logo -->
    <div class="card card-outline card-primary rounded-0 shadow">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Usuario</p>
        <form method="post">
          <div class="input-group mb-0">
            <input type="text" class="form-control form-control-lg rounded-0 autofocus" placeholder="Ingresa tu usuario" id="user_name" name="user_name">
             <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>

 
              </div>
            </div>
          </div>
          <p class="login-box-msg">Contraseña</p>
          <div class="input-group mb-3">
            <input type="password" class="form-control form-control-lg rounded-0" placeholder="Ingresa tu contraseña" id="password" name="password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <button name="login" type="submit" class="btn btn-primary rounded-0 btn-block">Ingresar</button>
            </div>
            <!-- /.col -->
          </div>

          <div class="row">
            <div class="col-md-12">
              <p class="text-danger">
                <?php
                if ($message != '') {
                  echo $message;
                }
                ?>
              </p>
            </div>
          </div>
        </form>


      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->

</body>

</html>