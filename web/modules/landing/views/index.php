<section class="py-3 ">
    <div class="container">
        <?php if (isset($_GET['user'])) : ?>

            <div class="row">
                <div class="col-md">
                    <p class="fs-1  border-bottom border-success-subtle  ">
                        Recommendations
                    </p>
                </div>
            </div>

            <div class="row my-3">
                <div class="col-md ">
                    <p class="fs-5 lead border-bottom border-success-subtle fw-medium">Articles </p>

                    <ul class="list-unstyled d-flex flex-column gap-2">
                        <li>
                            <a class="text-decoration-none text-success fs-6" href="<?= BASE_URL ?>/article">The Future of Sustainable Energy: Innovations Driving a Green Revolution</a>
                            <small class="fst-italic d-block ">Science and Technology</small>
                        </li>
                        <li>
                            <a class="text-decoration-none text-success fs-6" href="#">Exploring the Mysteries of Deep Space: Unraveling the Wonders of the Universe</a>
                            <small class="fst-italic d-block">Science and Technology</small>
                        </li>
                        <li>
                            <a class="text-decoration-none text-success fs-6" href="#">Mindful Living in the Digital Age: Strategies for a Balanced and Healthy Lifestyle</a>
                            <small class="fst-italic d-block">Health</small>
                        </li>
                        <li>
                            <a class="text-decoration-none text-success fs-6" href="#">Revolutionizing Healthcare: Breakthroughs in Medical Technology and Research</a>
                            <small class="fst-italic d-block">Health</small>
                        </li>
                        <li>
                            <a class="text-decoration-none text-success fs-6" href="#">
                                Artificial Intelligence and Ethics: Navigating the Moral Landscape of AI
                            </a>
                            <small class="fst-italic d-block">Computing </small>
                        </li>
                        <li>
                            <a class="text-decoration-none text-success fs-6" href="#">
                                Culinary Adventures: Rediscovering Traditional Flavors in Modern Cuisine
                            </a>
                            <small class="fst-italic d-block">Cooking </small>
                        </li>
                    </ul>

                </div>
                <div class="col-md ">
                    <p class="fs-5 lead border-bottom border-success-subtle fw-semibold  ">Journals </p>

                    <ul class="list-unstyled d-flex flex-column gap-2">
                        <li>
                            <a class="text-decoration-none text-success fs-6" href="#">The Future of Sustainable Energy: Innovations Driving a Green Revolution</a>
                            <small class="fst-italic d-block ">Science and Technology</small>
                        </li>
                        <li>
                            <a class="text-decoration-none text-success fs-6" href="#">Exploring the Mysteries of Deep Space: Unraveling the Wonders of the Universe</a>
                            <small class="fst-italic d-block">Science and Technology</small>
                        </li>
                        <li>
                            <a class="text-decoration-none text-success fs-6" href="#">Mindful Living in the Digital Age: Strategies for a Balanced and Healthy Lifestyle</a>
                            <small class="fst-italic d-block">Health</small>
                        </li>
                        <li>
                            <a class="text-decoration-none text-success fs-6" href="#">
                                Preserving Biodiversity: Conservation Efforts in the Face of Climate Change
                            </a>
                            <small class="fst-italic d-block">Environment</small>
                        </li>
                        <li>
                            <a class="text-decoration-none text-success fs-6" href="#">
                                The Intersection of Technology and Education: Transforming Learning for the 21st Century
                            </a>
                            <small class="fst-italic d-block">Technology</small>
                        </li>

                        <li>
                            <a class="text-decoration-none text-success fs-6" href="#">
                                Beyond the Screen: The Rise of Virtual Reality and Its Impact on Entertainment
                            </a>
                            <small class="fst-italic d-block">Technology</small>
                        </li>

                    </ul>
                </div>
            </div>


        <?php endif; ?>


        <div class="row my-3 ">
            <div class="col-md d-flex justify-content-between">
                <p class="fs-5 fw-medium lead m-0">New Books</p>

                <a href="<?= BASE_URL ?>/book/all" class="text-decoration-none text-success">
                    View All
                </a>
            </div>
        </div>

        <div class="row my-3 bg-body-tertiary p-2">
            <div class="col-md-2 d-flex flex-column gap-2">
                <img height="" src="<?= BASE_URL ?>/uploads/books/1.jpg" class="img-fluid img-thumbnail h-100" alt="">
                <a class="btn btn-sm btn-outline-success  d-block" href="<?= BASE_URL ?>/book">Read</a>
            </div>
            <div class="col-md-2 d-flex flex-column gap-2">
                <img height="" src="<?= BASE_URL ?>/uploads/books/2.jpg" class="img-fluid img-thumbnail h-100" alt="">
                <a class="btn btn-sm btn-outline-success  d-block" href="#">Read</a>
            </div>
            <div class="col-md-2 d-flex flex-column gap-2">
                <img height="" src="<?= BASE_URL ?>/uploads/books/3.jpg" class="img-fluid img-thumbnail h-100" alt="">
                <a class="btn btn-sm btn-outline-success  d-block" href="#">Read</a>
            </div>
            <div class="col-md-2 d-flex flex-column gap-2">
                <img height="" src="<?= BASE_URL ?>/uploads/books/4.jpg" class="img-fluid img-thumbnail h-100" alt="">
                <a class="btn btn-sm btn-outline-success  d-block" href="#">Read</a>
            </div>
            <div class="col-md-2 d-flex flex-column gap-2">
                <img height="" src="<?= BASE_URL ?>/uploads/books/5.jpg" class="img-fluid img-thumbnail h-100" alt="">
                <a class="btn btn-sm btn-outline-success  d-block" href="#">Read</a>
            </div>
            <div class="col-md-2 d-flex flex-column gap-2">
                <img height="" src="<?= BASE_URL ?>/uploads/books/6.jpg" class="img-fluid img-thumbnail h-100" alt="">
                <a class="btn btn-sm btn-outline-success  d-block" href="#">Read</a>
            </div>

        </div>


        <div class="row my-3">
            <div class="col-md ">
                <p class="fs-5 lead border-bottom border-success-subtle fw-medium">Articles </p>

                <ul class="list-unstyled d-flex flex-column gap-2">
                    <li>
                        <a class="text-decoration-none text-success fs-6" href="<?= BASE_URL ?>/article">The Future of Sustainable Energy: Innovations Driving a Green Revolution</a>
                        <small class="fst-italic d-block ">Science and Technology</small>
                    </li>
                    <li>
                        <a class="text-decoration-none text-success fs-6" href="#">Exploring the Mysteries of Deep Space: Unraveling the Wonders of the Universe</a>
                        <small class="fst-italic d-block">Science and Technology</small>
                    </li>
                    <li>
                        <a class="text-decoration-none text-success fs-6" href="#">Mindful Living in the Digital Age: Strategies for a Balanced and Healthy Lifestyle</a>
                        <small class="fst-italic d-block">Health</small>
                    </li>
                    <li>
                        <a class="text-decoration-none text-success fs-6" href="#">Revolutionizing Healthcare: Breakthroughs in Medical Technology and Research</a>
                        <small class="fst-italic d-block">Health</small>
                    </li>
                    <li>
                        <a class="text-decoration-none text-success fs-6" href="#">
                            Artificial Intelligence and Ethics: Navigating the Moral Landscape of AI
                        </a>
                        <small class="fst-italic d-block">Computing </small>
                    </li>
                    <li>
                        <a class="text-decoration-none text-success fs-6" href="#">
                            Culinary Adventures: Rediscovering Traditional Flavors in Modern Cuisine
                        </a>
                        <small class="fst-italic d-block">Cooking </small>
                    </li>
                    <li>
                        <a class="text-decoration-none text-success fs-6" href="#">
                            The Power of Mindfulness: Harnessing Mental Wellness for a Fulfilling Life
                        </a>
                        <small class="fst-italic d-block">Mental Wellness </small>
                    </li>
                    <li>
                        <a class="text-decoration-none text-success fs-6" href="#">
                            Preserving Biodiversity: Conservation Efforts in the Face of Climate Change
                        </a>
                        <small class="fst-italic d-block">Environment</small>
                    </li>
                    <li>
                        <a class="text-decoration-none text-success fs-6" href="#">
                            The Intersection of Technology and Education: Transforming Learning for the 21st Century
                        </a>
                        <small class="fst-italic d-block">Technology</small>
                    </li>

                    <li>
                        <a class="text-decoration-none text-success fs-6" href="#">
                            Beyond the Screen: The Rise of Virtual Reality and Its Impact on Entertainment
                        </a>
                        <small class="fst-italic d-block">Technology</small>
                    </li>

                </ul>
            </div>

            <div class="col-md ">
                <p class="fs-5 lead border-bottom border-success-subtle fw-semibold  ">Journals </p>

                <ul class="list-unstyled d-flex flex-column gap-2">
                    <li>
                        <a class="text-decoration-none text-success fs-6" href="#">The Future of Sustainable Energy: Innovations Driving a Green Revolution</a>
                        <small class="fst-italic d-block ">Science and Technology</small>
                    </li>
                    <li>
                        <a class="text-decoration-none text-success fs-6" href="#">Exploring the Mysteries of Deep Space: Unraveling the Wonders of the Universe</a>
                        <small class="fst-italic d-block">Science and Technology</small>
                    </li>
                    <li>
                        <a class="text-decoration-none text-success fs-6" href="#">Mindful Living in the Digital Age: Strategies for a Balanced and Healthy Lifestyle</a>
                        <small class="fst-italic d-block">Health</small>
                    </li>
                    <li>
                        <a class="text-decoration-none text-success fs-6" href="#">Revolutionizing Healthcare: Breakthroughs in Medical Technology and Research</a>
                        <small class="fst-italic d-block">Health</small>
                    </li>
                    <li>
                        <a class="text-decoration-none text-success fs-6" href="#">
                            Artificial Intelligence and Ethics: Navigating the Moral Landscape of AI
                        </a>
                        <small class="fst-italic d-block">Computing </small>
                    </li>
                    <li>
                        <a class="text-decoration-none text-success fs-6" href="#">
                            Culinary Adventures: Rediscovering Traditional Flavors in Modern Cuisine
                        </a>
                        <small class="fst-italic d-block">Cooking </small>
                    </li>
                    <li>
                        <a class="text-decoration-none text-success fs-6" href="#">
                            The Power of Mindfulness: Harnessing Mental Wellness for a Fulfilling Life
                        </a>
                        <small class="fst-italic d-block">Mental Wellness </small>
                    </li>
                    <li>
                        <a class="text-decoration-none text-success fs-6" href="#">
                            Preserving Biodiversity: Conservation Efforts in the Face of Climate Change
                        </a>
                        <small class="fst-italic d-block">Environment</small>
                    </li>
                    <li>
                        <a class="text-decoration-none text-success fs-6" href="#">
                            The Intersection of Technology and Education: Transforming Learning for the 21st Century
                        </a>
                        <small class="fst-italic d-block">Technology</small>
                    </li>

                    <li>
                        <a class="text-decoration-none text-success fs-6" href="#">
                            Beyond the Screen: The Rise of Virtual Reality and Its Impact on Entertainment
                        </a>
                        <small class="fst-italic d-block">Technology</small>
                    </li>

                </ul>
            </div>
        </div>




    </div>
</section>