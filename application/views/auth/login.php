<div class="col-lg-6 mx-auto">
    <div class="container">
        <div class="logo text-center d-flex justify-content-center align-items-center mt-3 mb-4">
            <img src="<?= base_url('assets/images/logo.png'); ?>" alt="UniHealth Logo" class="logo">
            <h1 class="text-dark ml-3 unihealth-text">UniHealth</h1>
        </div>

        <!-- Jika pesan sukses-->
        <?php if ($this->session->flashdata('success')) : ?>
            <div class="alert alert-success" role="alert">
                <?= $this->session->flashdata('success'); ?>
            </div>
        <?php endif; ?>

        <!-- jika pesan gagal -->
        <?php if ($this->session->flashdata('failed')) : ?>
            <div class="alert alert-danger" role="alert">
                <?= $this->session->flashdata('failed'); ?>
            </div>
        <?php endif; ?>

        <?php if($this->session->userdata('user_username')) { ?>
            <div class="alert alert-danger" role="alert">
                <p class="text-center">You are logged in!</p>
            </div>
        <?php } else { ?>
            <div class="form mt-3">
                <form class="user py-3 px-5" method="post" action="<?= base_url('auth'); ?>">
                    <h1 class="text-dark text-center" style="font-family: 'Montserrat', sans-serif">LOGIN</h1>

                    <div class="form-group mt-4">
                        <label for="username">Username or email</label>
                        <input type="username" class="form-control" id="username" name="username"  placeholder="Enter your email or username here" style="opacity: 0.6" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password here" style="opacity: 0.6" autocomplete="off">
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-dark px-4 py-2 mt-3" style="font-size: 18px;">Login</button>
                    </div>

                    <p class="mt-3 text-center text-dark font-weight-bold">Don't have an account? <a href="<?= base_url('auth/register'); ?>" class="text-white">Sign up here</a> </p>
                </form>
            </div>
        <?php } ?>
    </div>
</div>