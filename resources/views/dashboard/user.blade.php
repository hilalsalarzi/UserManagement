<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>User Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    body {
      min-height: 100vh;
      background-color: #f8f9fa;
    }
    .sidebar {
      height: 100vh;
      background-color: #343a40;
      color: white;
    }
    .sidebar a {
      color: white;
      text-decoration: none;
    }
    .sidebar a:hover {
      background-color: #495057;
      display: block;
    }
    .content {
      padding: 20px;
    }
  </style>
</head>
<body>
<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <nav class="col-md-2 d-none d-md-block sidebar p-3">
      <h4 class="text-white text-center mb-4">User Panel</h4>
      <ul class="nav flex-column">
        <li class="nav-item mb-2">
          <a class="nav-link" href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        </li>
        <li class="nav-item mb-2">
          <a class="nav-link" href="#"><i class="fas fa-users"></i> Users</a>
        </li>
        <li class="nav-item mb-2">
          <a class="nav-link" href="#"><i class="fas fa-box"></i> Products</a>
        </li>
        <li class="nav-item mb-2">
          <a class="nav-link" href="#"><i class="fas fa-file-invoice"></i> Orders</a>
        </li>
        <li class="nav-item mb-2">
          <a class="nav-link" href="#"><i class="fas fa-cog"></i> Settings</a>
        </li>
        <li class="nav-item mt-4">
          <a class="nav-link text-danger" href="{{ route("logout") }}"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </li>
      </ul>
    </nav>

    <!-- Main Content -->
    <main class="col-md-10 ms-sm-auto px-md-4 content">
    {{-- <h2>Welcome, Admin{{ $userid = auth()->id(); }}</h2> --}}
    {{-- {{ $userid }} --}}
      <p>This is your dashboard. You can manage users, products, and more here.</p>
      {{-- <a href="https://wa.me/923428890064?text=Hello%20OnicByte%2C%20I%20am%20interested%20in%20your%20services --}}
{{-- " target="_blank"> --}}
        {{-- Chat with us on WhatsApp || {{ auth()->user()->email }} --}}
        {{ auth()->user()->name }}
{{-- {{ Session::get('username') }} --}}
{{-- {{ Session::get('role') }}
{{  session::forget('username')}}
{{  session::forget('role')}} --}}
      {{-- </a> --}}
      <div class="row mt-4">
        <div class="col-md-4">
          <div class="card text-white bg-primary mb-3">
            <div class="card-body">
              @if(Session::get('role') =='admin')
              @if(Session::has('username'))
              {{  session::forget('username')}}
             <p> deleted</p>
              @else
                <p>No username found in session.</p>
              @endif


              <h5 class="card-title"><i class="fas fa-users"></i> Total user</h5>
              @else
              <h5 class="card-title"><i class="fas fa-users"></i>YOur  product</h5>
@endif
              <p class="card-text fs-4">120</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-white bg-success mb-3">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-box"></i> Products</h5>
              <p class="card-text fs-4">80</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-white bg-warning mb-3">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-shopping-cart"></i> Orders</h5>
              <p class="card-text fs-4">45</p>
            </div>
          </div>
        </div>
      </div>

    </main>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
