<?php include("path.php"); 
  include("app/controllers/users.php");

?>
<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My work</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/86effb91f2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  </head>
  <body>
    
    <?php include("app/include/header.php"); ?>

    <!-- END HEADER -->


    <!-- BEGIN FORM -->
    <div class="container reg_form">
      <form class="row justify-content-center" method="post" action="log.php">
          <h2 class="col-12">Авторизация</h2>
          <div class="mb-3 col-12 col-md-4 err">
              <p><?=$errMsg?></p>
          </div>
          <div class="w-100"></div>
          <div class="mb-3 col-12 col-md-4">
              <label for="formGroupExampleInput" class="form-label">Ваша почта (при регистрации)</label>
              <input name="mail" value="<?=$email?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="введите ваш email...">
          </div>
          <div class="w-100"></div>
          <div class="mb-3 col-12 col-md-4">
              <label for="exampleInputPassword1" class="form-label">Пароль</label>
              <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="введите ваш пароль...">
          </div>
          <div class="w-100"></div>
          <div class="mb-3 col-12 col-md-4">
              <button type="submit" name="button-log" class="btn btn-secondary">Войти</button>
              <a href="aut.html">Зарегистрироваться</a>
          </div>
      </form>
    </div>
    <!-- END FORM -->


    <!-- footer BEGIN -->
    <?php include("app/include/footer.php"); ?>
    <!-- footer END -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- 
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
-->
  </body>
</html>