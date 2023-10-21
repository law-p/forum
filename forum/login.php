<?php
ob_start();
session_start();
?>
<!doctype html>
<html lang="en">
<head>
<?php include 'head.php'; ?>
</head>
<body>
<form method="post" action="loginprocessor">
 <div class="container d-flex flex-column"> 

  <div class="row align-items-center justify-content-center p-5">
        <div class="col-12 col-md-8 col-lg-4">
          <div class="card shadow-sm">
            <div class="card-body">
              <div class="mb-4">
              <h4 class="text-primary text-center">Login Now</h4>
  <div class="form-group">
    <label for="EMAIL">Email address:</label>
    <input type="email" class="form-control" name="EMAIL" require>
  </div>
  <div class="form-group">
    <label for="PASSWORD">Password:</label>
    <input type="password" class="form-control" name="PASSWORD" require>
  </div>
  <p class="text-center mt-5">Don't have an account?
                                    <a href="register"><span class="text-primary">Sign Up</span></a>
                                  </p>
   <a href="forgot-password.php"><p class="text-center text-primary">Forgot your password?</p></a>
  <button type="submit" name="sent" class="btn btn-primary">Submit</button> 
            </div>
          </div>
        </div>
      </div></div>
    </form>

 
<!-- jQuery library -->   
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<?php
ob_end_flush();
?>
</body>
</html>