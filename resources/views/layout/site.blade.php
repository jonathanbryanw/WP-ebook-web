<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid p-4 bg-info text-black">
        <div class="row text-end">
            <div class="col">
                <p class="fs-1 fw-bold text-center">Amazing E-Book</p>
                <a class="btn btn-warning" role="button" href="/logout">Log Out</a>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-warning">
    <ul class="nav justify-content-center fw-bold">
    <li class="nav-item">
    <a class="nav-link fs-5" style="color:black" href="{{ url('/home') }}">Home</a>
    </li>
    <li class="nav-item">
    <a class="nav-link fs-5" style="color:black" href="{{ url('/contact') }}">Cart</a>
    </li>
    <li class="nav-item">
    <a class="nav-link fs-5" style="color:black" href="{{ url('/contact') }}">Profile</a>
    </li>
    </ul>
    </div>
    <div class="container mt-5">
    <div class="row ms-5">
    @yield('content')
    </div>
    </div>
    <div class="container-fluid p-1 mt-5 bg-info text-black text-center">
    <small>&copy Amazing E-Book {{ date("Y") }}</small>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
