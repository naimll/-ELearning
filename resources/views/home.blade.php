<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <div class="nav">
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Course</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Event</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Profile</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

          </div>


        </div>
        <a class="btn btn-primary"  href="{{URL::route('log')}}"> Log In</a>
      </nav>
    </div>
    <nav class="navbar navbar-light bg-info ">
        <div class="container-fluid">
          <span class="navbar-brand mb-0 h1">Courses</span>
        </div>
      </nav>
    <div class="content container " style="margin-top:20px">
        <div class="row">
           @for ($i = 0; $i < count($con); $i++)
                <div class="col">
                <div class="card col" style="width: 18rem;">
                <img src="../resources/css/image/e-image.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{$con[$i][0]}}</h5>
                    <p class="card-text">{{$con[$i][1]}}</p>
                    <a href="#" class="btn btn-primary">Next</a>

                    </div>
                </div>
            </div>

           @endfor
        </div>
    </div>

    <div class="footer" style="margin-top: 70px">
        <footer class="bg-light text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
              © 2020 Copyright:
              <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
            </div>
            <!-- Copyright -->
          </footer>
    </div>
</body>
</html>
