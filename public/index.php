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
                        <p class="h2 font-weight-bold"><?php echo $texts[$language]['main_title_1'] ?></p>
                        <p class="h4"><?php echo $texts[$language]['main_title_2'] ?></p>
                    </div>
                </div>
                <img class="cropped" src="images/Recarta-running-man.avif" alt="running-man">
            </div>
        </section>

        <section class="content-container mt-4">
            <div class="row">
                <div class="col-md-12">
                    <p class="h4"><?php echo $texts[$language]['section_2_title'] ?></p>
                </div>
            </div>
            <svg height="5" width="100%" xmlns="http://www.w3.org/2000/svg">
                <rect width="100%" height="100%" style="fill:#67118d;" />
            </svg>
        </section>

        <section class="content-container">
            <div class="row">
                <div class="col-md-8">
                    <p class="h2"><?php echo $texts[$language]['section_3_header'] ?></p>
                    <br>
                    <p class="h5"><?php echo $texts[$language]['section_3_p_1'] ?></p>
                    <br>
                    <p class="h5"><?php echo $texts[$language]['section_3_p_2'] ?></p>
                    <br>
                    <p class="h5"><?php echo $texts[$language]['section_3_p_3'] ?></p>
                </div>
                <div class="col-md-4">
                    <img src="images/Section1.avif" alt="section-1" class="img-fluid float-right">
                </div>
            </div>
        </section>

        <section class="content-container">
            <div class="row">
                <div class="col-md-12">
                    <br>
                    <h2><?php echo $texts[$language]['section_4_title'] ?></h2>
                    <br>
                    <p class="h5"><?php echo $texts[$language]['section_4_header'] ?></p>
                    <svg height="5" width="100%" xmlns="http://www.w3.org/2000/svg">
                        <rect width="100%" height="100%" style="fill:#67118d;" />
                    </svg>
                </div>
            </div>
        </section>

        <section class="content-container">
            <div class="row flex-column-reverse flex-sm-row">
                <div class="col-md-5 col-sm-6">
                    <img src="images/Section2.avif" alt="section-2" class="img-fluid float-left">
                </div>
                <div class="col-md-7 col-sm-6">
                    <h4><?php echo $texts[$language]['section_5_header_1'] ?></h4>
                    <br>
                    <h4><?php echo $texts[$language]['section_5_header_2'] ?></h4>
                    <br>
                    <p class="h5"><?php echo $texts[$language]['section_5_p_1'] ?></p>
                    <br>
                    <p class="h5"><?php echo $texts[$language]['section_5_p_2'] ?></p>
                </div>
            </div>
            <br>
            <svg height="5" width="100%" xmlns="http://www.w3.org/2000/svg">
                <rect width="100%" height="100%" style="fill:#67118d;" />
            </svg>
        </section>

        <section class="content-container">
            <div class="row">
                <div class="col-md-7 col-sm-6">
                    <h4><?php echo $texts[$language]['section_6_header_1'] ?></h4>
                    <br>
                    <h4><?php echo $texts[$language]['section_6_header_2'] ?></h4>
                    <br>
                    <p><?php echo $texts[$language]['section_6_p_1'] ?></p>
                    <br>
                    <p class="h5"><?php echo $texts[$language]['section_6_p_2'] ?></p>
                    <br>
                    <p class="h5"><?php echo $texts[$language]['section_6_p_3'] ?></p>
                </div>
                <div class="col-md-5 col-sm-6">
                    <img src="images/Section3.avif" alt="section-3" class="img-fluid float-right">
                </div>
            </div>
            <br>
            <svg height="5" width="100%" xmlns="http://www.w3.org/2000/svg">
                <rect width="100%" height="100%" style="fill:#67118d;" />
            </svg>
        </section>

        <section class="content-container">
            <div class="row flex-column-reverse flex-sm-row">
                <div class="col-md-5 col-sm-6">
                    <img src="images/Section4.avif" alt="section-4" class="img-fluid float-left">
                </div>
                <div class="col-md-7 col-sm-6">
                    <h4><?php echo $texts[$language]['section_7_header_1'] ?></h4>
                    <br>
                    <h4><?php echo $texts[$language]['section_7_header_2'] ?></h4>
                    <br>
                    <p class="h5"><?php echo $texts[$language]['section_7_p_1'] ?></p>
                    <br>
                    <p class="h5"><?php echo $texts[$language]['section_7_p_2'] ?></p>
                </div>
            </div>
            <br>
            <svg height="5" width="100%" xmlns="http://www.w3.org/2000/svg">
                <rect width="100%" height="100%" style="fill:#67118d;" />
            </svg>
        </section>

        <section class="content-container">
            <div class="row">
                <div class="col-md-7 col-sm-6">
                    <h4><?php echo $texts[$language]['section_8_header_1'] ?></h4>
                    <br>
                    <h4><?php echo $texts[$language]['section_8_header_2'] ?></h4>
                    <br>
                    <p class="h5"><?php echo $texts[$language]['section_8_p_1'] ?></p>
                    <br>
                    <p class="h5"><?php echo $texts[$language]['section_8_p_2'] ?></p>
                    <br>
                </div>
                <div class="col-md-5 col-sm-6">
                    <img src="images/Section5.avif" alt="section-5" class="img-fluid float-right">
                </div>
            </div>
        </section>

    </main>

    <?php require __DIR__ . "/../partials/footer.php" ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>