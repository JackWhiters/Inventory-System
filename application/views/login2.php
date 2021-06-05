<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js"crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/style1.css') ?>" />
    <title>Login</title>

  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">


          <form action="<?php echo base_url('auth/login') ?>" class="sign-in-form" method="post">

    <?php echo validation_errors(); ?>  

    <?php if(!empty($errors)) {
      echo $errors;
    } ?>
            <a class="title" href="<?php echo base_url('auth/login') ?>" style="text-decoration:none" ><b>Login</b></a>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="email" name="email" id="email" placeholder="Email" data-validate = "masukkan email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password" data-validate="masukkan password" />
            </div>
            <input type="submit" value="Login" class="btn solid" />
  
          </form>
          <form action="#" class="sign-up-form">
            <h2 class="title">Nama Kelompok</h2>
            <tr>
              <td><h2>Jundi AL Hafidz (2020310084)</h2></td>
              <td><h2>Fatih alsena (2020310077)</h2></td>
              <td><h2>Hafidz Kholifatur.R (2020310110)</h2></td>
              <td><h2>Annisa sholehah (2020310087)</h2></td>
              <td><h2>Ayu Medina Prameswari (2020320069)</h2></td>
            </tr>
 
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>KELOMPOK 6</h3>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
                ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              LIHAT 
            </button>
          </div>
          <img src="<?php echo base_url('assets/img/log.svg') ?>" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Login Kembali</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="<?php echo base_url('assets/img/register.svg') ?>" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="<?php echo base_url('assets/app.js') ?>"></script>
  </body>
</html>
