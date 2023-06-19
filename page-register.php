<?php
/*
Template Name: Register Page
*/

?>
<?php include_once "headerLink.php"; ?>  
<?php 
include_once "user.php";
include_once "commen.php";
include_once "navigation.php";
?> 
<?php openSession(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Register | Elite Vehicle</title>
  
</head>

<body>
  <div class="hero_area">
    <?php navigationMenu('register'); ?> 

    <div class="container">
      <div class="row">
        <div class="col d-flex justify-content-center">
          <div class="auth-form">
            <div class="container">

              <div class="header">
                <h1>Create an Account</h1>
                <p>Fill out the form below to create a new account.</p>
              </div>

              <form  method="POST" id="register-form">
                
                <div class="form-group">
                  <label for="fullName">Full name</label>
                  <input type="text" name="fullName" id="fullName" class="form-control" />
                </div>

                <div class="form-group">
                  <label for="userName">User name</label>
                  <input type="text" name="userName" id="userName" class="form-control" />
                </div>

                <div class="form-group show-hide-eye">
                  <label for="password">Password</label>
                  <input type="password" name="password" id="password" class="form-control"/>
                  <i class="btn toggle-password fa fa-eye" toggle="#password"></i>
                </div>

                <div class="form-group show-hide-eye">
                  <label for="Cpassword">Confirm Password</label>
                  <input type="password" name="Cpassword" id="Cpassword" class="form-control"/>
                  <i class="btn toggle-confirm-password fa fa-eye" toggle="#Cpassword"></i>
                </div>

                <div class="form-group">
                  <label for="contact">Contact</label>
                  <input type="text" name="contact" id="contact" class="form-control" />
                </div>

                <div class="form-group">
                  <label >You are a ?</label>
                  <div class="w-100 d-flex justify-content-start">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="type" id="Customer" value="2" checked>
                      <label class="form-check-label" for="Customer">Customer</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="type" id="VehicleOwner" value="3">
                      <label class="form-check-label" for="VehicleOwner">Vehicle Owner</label>
                    </div>
                  </div>
                </div>

                <input type="submit" name="register" value="Register" />
              </form>

              <p>Already have an account <a href="/login">Login</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

<?php
    if(isset($_POST['register'])){
        unset($_POST['register']);
        unset($_POST['Cpassword']);
        CreateUser($_POST);
        pageRefresh("login");
    }
  ?>

  <?php include_once "footer.php"; ?>  
  <?php include_once "script.php"; ?>  

  <script type="text/javascript">
    window.onload=()=>{

      function toggleEye(className){
        const toggleBtn = $(className);
        const inputbox = $(toggleBtn.attr("toggle"));
        toggleBtn.click(()=>{
            toggleBtn.toggleClass('fa-eye fa-eye-slash');
            if (inputbox.attr("type") == "password") {
                inputbox.attr("type", "text");
            } else {
                inputbox.attr("type", "password");
            }
        });
      }

      $("#register-form").validate({
        rules:{
          userName : "required",
          fullName: "required",
          password :{required:true, minlength: 5},
          Cpassword :{required:true, minlength: 5, equalTo: "#password"},
          contact : {required:true, minlength: 10, maxlength:10}
        },
        messages:{
          userName : "required*",
          fullName : "required*",
          password : {
            required: "required*",
            minlength: "password least 5 characters long"
          },
          Cpassword : {
            required: "required*",
            minlength: "password least 5 characters long",
            equalTo: "Confirm password not matched"
          },
          contact : {
                        required: "required*",
                        minlength: "phone number must be 10 digits.",
                        maxlength: "phone number must be 10 digits."
                    }
        },
        errorElement: "div"
      });

      toggleEye(".toggle-password");
      toggleEye(".toggle-confirm-password");

    };
  </script>

</body>

</html>