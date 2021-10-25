<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login Form Design | CodeLab</title>
      <link rel="stylesheet" href="login-1style.css">
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
            Sign up
         </div>
         <!-- <script>
    function validate()
    {
        if(document.getElementById("password").value!=document.getElementById("confpassword").value)
        {
          //alert("Passwords do no match");
          return false;
        }
        return document.getElementById("password").value==document.getElementById("confpassword").value;
    }
    </script>-->
         <form action="account.php" method="post">
             <div class="field">
                <input type="text" name="username" required>
                <label>Username</label>
             </div>
            <div class="field">
               <input type="email" name="email" required>
               <label>Email Address</label>
            </div>
            <div class="field">
               <input type="password" id="password" name="password" required>
               <label>Password</label>
            </div>
            <!-- <div class="field">
              <input type="password" id="confpassword" name="confpassword" required>
              <label>Confirm Password</label>
            </div> -->
            <div class="field">
               <input type="submit" name ="signup" value="Sign Up">
            </div>
         </form>
         <script>
          </script>
      </div>
   </body>
</html>
