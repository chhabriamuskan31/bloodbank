<?php
session_start();
if (isset($_SESSION['hid'])) {
  header("location:bloodrequest.php");
} elseif (isset($_SESSION['rid'])) {
  header("location:sentrequest.php");
} else {
  ?>
  <!DOCTYPE html>
  <html>

  <head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
  </head>
  <?php $title = "Bloodbank | Login"; ?>
  <?php require 'head.php'; ?>

  <body>
    <?php require 'header.php'; ?>

    <div class="container cont">

      <?php require 'message.php'; ?>

      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5">

          <div class="card rounded">
            <ul class="nav nav-tabs justify-content-center bg-light" style="padding: 20px;">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#hospitals">Hospitals</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#receivers">Receiver's</a>
              </li>
            </ul>

            <div class="tab-content">
              <div class="tab-pane container active" id="hospitals">
                <form action="file/hospitalLogin.php" method="post">
                  <i style="margin-right: 5px;" class="fa-solid fa fa-envelope"></i>
                  <label class="text-muted font-weight-bold" >Hospital Email</label>

                  <input type="email" name="hemail" placeholder="Hospital Email" class="form-control mb-4">
                  <i style="margin-right: 5px;" class="fa-solid fa fa-key"></i>
                  <label class="text-muted font-weight-bold" >Hospital
                    Password</label><span style="margin-left: 120px;" class="eye" onclick="hospitaleyeFunction()"><i
                      id="hide1" style="display: none;" class="fa fa-eye"></i><i id="hide2"
                      class="fa fa-eye-slash"></i></span>

                  <input type="password" name="hpassword" placeholder="Hospital Password" id="eyeInput"
                    class="form-control mb-4">


                  <input type="submit" name="hlogin" value="Login" class="btn btn-primary btn-block mb-4">
                </form>
              </div>

              <div class="tab-pane container fade" id="receivers">
                <form action="file/receiverLogin.php" method="post">
                  <i style="margin-right: 5px;" class="fa-solid fa fa-envelope"></i>
                  <label class="text-muted font-weight-bold">Receiver Email</label>
                  <input type="email" name="remail" placeholder="Receiver Email" class="form-control mb-4">
                  <i style="margin-right: 5px;" class="fa-solid fa fa-key"></i>
                  <label class="text-muted font-weight-bold" >Receiver
                    Password</label><span style="margin-left: 120px;" class="eye" onclick="receivereyeFunction()"><i
                      id="hide3" style="display: none;" class="fa fa-eye"></i><i id="hide4"
                      class="fa fa-eye-slash"></i></span>

                  <input type="password" name="rpassword" placeholder="Receiver Password" id="eyeInput2"
                    class="form-control mb-4">

                  <input type="submit" name="rlogin" value="Login" class="btn btn-primary btn-block mb-4">
                </form>
              </div>

            </div>
            <script>
              function hospitaleyeFunction() {
                var x = document.getElementById("eyeInput");
                var y = document.getElementById("hide1");
                var z = document.getElementById("hide2");

                if (x.type === 'password') {
                  x.type = "text";
                  y.style.display = "inline";
                  z.style.display = "none";
                } else {
                  x.type = "password";
                  y.style.display = "none";
                  z.style.display = "inline";
                }

              }

              function receivereyeFunction() {

                var a = document.getElementById("eyeInput2");
                var b = document.getElementById("hide3");
                var c = document.getElementById("hide4");


                if (a.type === 'password') {
                  a.type = "text";
                  b.style.display = "inline";
                  c.style.display = "none";
                } else {
                  a.type = "password";
                  b.style.display = "none";
                  c.style.display = "inline";
                }


              }
            </script>
            <a href="register.php" class="text-center mb-4" title="Click here">Don't have account?</a>
          </div>
        </div>
      </div>
    </div>
    <?php require 'footer.php' ?>
  </body>

  </html>
<?php } ?>