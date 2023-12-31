<?php 
$current_page = ltrim($_SERVER['REQUEST_URI'], '/');
?>

<header class="text-center mt-2">
    <nav class="navbar navbar-light bg-light">
        <div class="nav">
            <div class="col-md-3 text-left">
                <div>
                    <a class="navbar-brand" href="index.php">
                        <img src="/images/Keli-logo.avif" width="200" height="70" class="d-inline-block align-top" alt="">
                    </a>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-end justify-content-center">
                <ul class="nav-list">
                    <li><b><a class="nav-links <?php echo $current_page === 'kneePain.php' ? 'active-tab' : '' ?>" href="kneePain.php">Knee pain</a></b></li>
                    <li><b><a class="nav-links <?php echo $current_page === 'treatment.php' ? 'active-tab' : '' ?>" href="treatment.php">Treatment Options</a></b></li>
                    <li><b><a class="nav-links <?php echo $current_page === 'recarta.php' ? 'active-tab' : '' ?>" href="recarta.php">About RECARTA</a></b></li>
                </ul>
            </div>
            <div class="col-md-3 d-flex align-items-center justify-content-end">
                <div class="dropdown">
                    <button class="btn btn-link dropdown-toggle" type="button" id="languageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="flag-img" src="<?php echo $img_src ?>" alt="current-flag">
                        <span class="caret"></span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="languageDropdown">
                        <a class="dropdown-item <?php echo $_SESSION['language'] == 'en' ? 'language' : '' ?>" href="#" data-lang="en">
                            <img class="flag-img" src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/4.1.5/flags/4x3/gb.svg" alt="en-flag"> <b>English (GB)</b>
                        </a>
                        <a class="dropdown-item <?php echo $_SESSION['language'] == 'lt' ? 'language' : '' ?>" href="#" data-lang="lt">
                            <img class="flag-img" src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/4.1.5/flags/4x3/lt.svg" alt="lt-flag"> <b>Lietuvių</b>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
