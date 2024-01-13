<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title>Login Admin</title>
  <style>
    html, body {
      height: 100%;
      margin: 0;
    }

    .jumbotron {
      height: 100vh;
      background-image: url('{{ asset('img/login.jpg') }}');
      background-size: cover;
      background-position: center;
      color: #000000;
    }

    .card-title {
      text-align: center;
    }

    .form-group {
      display: flex;
      align-items: center;
    }

    .col-form-label {
      width: 120px;
    }
  </style>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="img/logo.jpg" alt="Logo" height="60" class="w-100"></a>
    </nav>
</header>

<section class="jumbotron text-center d-flex align-items-center">
    <div class="container p-0">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Login Admin</h5>
                
                <!-- Form Login -->
                <form action="{{ route('postlogin') }}" method="post">
                  @csrf
                  <div class="form-group">
                      <label for="username" class="col-form-label">Username:</label>
                      <input type="text" class="form-control" id="username" placeholder="Enter your username" name="email">
                  </div>
                  
                  <div class="form-group">
                      <label for="password" class="col-form-label">Password:</label>
                      <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password">
                  </div>
                  
                  <button type="submit" class="btn btn-primary btn-block">Login</button>
              </form>
              
                <!-- End Form Login -->
              </div>
            </div>
          </div>
        </div>
      </div>
</section>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
