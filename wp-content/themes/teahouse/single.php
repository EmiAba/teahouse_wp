<!-- Header Start -->
<?php get_header();?>


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-5">
                <?php if (has_post_thumbnail()) : ?>
                <div class="position-relative">
                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid bg-white rounded shadow-lg wow fadeIn" data-wow-delay="0.1s', 'title' => 'Tea Cup']);; ?>
                    <!-- <img class="img-fluid bg-white rounded shadow-lg wow fadeIn" data-wow-delay="0.1s" 
                         src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-1.jpg" alt="">  -->
                </div>
                <?php endif ?>
            </div>
            <div class="col-lg-7 wow fadeIn" data-wow-delay="0.5s">
                <p class="fs-2 fw-medium fst-italic text-primary"><?php echo get_the_title(); ?> /About us</p>
                <p class="mb-4"><?php echo get_the_content(); ?></p>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


                <?php //@TODO  koe she e portfolio snimki s tekst
                ?>
                <!-- Products Start -->
                <div class="container-fluid product py-5 my-5">
                    <div class="container py-5">
                        <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                            <p class="fs-5 fw-medium fst-italic text-primary">Our Products</p>
                            <h1 class="display-6">Tea has a complex positive effect on the body</h1>
                        </div>
                        <div class="owl-carousel product-carousel wow fadeInUp" data-wow-delay="0.5s">
                            <a href="" class="d-block product-item rounded">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/product-1.jpg" alt="">
                                <div class="bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4">
                                    <h4 class="text-primary">Green Tea</h4>
                                    <span class="text-body">Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum</span>
                                </div>
                            </a>
                            <a href="" class="d-block product-item rounded">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/product-2.jpg" alt="">
                                <div class="bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4">
                                    <h4 class="text-primary">Black Tea</h4>
                                    <span class="text-body">Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum</span>
                                </div>
                            </a>
                            <a href="" class="d-block product-item rounded">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/product-3.jpg" alt="">
                                <div class="bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4">
                                    <h4 class="text-primary">Spiced Tea</h4>
                                    <span class="text-body">Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum</span>
                                </div>
                            </a>
                            <a href="" class="d-block product-item rounded">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/product-4.jpg" alt="">
                                <div class="bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4">
                                    <h4 class="text-primary">Organic Tea</h4>
                                    <span class="text-body">Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Products End -->

              
                <!-- Articles Start -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/article.jpg" alt="">
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="section-title">
                        <p class="fs-5 fw-medium fst-italic text-primary">Featured Acticle</p>
                        <h1 class="display-6">The history of tea leaf in the world</h1>
                    </div>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <p class="mb-4">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna. Tempor erat elitr rebum at clita.</p>
                    <a href="" class="btn btn-primary rounded-pill py-3 px-5">Read More</a>
                </div>
            </div>
        </div>
    </div>
                <?php // echo display_latest_articles($number_of_posts=6); ?> 
                <!-- Articles End -->








                <!-- Footer Start -->
 
                <?php get_footer();?>