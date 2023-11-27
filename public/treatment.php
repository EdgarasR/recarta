<?php require "translation/translation.php"; 
require "../language_cfg.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Red Hat Display" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <title><?php echo $texts[$language]['title'] ?></title>
</head>

<body class="mx-auto">

    <?php require __DIR__ . "/../partials/header.php" ?>

    <main class="no-padding container-fluid">

        <section class="text-center full-width">
            <div class="image-container">
                <div class="dark-overlay d-flex justify-content-center">
                    <div class="m-2 image-text text-left">
                        <p class="h2 font-weight-bold">Treatment Options</p>
                        <p class="h4">If cartilage is left untreated, it might progress to irreversible damage</p>
                    </div>
                </div>
                <img class="cropped-2" src="images/knee-treatment.png" alt="knee">
            </div>
        </section>

        <section class="content-container mt-4">
            <div class="row">
                <div class="col-md-12">
                    <p class="h2"><b>Surgical techniques at the disposal of your doctor for cartilage treatment</b></p>
                </div>
            </div>
            <svg height="5" width="100%" xmlns="http://www.w3.org/2000/svg">
                <rect width="100%" height="100%" style="fill:#67118d;" />
            </svg>
        </section>

        <section class="content-container">
            <div class="row mb-4">
                <div class="col-md-8">
                    <p class="h4"><b>Autologous cell-scaffold based articular cartilage regenerative technology RECARTA</b></p>
                    <br>
                    <p class="h5"><b>RECARTA</b> technology, consisting of autologous  chondrocytes combined with a biological scaffold. Culture-expanded cells are seeded on a scaffold and  a medicinal product is formed.</p>
                    <br>
                    <p class="h5"><b>RECARTA</b> is placed in the knee defect area where the pathological cartilage was removed. The resultant tissue shares properties with hyaline cartilage -  the durable tissue found in healthy articular cartilage.</p>
                    <br>
                    <p class="h5">This treatment has been shown to provide long-term cartilage regeneration, long-lasting pain relief and improve knee function.</p>
                    <br><br>
                    <button type="button" class="custom-button">Learn More</button>
                </div>
                <div class="col-md-4">
                    <img src="images/treatment-1.avif" alt="treatment-1" class="img-fluid float-right">
                </div>
            </div>
            <svg height="5" width="100%" xmlns="http://www.w3.org/2000/svg">
                <rect width="100%" height="100%" style="fill:#67118d;" />
            </svg>
        </section>

        <section class="content-container">
            <div class="row mb-2 justify-content-between">
                <div class="col-md-7">
                    <br>
                    <p class="h4"><b>Microfracture (bone marrow stimulation)</b></p>
                    <br>
                    <p class="h5">The microfracture procedure involves the creation of small holes in the bone to cause bleeding, which in turn stimulates the growth of new cartilage cells.</p>
                    <br>
                    <p class="h4"><b>Microfracture with membranes</b></p>
                    <br>
                    <p class="h5">The microfracture and membrane combination approach, a matrix-assisted technique used to treat grade III or IV cartilage lesions, has been  studied and is recommended for small knee chondral and osteochondral defects based on recent meta-analyses.</p>
                </div>
                <div class="col-md-4">
                    <br>
                    <p class="h4"><b>Limitations</b></p>
                    <ul>
                        <li class="mb-3"><p class="h5">The formation of fibrocartilage lacking the tensile strength of native hyaline cartilage</p></li>
                        <li class="mb-3"><p class="h5">Substantial injury to the subchondral bone causing edema and cyst formation</p></li>
                        <li class="mb-3"><p class="h5">Intralesional osteophytes in the repair cartilage area</p></li>
                        <li class="mb-3"><p class="h5">Reduced patient-reported outcomes after two years</p></li>
                    </ul>
                </div>
            </div>
            <svg height="5" width="100%" xmlns="http://www.w3.org/2000/svg">
                <rect width="100%" height="100%" style="fill:#67118d;" />
            </svg>
        </section>

    </main>

    <?php require __DIR__ . "/../partials/footer.php" ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>