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
  $conn = new mysqli('localhost','root','','user_details');
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
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <!-- <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="https://www.creative-tim.com/product/argon-dashboard" target="_blank">User profile</a> -->
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <!-- <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text">
            </div> -->
          </div>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="https://demos.creative-tim.com/argon-dashboard/assets/img/theme/team-4.jpg">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="text-black  font-weight-bold">username</span>
                </div>
              </div>
            </a>
            <!-- <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Settings</span>
              </a>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Activity</span>
              </a>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Support</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#!" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div> -->
          </li>
        </ul>
      </div>
    </nav>
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px;background-color:#EAF080; background-size: cover; background-position: center top;">
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="text-black">hello <?php echo $username ?></h1>
            <p class="text-black">This is your profile page. You can see your profile information here</p>
            <a href="#!" class="btn btn-info">Edit profile</a>
          </div>
        </div>
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
                <a href="#" class="btn btn-sm btn-info mr-4">Connect</a>
                <a href="#" class="btn btn-sm btn-info mr-4">Message</a>
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
                  <a href="profile-edit.php" class="btn btn-sm btn-primary">Edit</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-username">Username</label>
                        <input type="text" id="input-username" class="form-control form-control-alternative" value="<?php echo $username ?>" readonly>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" id="input-email" class="form-control form-control-alternative" placeholder="<?php echo $mail ?>" readonly>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-first-name">Phone number</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" value="<?php echo $ph ?>" readonly>
                      </div>
                    </div>
                    <!-- <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">Last name</label>
                        <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="Jesse" readonly>
                      </div>
                    </div> -->
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-first-name">Date Of Birth</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" value="<?php echo $bir ?>" readonly>
                      </div>
                    </div>

                  </div>
                </div>
                <hr class="my-4">
                <!-- Address -->
                <!-- <h6 class="heading-small text-muted mb-4">Contact information</h6> -->
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-address">Address</label>
                        <input id="input-address" class="form-control form-control-alternative" value="<?php echo $addr ?>" type="text" readonly>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                <!-- Description -->
                <!-- <h6 class="heading-small text-muted mb-4">About me</h6> -->
                <div class="pl-lg-4">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group focused">
                      <label class="form-control-label" for="input-address">Education</label>
                      <input id="input-address" class="form-control form-control-alternative" value="<?php echo $edu ?>" type="text" readonly>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group focused">
                      <label class="form-control-label" for="input-address">Professional Information</label>
                      <input id="input-address" class="form-control form-control-alternative" value="<?php echo $info ?>" type="text" readonly>
                    </div>
                  </div>
                <div class="col-md-12">
                  <div class="form-group focused">
                    <label class="form-control-label" for="input-address">Hobbies</label>
                    <input id="input-address" class="form-control form-control-alternative" value="<?php echo $ho ?>" type="text" readonly>
                    </div>
                </div>
                </div>
                </div>
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
