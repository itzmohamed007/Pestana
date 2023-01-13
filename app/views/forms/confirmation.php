<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <title>Confirmation</title>
</head>
<body>
    <!-- authentification -->
    <section class="page-section-confirmation">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h2 class="mt-0">Confirmation de mis à jour de reservation: </h2>
                    <hr class="divider"/>
                </div>
            </div>
            <div class="form-wrapper row gx-4 gx-lg-5 justify-content-center mb-5">
                <div class="col-lg-6">
                    <!-- choice 2 Button-->
                    <div class="d-grid pt-3">
                        <button class="btn return rounded-5 btn-xl mb-3" type="submit" name="modificationDate"><a href="../modificationDate">modification des dates</a></button>
                    </div>
                    <!-- choice 1 Button-->
                    <div class="d-grid">
                        <button class="btn confirm rounded-5 btn-xl" type="submit" name="modificationTotal"><a href='../modificationTotal'>modification totale</a></button>
                    </div>
                </div>
            </div>
        </div>
    </section> 
</body>
</html>