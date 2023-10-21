<?php
ob_start();
session_start();
?>
<!doctype html>
<html lang="en">
<head>
<?php include 'head.php'; ?>
<style>
    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        font-weight: bold;
    }

    .form-control {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 8px;
        width: 100%;
    }

    /* Style the submit button */
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    /* Style the link */
    .text-primary {
        color: #007bff;
    }
</style>
</head>
<body>
<form method="post" action="register-processor">
<div class="container d-flex flex-column">
      <div class="row align-items-center justify-content-center p-5">
        <div class="col-12 col-md-8 col-lg-4">
          <div class="card shadow-sm">
            <div class="card-body">
              <div class="mb-4">
              <h4 class="text-primary text-center">Create Coders Account</h4>
              <div class="form-group">
    <label for="text"><i class="fas fa-user"></i> First Name:</label>
    <input type="text" class="form-control" name="FNAME" required>
</div>

<div class="form-group">
    <label for="text"><i class="fas fa-user"></i> Last Name:</label>
    <input type="text" class="form-control" name="LNAME" required>
</div>

<div class="form-group">
    <label for="email"><i class="fas fa-envelope"></i> Email address:</label>
    <input type="email" class="form-control" name="EMAIL" required>
</div>

<div class="form-group">
    <label for="ABOUT_ME"><i class="fas fa-info-circle"></i> About:</label>
    <textarea class="form-control" name="ABOUT_ME"></textarea>
</div>

<div class="form-group">
    <label for="PHONE"><i class="fas fa-phone"></i> Phone Number:</label>
    <input type="tel" class="form-control" name="PHONE" required>
</div>

<div class="form-group">
    <label for="WEBSITE"><i class="fas fa-globe"></i> Add your homepage:</label>
    <input type="url" class="form-control" name="WEBSITE" required placeholder="http://example.com">
</div>

<div class="form-group">
    <label for="SKILLS"><i class="fas fa-cogs"></i>Skills:</label>
    <input type="text" class="form-control" name="SKILLS" placeholder="HTML, CSS, JS" required>
</div>

<div class="form-group">
    <label for="PASSWORD"><i class="fas fa-lock"></i> Password:</label>
    <input type="password" class="form-control" name="PASSWORD" required>
</div>

<div class="form-group">
    <label for="PASSWORD"><i class="fas fa-lock"></i> Confirm Password:</label>
    <input type="password" class="form-control" name="CONFIRM_PASSWORD" required>
</div>

<div class="form-group form-check">
    <input type="checkbox" class="form-check-input" required>
    <label class="form-check-label" for="check1">I agree to all <a href="#">Terms of Service</a></label>
</div>

<div class="d-grid gap-2">
    <button type="submit" name="sent" class="btn btn-primary"><i class="fas fa-user-plus"></i> Create Account</button>
</div>

<p class="text-center mt-1">Already have an account?
    <a href="login"><span class="text-primary">Sign in</span></a>
</p>
            </div>
          </div>
        </div>
      </div>
</div>
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