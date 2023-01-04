<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Connection</title>
</head>
<body>
    <!-- authentification -->
    <section class="page-section-contact">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 col-xl-6 text-center">
                <h2 class="mt-0">Connection:</h2>
                <hr class="divider"/>
            </div>
        </div>
            <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                <div class="col-lg-6">
                    <form action="#" method="post">
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" type="email" name="email" placeholder="name@example.com"/>
                            <label for="email">adresse email</label>
                        </div>
                        <!-- Password input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" type="password" name="password" placeholder="mot de pass"/>
                            <label for="phone">mot de pass</label>
                        </div>
                        <!-- Submit Button-->
                        <div class="d-grid">
                            <button class="btn btn-primary rounded-5 btn-xl"  name="submit" type="submit">Envoyer</button>
                        </div>
                        <!-- Return Button-->
                        <div class="d-grid pt-3">
                            <button class="btn return rounded-5 btn-xl" type="submit"><a href="../">Revenir</a></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>