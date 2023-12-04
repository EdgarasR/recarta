<?php 
session_start();
require "translation/translation.php"; 
require "language_cfg.php" 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Red Hat Display" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="js/scripts.js" defer></script>
    <title><?php echo $texts[$_SESSION['language']]['title'] ?></title>
</head>

<body class="mx-auto">

    <?php require __DIR__ . "/../partials/header.php" ?>

    <main class="no-padding container-fluid">

        <section class="text-center full-width">
            <div class="image-container">
                <div class="dark-overlay d-flex justify-content-center">
                    <div class="m-2 image-text text-left">
                        <p class="h2 font-weight-bold">Knee Pain</p>
                        <p class="h4">Learn more about the cartilage damage</p>
                    </div>
                </div>
                <img class="cropped-2" src="images/knee-treatment.png" alt="knee">
            </div>
        </section>

        <section class="content-container mt-4">
            <div class="row">
                <div class="col-md-10">
                    <p class="h4">If you are experiencing <b>knee pain</b>, it is important to speak with your healthcare provider to determine the underlying cause></p>
                </div>
                <div class="col-md-2">
                    <a href="https://keli.eu/contact-us" class="custom-button">Contact Us</a>
                </div>
            </div>
            <svg height="5" width="100%" xmlns="http://www.w3.org/2000/svg">
                <rect width="100%" height="100%" style="fill:#67118d;" />
            </svg>
        </section>

        <section class="content-container">
            <div class="row mb-4">
                <div class="col-md-7">
                    <h2><b>What is the functioning mechanism of your knee?</b></h2>
                    <br>
                    <p class="h6">The knee joint is a complex hinge joint that connects the <b>thigh bone (femur) to the shin bone (tibia).</b> It also has a smaller bone on the outside called the fibula that helps with stability.</p>
                    <br>
                    <p class="h6">The knee also has two crescent-shaped pieces of cartilage called <b>menisci</b>, which act as shock absorbers and help distribute weight evenly across the joint.</p>
                    <br>
                    <p class="h6">In addition, the knee joint is held together by a series of <b>ligaments and muscles</b> that connect the bones and provide stability.</p>
                    <br>
                    <p class="h6">Finally, the joint is lined with <b>cartilage</b>, which cushions the bones and helps them move smoothly against each other.</p>
                    <br>
                    <p class="h6">If any of these structures in the knee joint are injured or damaged, this results in pain, swelling, and difficulty moving the joint.</p>
                    <br>
                    <p class="h3"><b>Preserving your cartilage is crucial to protect your knees</b></p>
                </div>
                <div class="col-md-5">
                    <img src="images/knee-pain-1.avif" alt="knee-pain-1" class="img-fluid float-right">
                </div>
            </div>
            <svg height="5" width="100%" xmlns="http://www.w3.org/2000/svg">
                <rect width="100%" height="100%" style="fill:#67118d;" />
            </svg>
        </section>

        <section class="content-container">
            <div class="row mb-4">
                <div class="col-md-5">
                    <img src="images/knee-pain-2.avif" alt="knee-pain-2" class="img-fluid float-right">
                </div>
                <span class="col-md-1"></span>
                <div class="col-md-6">
                    <h2><b>What happens when the cartilage is damaged?</b></h2>
                    <br>
                    <p class="h5">Cartilage is solid yet flexible enough to allow adults' bones to move against each other without injury for decades. But while protecting the bones, the cartilage can sustain damage. It can cause <b>pain, stiffness, swelling, locking, and difficulty moving the joint.</b></p>
                    <br>
                    <h2><b>Can it repair itself?</b></h2>
                    <br>
                    <p class="h5">When cartilage is injured, the defect in the articular cartilage <b>cannot repair</b> itself. Cartilage contains a dense tissue matrix with <b>very few cells, no blood vessels, or innervation. Some healing can happen</b> when the injury is large enough to expose the underlying bone and cause intraarticular bleeding. However, the <b>repair tissue is not durable</b>, pain recurs when the recovery is inadequate, and cartilage deteriorates even more. If the knee is left untreated, it might <b>progress to irreversible knee damage.</b></p>
                    <br>
                    <p class="h4"><b>It is essential to seek medical attention if you experience any symptoms of cartilage damage</b></p>
                </div>
            </div>
            <svg height="5" width="100%" xmlns="http://www.w3.org/2000/svg">
                <rect width="100%" height="100%" style="fill:#67118d;" />
            </svg>
        </section>

        <section class="content-container">
            <div class="row mb-4">
                <div class="col-md-7">
                    <h2><b>Treatment</b></h2>
                    <p class="h5">An orthopedic surgeon will develop an appropriate diagnostic and treatment plan. This will include physical assessment, X-rays, MRI, and subsequent physical therapy, medication, or in some cases, surgery. If the knee is left untreated, it might progress to irreversible knee damage</p>
                    <a href="treatment.php" class="signature-link">Learn more about treatment options</a>
                    <h3 class="mt-3"><b>In the meantime, you can take steps to alleviate your symptoms:</b></h2>
                    <br>
                    <ul>
                        <li class="mb-3"><p class="custom-h5">Rest your knee: take a few days off from intense activity</p></li>
                        <li class="mb-3"><p class="custom-h5">Ice it to curb pain and swelling: do it for 15 to 20 minutes every 3 to 4 hours, until the pain is gone</p></li>
                        <li class="mb-3"><p class="custom-h5">Compress your knee: use an elastic bandage, straps, or sleeves to wrap the joint</p></li>
                        <li class="mb-3"><p class="custom-h5">Elevate your knee with a pillow under your heel when you're sitting or lying down to cut down on swelling</p></li>
                        <li class="mb-3"><p class="custom-h5">Take nonsteroidal anti-inflammatory drugs. Follow the instructions on the label, unless your doctor says otherwise</p></li>
                        <li class="mb-3"><p class="custom-h5">Practice stretching and strengthening exercises if your doctor recommends them</p></li>
                    </ul>
                </div>
                <div class="col-md-5">
                    <img src="images/knee-pain-3.avif" alt="knee-pain-3" class="img-fluid float-right">
                </div>
            </div>
        </section>

    </main>

    <?php require __DIR__ . "/../partials/footer.php" ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>