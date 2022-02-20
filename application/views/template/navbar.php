    <nav class="navbar navbar-light navbar-expand-lg">
        <a class="navbar-brand mx-3" href="<?= base_url('home'); ?>">
            <img src="<?= base_url('assets/images/logo.png'); ?>" alt="UniHealth Logo" class="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link mx-2" href="<?= base_url('home'); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="<?= base_url('calculator'); ?>">Nutrition Calc</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  mx-2" href="<?= base_url('foods'); ?>">Foods</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="<?= base_url('auth'); ?>">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-links btn btn-dark px-3 mx-2" href="<?= base_url('auth/register'); ?>">Sign Up</a>
                </li>
            </ul>
        </div>
    </nav>