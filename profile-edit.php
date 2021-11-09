<?php
  $email="abc@gmail.com";
  $conn = new mysqli('localhost','root','','user_details');
  $sql  = "SELECT * FROM profile where email LIKE '$email'";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc())
  {
    $mail=$row['email'];
    $bir=$row['birth'];
    $addr=$row['address'];
    $ph=$row['phone'];
    $edu=$row['education'];
    $info=$row['information'];
    $ho=$row['hobby'];
    //$image=$['profile_image'];
    break;
  }
  //$conn = new mysqli('localhost','root','','user_details');
  $sql  = "SELECT * FROM details where email LIKE '$email'";
  $result = $conn->query($sql);
  while($row=$result->fetch_assoc())
  {
    $username=$row['name'];
    break;
  }
  ?>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link rel="stylesheet" href="profile.css">
<body>
  <div class="main-content">
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
          </div>
        </form>
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
              </div>
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 300px;background-color:#EAF080; background-size: cover; background-position: center top;">
      <div class="container-fluid d-flex align-items-center">
        <!-- <div class="row"> -->
          <!-- <div class="col-lg-7 col-md-10"> -->
            <h1 class="text-black">&nbsp;&nbsp;Edit Information</h1>
            <!-- <p class="text-black">You can edit your profile information here</p> -->
            <!-- <a href="#!" class="btn btn-info">Edit profile</a> -->
          <!-- </div> -->
        <!-- </div> -->
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
          <div class="card card-profile shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="https://demos.creative-tim.com/argon-dashboard/assets/img/theme/team-4.jpg" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <div class="d-flex justify-content-between">
              </div>
            </div>
            <div class="card-body pt-0 pt-md-4">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                    <div>
                      <span class="heading">22</span>
                      <span class="description">Friends</span>
                    </div>
                    <div>
                      <span class="heading">10</span>
                      <span class="description">Photos</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <h3>
                  Jessica Jones
                </h3>
                <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i>Bucharest, Romania
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Profile Info</h3>
                </div>
                <div class="col-4 text-right">
                  <!-- <input class="btn btn-sm btn-primary" type="submit" name="editor" value="confirm"> -->
                </div>
              </div>
            </div>
            <div class="card-body">
              <form action="<?php $_PHP_SELF ?>" method="post">
                <div class="pl-lg-4">

                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-username">Username</label>
                        <input type="text" id="input-username" class="form-control form-control-alternative" name="a" value="<?php echo $username; ?>" >
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-first-name">Phone number</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" name="c" value="<?php echo $ph ?>" >
                    </div>
                  </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-first-name">Date Of Birth</label>
                        <input type="date" id="input-first-name" class="form-control form-control-alternative" name="d" value="<?php echo $bir ?>" >
                      </div>
                    </div>

                </div>
                <!-- <hr class="my-4"> -->
                <div class="pl-lg-4">
                    <div class="col-md-12">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-address">Address</label>
                        <input id="input-address" class="form-control form-control-alternative" name="e" value="<?php echo $addr ?>" type="text" >
                      </div>
                    </div>
                </div>
                <!-- <hr class="my-4"> -->
                <!-- Description -->
                <!-- <h6 class="heading-small text-muted mb-4">About me</h6> -->
                <div class="pl-lg-4">
                  <div class="col-md-12">
                    <div class="form-group focused">
                      <label class="form-control-label" for="input-address">Education</label>
                      <input id="input-address" class="form-control form-control-alternative" name="f" value="<?php echo $edu ?>" type="text" >
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group focused">
                      <label class="form-control-label" for="input-address">Professional Information</label>
                      <input id="input-address" class="form-control form-control-alternative" name="g" value="<?php echo $info ?>" type="text" >
                    </div>
                  </div>
                <div class="col-md-12">
                  <div class="form-group focused">
                    <label class="form-control-label" >Hobbies</label>
                    <input id="input-address" class="form-control form-control-alternative" name="h" value="<?php echo $ho ?>" type="text" >
                    </div>
                    <input type="submit" name="editor" class="btn btn-sm btn-primary" value="update">
                </div>

                </div>
                <?php
                if(isset($_POST['editor']))
                {
                  echo "<script>alert('ffff')</script>";
                   $conn = new mysqli('localhost','root','','user_details');
                   $aa=$_POST["a"];
                   $cc=$_POST["c"];
                   $dd=$_POST["d"];
                   $ee=$_POST["e"];
                   $ff=$_POST["f"];
                   $gg=$_POST["g"];
                   $hh=$_POST["h"];
                   $check=1;
                   $x='abc@gmail.com';
                   $sql="UPDATE user_details.profile SET hobby='$hh',information='$gg',education='$ff',address='$ee',birth='$dd',phone='$cc' WHERE email LIKE '$x'";
                   ini_set('display_errors', 1);
                   if($conn->query($sql)==TRUE)
                   {
                     echo "<script>alert('updated successfully')</script>";
                   }
                   else
                   {
                      $check=0;
                   }
                   $sql1="UPDATE user_details.details SET name='$aa' WHERE email LIKE '$x'";
                   if($conn->query($sql1)==TRUE)
                   {
                     echo "<script>alert('updated successfully')</script>";
                   }
                   else
                   {
                      $check=0;
                      echo "<script>alert('not successfully')</script>";
                   }
                }
                ?>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer">
    <br><br>
  </footer>
</body>
