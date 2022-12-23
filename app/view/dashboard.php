<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/css/style.css">
    
    <title>Dashboard</title>
</head>
<body class="dashboard">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
          <a class="navbar-brand">DASHBOARD</a>
          <button
            class="navbar-toggler navbar-toggler-right"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
          <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="acceuil.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="acceuil.php/#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="acceuil.php/#services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="acceuil.php/#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <!-- Greeting section -->
    <section class="page-section-welcome">
        <div class="container px-4 px-lg-5">
          <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 col-md-10 text-center">
              <h2 class="text-center text-white">welcome mohamed</h2>
              <hr class="divider-light" />
            </div>
          </div>
        </div>
      </section>

      <!-- operating section -->
    <section class="page-section-operations">

      <!-- users section -->
      <div class="container mb-5">
        <div class="container-fluid bg-light rounded mb-3 px-1">
          <h3 class="text-center mb-3 p-2">Users:</h3>
        </div>
        <div class="container">
          <table class="table table-borderless table-responsive card-1 p-4 text-center">
            <thead>
              <tr class="border-bottom">
                <th>
                    <span class="ml-2">id</span>
                </th>
                <th>
                    <span class="ml-2">nom complet</span>
                </th>
                <th>
                    <span class="ml-2">email</span>
                </th>
                <th>
                    <span class="ml-2">password</span>
                </th>
                <th>
                    <span class="ml-4">telephone</span>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr class="border-bottom">
                <td>
                    <div class="p-2">
                        <span>1</span>
                    </div>
                </td>
                <td>
                    <div class="p-2">
                        <span class="d-block font-weight-bold">Jennifer john</span>
                        <!-- <small class="text-muted">Jasmine Owner Reality group</small> -->
                    </div>
                </td>
                <td>
                    <div class="p-2">
                        <span class="font-weight-bold">itzmohamed007@gmail.com</span>
                    </div>
                </td>
                <td>
                    <div class="p-2 d-flex flex-column">
                        <span>mohamed</span>
                    </div>
                </td>
                <td>
                    <div class="p-2">
                      <span class="font-weight-bold">0625265046</span>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- reservations section -->
      <div class="container  mb-5">
        <div class="container-fluid bg-light rounded mb-3 px-1">
          <h3 class="text-center mb-3 p-2">Reservations:</h3>
        </div>
        <div class="container">
          <table class="table table-borderless table-responsive card-1 p-4 text-center">
            <thead">
              <tr class="border-bottom">
                <th>
                    <span class="ml-2">Id</span>
                </th>
                <th>
                    <span class="ml-2">Id Client</span>
                </th>
                <th>
                    <span class="ml-2">Date de reservation</span>
                </th>
                <th>
                    <span class="ml-2">durée (jours)</span>
                </th>
                <th>
                    <span class="ml-4">numero de chambre</span>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr class="border-bottom">
                <td>
                    <div class="p-2">
                        <span>1</span>
                    </div>
                </td>
                <td>
                  <div class="p-2">
                      <span>1</span>
                  </div>
                </td>
                <td>
                    <div class="p-2">
                        <span">20/12/2022</span>
                    </div>
                </td>
                <td>
                    <div class="p-2">
                        <span>7</span>
                    </div>
                </td>
                <td>
                    <!-- <div class="p-2 icons">
                        <i class="fa fa-phone text-danger"></i>
                        <i class="fa fa-adjust text-danger"></i>
                        <i class="fa fa-share"></i>
                    </div> -->
                    <div class="p-2">
                      <span class="font-weight-bold">23</span>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- guests section -->
      <div class="container  mb-5">
        <div class="container-fluid bg-light rounded mb-3 px-1">
          <h3 class="text-center mb-3 p-2">Guests:</h3>
        </div>
        <div class="container text-center">
          <table class="table table-borderless table-responsive card-1 p-4 ">
            <thead>
              <tr class="border-bottom">
                <th>
                    <span class="ml-2">Id</span>
                </th>
                <th>
                    <span class="ml-2">Nom Complet</span>
                </th>
                <th>
                    <span class="ml-2">Date de naissance</span>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr class="border-bottom">
                <td>
                    <div>
                        <span>1</span>
                    </div>
                </td>
                <td>
                    <div class="d-block">
                        <div>
                            <span>omar bourra</span>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="p-2">
                        <span class="d-block font-weight-bold">20/12/1999</span>
                        <!-- <small class="text-muted">Jasmine Owner Reality group</small> -->
                    </div>
                </td>
                <!-- <td>
                    <div class="p-2 icons">
                        <i class="fa fa-phone text-danger"></i>
                        <i class="fa fa-adjust text-danger"></i>
                        <i class="fa fa-share"></i>
                    </div>
                </td> -->
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- chambres section -->
      <div class="container mb-5">
        <div class="container-fluid bg-light rounded mb-3 px-1">
          <h3 class="text-center mb-3 p-2">Chambres:</h3>
        </div>
        <div class="container">
          <table class="table table-borderless table-responsive card-1 p-4 text-center">
            <thead>
              <tr class="border-bottom">
                <th>
                    <span class="ml-2">id</span>
                </th>
                <th>
                    <span class="ml-2">type</span>
                </th>
                <th>
                    <span class="ml-2">nombre des personnes</span>
                </th>
                <th>
                    <span class="ml-2">numero</span>
                </th>
                <th>
                    <span class="ml-2">operations</span>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr class="border-bottom">
                <td>
                    <div class="p-2">
                        <span>1</span>
                    </div>
                </td>
                <td>
                    <div class="p-2">
                        <span class="d-block">double lit</span>  
                    </div>
                  </td>
                  <td>
                      <div class="p-2">
                          <span class="d-block">2</span>  
                      </div>
                  </td>
                <td>
                    <div class="p-2">
                        <span class="d-block">56</span>  
                    </div>
                </td>
                <td>
                    <div class="p-2 icons">
                      <i class="fa-light fa-eraser"></i>
                      <i class="fa-light fa-eraser"></i>
                      <i class="fa fa-share fa-2x"></i>
                    </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      
      <!-- Suits section -->
      <div class="container mb-5">
        <div class="container-fluid bg-light rounded mb-3 px-1">
          <h3 class="text-center mb-3 p-2">Suites:</h3>
        </div>
        <div class="container">
          <table class="table table-borderless table-responsive card-1 p-4 text-center">
            <thead>
              <tr class="border-bottom">
                <th>
                    <span class="ml-2">id</span>
                </th>
                <th>
                    <span class="ml-2">id client</span>
                </th>
                <th>
                    <span class="ml-2">type</span>
                </th>
                <th>
                    <span class="ml-2">operations</span>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr class="border-bottom">
                <td>
                    <div class="p-2">
                        <span>1</span>
                    </div>
                </td>
                <td>
                    <div class="p-2">
                        <span class="d-block">2</span>  
                    </div>
                </td>
                <td>
                    <div class="p-2">
                        <span class="d-block">double lit</span>  
                    </div>
                </td>
                <td>
                  <div class="p-2 icons">
                      <i class="fa-light fa-eraser"></i>
                      <i class="fa-light fa-eraser"></i>
                      <i class="fa fa-share fa-2x"></i>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
      




























      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>