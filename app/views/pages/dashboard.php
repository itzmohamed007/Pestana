<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    
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
              <h1 class="text-center text-white">welcome MOHAMED</h1>
              <hr class="divider-light"/>
            </div>
          </div>
        </div>
    </section>
      <!-- operating section -->
    <section class="page-section-operations">
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
                    <span class="ml-2">suite type</span>
                </th>
                <th>
                    <span class="ml-2">numero</span>
                </th>
                <th>
                    <span class="ml-2">image</span>
                </th>
                <th>
                    <span class="ml-2">operations</span>
                </th>
              </tr>
            </thead>
            <?php
              foreach($rooms as $row){
                
                if(empty($row['suite_type'])){
                  $row['suite_type'] = "null";
                }

                echo '
                <tbody>
                  <tr class="border-bottom">
                    <td>
                        <div class="p-2">
                            <span>' . $row['id'] . '</span>
                        </div>
                    </td>
                    <td>
                        <div class="p-2">
                            <span class="d-block">' . $row['type'] . '</span>  
                        </div>
                    </td>
                    <td>
                        <div class="p-2">
                            <span class="d-block">' . $row['suite_type'] . '</span>  
                        </div>
                    </td>
                    <td>
                        <div class="p-2">
                            <span class="d-block">' . $row['numero'] . '</span>  
                        </div>
                    </td>
                    <td>
                        <div class="p-2">
                            <img class="rounded-5 p-0" src="../' . $row['image'] . '" alt="image d`une chambre" width="50px" height="50px">
                        </div>
                    </td>
                    <td>
                      <div class="p-2 icons d-flex justify-content-center gap-5">
                        <a href="update/' . $row['id'] . '"><i class="fa fa-pen-to-square fa-2x"></i></a>
                        <a href="delete/' . $row['id'] . '"><i class="fa fa-trash fa-2x"></i></a>
                      </div>
                    </td>
                  </tr>
                </tbody>
                ';
              }
            ?>
          </table>
        </div>
      </div>
      
      
      <!-- adding tour -->
      <div class="container d-grid add-tour">
          <button class="btn btn-primary rounded-5 btn-xl mb-5 py-3" type="submit"><a href="create">Add tour</a></button>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>