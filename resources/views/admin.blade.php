<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proffesor Panel</title>
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
                    <a class="nav-link disable" href="#">Event</a>
                  </li>
                  <li class="nav-item disable">
                    <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Profile</a>
                  </li>
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

              </div>


            </div>
            <a class="btn btn-primary"  href="{{URL::route('logout')}}"> Log Out</a>
            <span class="badge bg-success">Welcome  {{Session::get('name')}}</span>
          </nav>
        </div>
        @if (Session::has('success'))
        <div class="alert alert-info">
            {{Session::get('success')}}
        </div>
        @endif

        <div class="container my-4">
          <form action="{{route('uploadFile')}}" class="form-control" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="form-group mb-2">
              <label for="file">File: </label>
              <input type="file" name="file"  class="form-control">
            </div>
            <button type="submit" class="btn btn-sm btn-primary">Upload</button>
          </form>
        </div>
</body>
</html>
