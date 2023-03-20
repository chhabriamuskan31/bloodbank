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
    <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
  </head>
  <?php $title = "Bloodbank | Register"; ?>
  <?php require 'head.php'; ?>

  <body>
    <?php include 'header.php'; ?>

    <div class="container cont">

      <?php require 'message.php'; ?>

      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5">
          <div class="card rounded">
            <ul class="nav nav-tabs justify-content-center bg-light" style="padding: 20px">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#hospitals">Hospitals</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#receivers">Receivers</a>
              </li>
            </ul>

            <div class="tab-content">

              <div class="tab-pane container active" id="hospitals">

                <form action="file/hospitalReg.php" method="post" enctype="multipart/form-data">
                  <input type="text" name="hname" placeholder="Hospital Name" class="form-control mb-3" required>
                  <input type="text" name="hcity" placeholder="Hospital City" class="form-control mb-3" required>
                  <input type="tel" name="hphone" placeholder="Hospital Phone Number" class="form-control mb-3" required
                    pattern="[0,6-9]{1}[0-9]{9,11}"
                    title="Password must have start from 0,6,7,8 or 9 and must have 10 to 12 digit">
                  <input type="email" name="hemail" placeholder="Hospital Email" class="form-control mb-3" required><span
                    style="margin-left: 300px;" class="eye" onclick="hospitaleyeFunction()"><i id="hide1"
                      style="display: none;" class="fa fa-eye"></i><i id="hide2" class="fa fa-eye-slash"></i></span>
                  <input type="password" name="hpassword" placeholder="Hospital Password" id="eyeInput"
                    class="form-control mb-3" required minlength="6">
                  <input type="submit" name="hregister" value="Register" class="btn btn-primary btn-block mb-4">
                </form>

              </div>


              <div class="tab-pane container fade" id="receivers">

                <form action="file/receiverReg.php" method="post" enctype="multipart/form-data">
                  <input type="text" name="rname" placeholder="Receiver Name" class="form-control mb-3" required>
                  <select name="rbg" class="form-control mb-3" required>
                    <option disabled="" selected="">Blood Group</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                  </select>
                  <input type="text" name="rcity" placeholder="Receiver City" class="form-control mb-3" required>
                  <input type="tel" name="rphone" placeholder="Receiver Phone Number" class="form-control mb-3" required
                    pattern="[0,6-9]{1}[0-9]{9,11}"
                    title="Password must have start from 0,6,7,8 or 9 and must have 10 to 12 digit">
                  <input type="email" name="remail" placeholder="Receiver Email" class="form-control mb-3" required><span
                    style="margin-left: 300px;" class="eye" onclick="receivereyeFunction()"><i id="hide3"
                      style="display: none;" class="fa fa-eye"></i><i id="hide4" class="fa fa-eye-slash"></i></span>
                  <input type="password" name="rpassword" placeholder="Receiver Password" id="eyeInput2"
                    class="form-control mb-3" required minlength="6">
                  <input type="submit" name="rregister" value="Register" class="btn btn-primary btn-block mb-4">
                </form>

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
                  }
                  else {
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
                  }
                  else {
                    a.type = "password";
                    b.style.display = "none";
                    c.style.display = "inline";
                  }


                }
              </script>
            </div>
            <a href="login.php" class="text-center mb-4" title="Click here">Already have account?</a>
          </div>
        </div>
      </div>
    </div>
    <?php require 'footer.php' ?>
  </body>

  </html>
<?php } ?>