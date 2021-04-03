<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Covid 19 In Indonesian</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-4">
      <div class="container">
        <a class="navbar-brand" href="#">Covid-19</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>        
      </div>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-2 fixed-bottom">
      <div class="container justify-content-center">
        <div class="row">
          <div class="col text-light">Copyright IndraMahesa</div>
        </div>
      </div>
    </nav>

    <div class="container my-5">
      <h1 class="mb-5">Data Kasus Covid 19 Di Indonesia</h1>
      <div class="jumbotron">
        <div class="row w-100 justify-content-center">
          <div class="col-md-3">
              <div class="card border-info mx-sm-1 p-3">
                  <div class="card border-info shadow text-info p-1 my-card" ><span class="fa fa-car" aria-hidden="true"></span></div>
                  <div class="text-info text-center mt-3"><h4>Positif</h4></div>
                  <div class="text-info text-center mt-2"><h1>{{ $total_positif }}</h1></div>
              </div>
          </div>
          <div class="col-md-3">
              <div class="card border-success mx-sm-1 p-3">
                  <div class="card border-success shadow text-success p-1 my-card"><span class="fa fa-eye" aria-hidden="true"></span></div>
                  <div class="text-success text-center mt-3"><h4>Sembuh</h4></div>
                  <div class="text-success text-center mt-2"><h1>{{ $total_sembuh }}</h1></div>
              </div>
          </div>
          <div class="col-md-3">
              <div class="card border-danger mx-sm-1 p-3">
                  <div class="card border-danger shadow text-danger p-1 my-card" ><span class="fa fa-heart" aria-hidden="true"></span></div>
                  <div class="text-danger text-center mt-3"><h4>Meninggal</h4></div>
                  <div class="text-danger text-center mt-2"><h1>{{ $total_meninggal }}</h1></div>
              </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="chart mt-3">
        {{ $chart->container() }}
      </div>
    </div>

    <div style="margin-bottom: 20rem;"></div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    {{ $chart->script() }}
  </body>
</html>