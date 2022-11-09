<!DOCTYPE html>
<html lang="en">
    <head>
        @include('head')
    </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #B0C4DE;">
        <div class="container-fluid">
          <a class="navbar-brand" href="/webpage">BINUS Club</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/webpage">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/webpage/member">Members</a>
              </li>
            </ul>

          </div>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>