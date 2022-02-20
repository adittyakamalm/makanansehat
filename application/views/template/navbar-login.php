    <nav class="navbar navbar-light navbar-expand-lg">
        <a class="navbar-brand mx-3" href="<?= base_url('home'); ?>">
            <img src="<?= base_url('assets/images/logo.png'); ?>" alt="UniHealth Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item text-dark">
                <li>
                    <a class="nav-link mx-2" href="<?= base_url('home'); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="<?= base_url('calculator'); ?>">Nutrition Calc</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="<?= base_url('foods'); ?>">Foods</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       
                        Hi, <?= $user['user_name']; ?>
                        <img class="img-profile rounded-circle user-image" src="<?= base_url('./upload/user/') . $user['user_photo']; ?>">
                    </a>
                    <div class="dropdown-menu dropdown-menu-center mr-5">
                        <a href="<?= base_url('profile'); ?>" class="dropdown-item">My Profile</a> 
                        <hr>
                        <a href="<?= base_url('auth/logout'); ?>" class="dropdown-item">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>