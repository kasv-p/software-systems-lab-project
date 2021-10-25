<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login</title>
      <link rel="stylesheet" href="login-1.css">
      <style media="screen">
      body
      {
        /* background-image: url(https://png.pngtree.com/thumb_back/fh260/background/20210403/pngtree-simple-white-flat-vectors-with-diagonal-cuts-decorative-backdrops-for-your-image_597614.jpg); */
        /* background-image: url(https://i2.wp.com/windowscustomization.com/wp-content/uploads/2018/10/triangles-background.gif?resize=600%2C340&quality=80&strip=all&ssl=1); */
        background-image: url(https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/tp190-sasi-07.jpg?w=1200&h=1200&dpr=1&fit=clip&crop=default&fm=jpg&q=75&vib=3&con=3&usm=15&cs=srgb&bg=F4F4F3&ixlib=js-2.2.1&s=5b3f73ac9b4216ab1590c4ca6ae0e693);
        background-size: 300px 1000px;
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        font-family: Arial;
      }
      </style>
   </head>
   <body>
      <div class="wrapper">
         <div class="title">
            Login
         </div>
         <form action="account.php" method="post">
            <div class="field">
               <input type="email" name = "mail" required>
               <label>Email Address</label>
            </div>
            <div class="field">
               <input type="password" name = "pass" required>
               <label>Password</label>
            </div>
            <div class="content">
               <div class="checkbox">
                  <input type="checkbox" id="remember-me">
                  <label for="remember-me">Remember me</label>
               </div>
               <div class="pass-link">
                  <a href="#">Forgot password?</a>
               </div>
            </div>
            <div class="field">
               <input type="submit" name="Login" value="Login">
            </div>
            <div class="signup-link">
               Not a member? <a href="signup-1.php">Signup now</a>
            </div>
         </form>
      </div>
   </body>
</html>
