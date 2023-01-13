<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Pestana CR7</title>
</head>
<body class="dashboard">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
          <?php
            if(empty($_SESSION['client'])){
              echo '<a class="navbar-brand" href="../frontOffice/authentification">Sign Up</a>';
            } else {
              echo '<a class="navbar-brand text-dark" href="../frontOffice/logout">Log Out</a>';
            }
          ?>
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
            <a class="navbar-brand" href="../">Revenir</a>
            </li>
        </ul>
        </div>
        </div>
    </nav>
    <hr class="divider">
    <!-- Espace Client -->
    <section class="page-section-operations pt-5">
        <!-- chambres section -->
        <div class="container mb-5">
            <div class="container-fluid rounded mb-3 px-1">
                <h3 class="text-center mb-3 mt-5 text-white mb-5">Vos reservations:</h3>
                <div class="container">
                    <table class="table table-borderless table-responsive card-1 p-4 text-center">
                        <thead>
                            <tr class="border-bottom">
                                <th>
                                    <span class="ml-2">N°:</span>
                                </th>
                                <th>
                                    <span class="ml-2">room type</span>
                                </th>
                                <th>
                                    <span class="ml-2">suite type</span>
                                </th>
                                <th>
                                    <span class="ml-2">date debut</span>
                                </th>
                                <th>
                                    <span class="ml-2">date fin</span>
                                </th>
                                <th>
                                    <span class="ml-2">operations</span>
                                </th>
                            </tr>
                        </thead>
                        <?php
                            $number = 1;
                            foreach($rooms as $rows){
                                if(empty($rows['suite_type'])){
                                    $rows['suite_type'] = "null";
                                }
                                echo '
                                    <tbody>
                                        <tr class="border-bottom">
                                            <td>
                                                <div class="p-2">
                                                    <span>' . $rows['id'] . '</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="p-2">
                                                    <span>' . $rows['type'] . '</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="p-2">
                                                    <span class="d-block">' . $rows['suite_type'] . '</span>  
                                                </div>
                                            </td>
                                            <td>
                                                <div class="p-2">
                                                    <span class="d-block">' . $rows['date_debut'] . '</span>  
                                                </div>
                                            </td>
                                            <td>
                                                <div class="p-2">
                                                    <span class="d-block">' . $rows['date_fin'] . '</span>  
                                                </div>
                                            </td>
                                            <td>
                                                <div class="p-2 icons d-flex justify-content-center gap-5">
                                                    <a href="confirmation/' . $rows['id'] . '"><i class="fa fa-pen-to-square fa-2x"></i></a>
                                                    <a href="deleteReservation/' . $rows['id'] . '"><i class="fa fa-trash fa-2x"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    ';
                                    $number++;
                                }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>