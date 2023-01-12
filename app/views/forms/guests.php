<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="../../css/style.css">
        <title>guests</title>
    </head>
    <body>
        <!-- guests info section -->
        <section>
        <div class="container px-4 px-lg-5 mt-5 mb-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <form action="" method="post">
                    <div class="col-lg-8 col-xl-6 text-center w-100">
                        <h4 class="py-4">Entrer les données de vos amis:</h4>
                        <!-- Person's count input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" type="number" id="nombre" name="count" min="0" max="6" required/>
                            <label for="number">nombre des accompagnements</label>
                        </div>
                        <div class="container bg-danger rounded mt-5 pb-3 mb-3">
                            <p class="text-white text-center pt-3">Donnée de vos amis: </p>
                            <div id="donnee-amis"></div>
                        </div>
                        <!-- Submit Button-->
                        <div class="d-grid">
                            <button class="btn py-3 btn-danger rounded-5 btn-xl" type="submit" name="reserve">Reserver</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="../../js/guests.js"></script>    
</body>
</html>