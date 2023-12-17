<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../style.css" rel="stylesheet" >
  </head>
  <body>
    <h1>Hello, world!</h1>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            
          <a class="navbar-brand" href="#"><img src="https://tokorenata.teknobiz.net/images/seafood.png" width="30" height="24"> Renata</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
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
            <form class="d-flex" role="search" action="../produk/cari.php" method="post"> 
              <input class="form-control me-2" type="search" name="textcari" placeholder="Search" aria-label="Search">
              <input type="submit" class="btn btn-outline-success" value="cari"></input >
            </form>
          </div>
        </div>
      </nav>
      <div class="container mt-5">
      <form action="../produk/simpan.php" method="post">
        <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">NAMA PRODUK</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control"  name="nama" value="">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">DESKRIPSI</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="deskripsi" id="inputPassword">
                    </div>
                  </div>               
                     <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">HARGA</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="harga" id="inputPassword">
                    </div>
                  </div>
                </div>
                <div class="mb-3 row text-right">
                    <div class="col-md-12">
                      <input type="submit"  value="SImpan">
                    </div>
                  </div>
                </div>
                

            </div>
        </form> 
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>