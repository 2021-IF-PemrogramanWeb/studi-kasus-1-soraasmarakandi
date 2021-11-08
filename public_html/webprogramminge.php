<?php
require 'Functions/LoginSession.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <title>Homepage</title>
        <?php require 'Page/Navbar.php'; ?>
    </head>
    <body>
        <h1 class="text-center">Welcome to Web Programming E!</h1>
        <div class="container mt-5">
            <div class="d-flex justify-content-between">
                <div>
                    <h2 class="text-center">Our teacher :</h2>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://kepegawaian.its.ac.id/images/kepegawaian/pegawai/198702132014041001.jpg" width="172" height="200" class="rounded-start" alt="Pak Ridho">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Ridho Rahman Hariadi S.Kom, M.Sc</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <h2 class="text-center">Assistant :</h2>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://yt3.ggpht.com/ytc/AKedOLSYKlhXYGyyyRIQcqjPkERuDKjFkngUpCCuCEv0Gw=s900-c-k-c0x00ffffff-no-rj" width="172" height="200" class="rounded-start" alt="Mas Wahed">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Abdur Rachman Wahed</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="text-center">Lovely Friends :</h2>
        </div>
    </body>
</html>