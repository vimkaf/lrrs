<section class="py-3 ">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <p class="fs-1 lead border-bottom border-success-subtle  ">
                    Sign In
                </p>
            </div>
        </div>

        <form action="#">
            <div class="row my-3 ">
                <div class="col-md-7">
                    <div class="form-group mb-3">
                        <label for="#">Email</label>
                        <input type="email" name="email" class="form-control rounded-0 ">
                    </div>

                    <div class="form-group mb-1">
                        <label for="#">Password</label>
                        <input type="pasword" name="password" class="form-control rounded-0 ">
                    </div>

                    <div class="form-group mb-1 text-end">
                        <span class="text-end">
                            <a class="text-decoration-none text-success-emphasis" href="#">Forgot Passsword?</a>
                        </span>
                    </div>

                    <div class="form-group border-bottom border-success py-2">
                        <a class="btn btn-success shadow d-block rounded-0 p-2 " href="<?= BASE_URL ?>/landing?user=1">
                            <span class="fw-bold fs-5">Log in</span>
                        </a>
                    </div>

                </div>
            </div>

        </form>


    </div>
</section>