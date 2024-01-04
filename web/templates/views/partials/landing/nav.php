<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand fw-bolder fs-4" href="<?= BASE_URL; ?>">
            LRRS
            <small class="d-none d-md-inline-block fs-6 fw-lighter fst-italic  "><?= SITE_NAME; ?></small>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav me-1 mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= BASE_URL ?>/browse">Browse</a>
                </li>

                <?php if (!isset($_GET['user'])) : ?>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL ?>/register">Create Account</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL ?>/login">Sign In</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            User
                        </a>
                        <ul class="dropdown-menu col-5">
                            <li>
                                <a class="dropdown-item d-flex justify-content-between" href="#">
                                    Profile
                                    <i class="bi-person-circle"></i>
                                </a>
                            </li>
                            <li><a class="dropdown-item d-flex justify-content-between" href="#">Submissions <i class="bi-collection"></i></a></li>
                            <li><a class="dropdown-item d-flex justify-content-between" href="#">Password <i class="bi-lock"></i></a></li>
                            <li><a class="dropdown-item d-flex justify-content-between" href="#">Favourites <i class="bi-heart"></i></a></li>
                            <li>
                                <hr class="dropdown-divider bg-success">
                            </li>
                            <li><a class="dropdown-item d-flex justify-content-between" href="#"> Logout <i class="bi-power"></i></a> </li>
                        </ul>
                    </li>
                <?php endif; ?>

            </ul>
        </div>
    </div>
</nav>