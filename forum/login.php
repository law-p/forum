<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login & Register Page</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    /* Custom Styles */
    /* You can add your custom styles here */
  </style>
</head>

<body class="bg-dark">
  <div class="container">
    <div class="row mt-5">
      <div class="col-md-6 offset-md-3">
        <!-- Login Form -->
        <div class="card">
          <div class="card-header bg-primary text-white">
            <h3 class="text-center"><i class="fas fa-sign-in-alt"></i> Login</h3>
          </div>
          <div class="card-body">
            <!-- Login Form Content -->
            <form>
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" class="form-control" required>
              </div>
              <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Login</button>
              <a class="mx-3" href="register.php">Register</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS (Optional) -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>