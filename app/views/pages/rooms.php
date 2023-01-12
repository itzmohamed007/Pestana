<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/main.js"></script>
        <link rel="stylesheet" href="../css/style.css">
        <title>reservation</title>
    </head>
    <body>
    <!-- rooms section -->
    <section class="section-valid-rooms">
        <div class="container">
            <div class="d-flex flex-column align-items-center">
                <h1 class="mb-4">Nos chambres:</h1>
                <h5 class="fw-light">Choisissez la chambre qui vous plais selon votre gôuts!</h5>
                <hr class="divider-dark mb-4 rounded-5">
            </div>
            <div class="row">
                <?php
                    if($rooms == false){
                    echo $rooms;
                        echo '
                        <div class="col-lg-4 col-md-6 col-sm-12 pb-5">
                            <p>There are no rooms avaible a the moment</p>
                            <a href="acceuil"><button class="cancel btn text-white w-100 mt-3 rounded btn-xl" type="submit">cancel</button></a>
                        </div>
                        ';
                    } else {
                        foreach($rooms as $row){
                            echo '
                            <div class="col-lg-4 col-md-6 col-sm-12 pb-5">
                                <img class="rounded" src="../' . $row['image'] . '" alt="image d`une chambre du hotel Pestana" width="356px" height="250px">
                                <a href="guests/' . $row['id'] . '"><button class="book btn text-white w-100 mt-3 rounded btn-xl" type="submit">book</button></a>
                            </div>
                            ';  
                        } 
                    }
                ?>
            </div>
        </div>
    </section>
    <script src="../js/main.js"></script>    
</body>
</html>