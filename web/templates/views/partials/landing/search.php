<div class="container-fluid">
    <div class="container">
        <form action="<?= BASE_URL ?>/search" method="get">

            <div class="row align-items-center ">

                <div class="col-sm-12 col-md-6 p-3">
                    <input value="<?= out($_GET['s'] ?? '') ?>" name="s" type="text" placeholder="Search for resources" class="form-control rounded-0 p-2">

                    <?php if (current_url() === BASE_URL . "/") : ?>
                        <p class="text-white">The LRRS is a repository for articles, journals, books and projects</p>
                    <?php endif; ?>
                </div>
            </div>
        </form>
    </div>

</div>