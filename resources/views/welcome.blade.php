<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pertemuan 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

      <div id="carouselExample" class="carousel slide" >
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="data:image/jpeg;base64,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" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://images.tokopedia.net/img/cache/700/hDjmkQ/2022/7/22/2ba7dae0-c791-4ac5-b112-fa4933c784c9.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://target.scene7.com/is/image/Target/GUEST_ad6e0d76-c9ab-4648-97aa-5011952b2e55?wid=488&hei=488&fmt=pjpeg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>