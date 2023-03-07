<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      
      <link rel="stylesheet" href="style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <div class="wrapper">
         <div class="title-text">
            <div class="title login">
               Login Form
            </div>
            <div class="title signup">
               Signup Form
            </div>
         </div>
         <div class="form-container">
            <div class="slide-controls">
               <input type="radio" name="slide" id="login" checked>
               <input type="radio" name="slide" id="signup">
               <label for="login" class="slide login">Admin Login</label>
               <label for="signup" class="slide signup">User Login</label>
               <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
               <form action="index.html" class="login">
                  <div class="field">
                     <input type="text" placeholder="Admin" required>
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Password" required>
                  </div> 
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Login">
                  </div>
               </form>
               <form action="ldetails.php" class="signup" method="post">
                  <div class="field">
                     <input type="text" name="username" placeholder="Username" required>
                  </div>
                  <div class="field">
                     <input type="password"  name="password" placeholder="Password" required>
                  </div>
                                   <div class="field btn">
                     <div class="btn-layer"></div>

                     <input type="submit" value="Signup">
                  </div>
                  <div style="color:white;">
                     Not a member? <a href="index.php">Signup now</a>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <script>
         const loginText = document.querySelector(".title-text .login");
         const loginForm = document.querySelector("form.login");
         const loginBtn = document.querySelector("label.login");
         const signupBtn = document.querySelector("label.signup");
         const signupLink = document.querySelector("form .signup-link a");
         signupBtn.onclick = (()=>{
           loginForm.style.marginLeft = "-50%";
           loginText.style.marginLeft = "-50%";
         });
         loginBtn.onclick = (()=>{
           loginForm.style.marginLeft = "0%";
           loginText.style.marginLeft = "0%";
         });
         /*signupLink.onclick = (()=>{
           signupBtn.click();
           return false;
         });*/
      </script>
   </body>
</html>