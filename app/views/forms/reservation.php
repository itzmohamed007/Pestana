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
        <!-- bruh -->
        <section class="page-section-contact">
            <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 col-xl-6 text-center">
                <h2 class="mt-0">Reservation:</h2>
                <hr class="divider"/>
            </div>
            </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        <form action="rooms" method="post">
                            <!-- Chambre  type input-->
                            <div class="form-floating mb-3" >
                                <select class="choix-chambre pt-4 form-select form-control" id="choix-chambre" name="room_type" aria-label="Default select" required>
                                    <option value="single">lit single</option>
                                    <option value="double">lit double</option>
                                    <option value="suite">suite</option>
                                </select>
                                <label for="room_type">type de chambre</label>
                            </div>
                            <!-- Suite type input-->
                            <div class="form-floating mb-3" id="choix-suite"></div>
                            <!-- From date-->
                            <div class="form-floating mb-3">
                                <input class="form-control" type="date" name="date_de" required/>
                                <label for="date">la date de debut</label>
                            </div>

                            <!-- To date-->
                            <div class="form-floating mb-3">
                                <input class="form-control" type="date" name="date_a" required/>
                                <label for="date">la date de fin</label>
                            </div>
                            <!-- Submit Button-->
                            <div class="d-grid">
                                <button class="btn btn-primary rounded-5 btn-xl" type="submit" name="search">Chercher</button>
                            </div>
                    </form>
                    <div>
                        <!-- Return Button-->
                        <div class="d-grid pt-3">
                            <button class="btn return rounded-5 btn-xl" type="submit"><a href="../">Revenir</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="../js/main.js"></script>    
</body>
</html>