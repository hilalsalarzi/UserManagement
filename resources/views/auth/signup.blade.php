<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Signup Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f2f2f2;
    }
    .signup-container {
      max-width: 450px;
      margin: 50px auto;
      background-color: #ffffff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    .form-title {
      text-align: center;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>

  <div class="signup-container">
    <h2 class="form-title">Signup</h2>
    <form action="{{ route('createAccount') }}" method="POST">
        @csrf
      <div class="mb-3">
        <label for="fullName" class="form-label">Full Name</label>
        <input type="text" name="name" class="form-control" id="fullName" >
      </div>

      <div class="mb-3">
        <label for="emailInput" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="emailInput" >
      </div>

      <div class="mb-3">
        <label for="passwordInput" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="passwordInput" >
      </div>

      <div class="mb-3">
        <label for="confirmPassword" class="form-label">Confirm Password</label>
        <input type="password" name="password_confirmation" class="form-control" id="confirmPassword" >
      </div>

      <button type="submit" class="btn btn-primary w-100">Create Account</button>
    </form>
    {{-- superglobal variable --}}

          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach

    <p class="mt-3 text-center">Already have an account? <a href="login.html">Login here</a></p>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
