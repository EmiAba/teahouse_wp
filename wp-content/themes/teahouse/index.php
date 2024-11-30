<?php get_header(); ?>


<!-- About Start -->

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-end">
                        <img class="img-fluid bg-white w-100 mb-3 wow fadeIn" data-wow-delay="0.1s" src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-1.jpg" alt="">
                        <img class="img-fluid bg-white w-50 wow fadeIn" data-wow-delay="0.2s" src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-3.jpg" alt="">
                    </div>
                    <div class="col-6">
                        <img class="img-fluid bg-white w-50 mb-3 wow fadeIn" data-wow-delay="0.3s" src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-4.jpg" alt="">
                        <img class="img-fluid bg-white w-100 wow fadeIn" data-wow-delay="0.4s" src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-2.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="section-title">
                    <p class="fs-5 fw-medium fst-italic text-primary">About Us</p>
                    <h1 class="display-6">The success history of TEA House in 25 years</h1>
                </div>
                <div class="row g-3 mb-4">
                    <div class="col-sm-4">
                        <img class="img-fluid bg-white w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-5.jpg" alt="">
                    </div>
                    <div class="col-sm-8">
                        <h5>Our tea is one of the most popular drinks in the world</h5>
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit</p>
                    </div>
                   
                </div>
                <div class="border-top mb-4"></div>
                <div class="row g-3">
                    <div class="col-sm-8">
                        <h5>Daily use of a cup of tea is good for your health</h5>
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit</p>
                    </div>
                    <div class="col-sm-4">
                        <img class="img-fluid bg-white w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-6.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- About End -->



<!-- Products Start -->

<div class="container-fluid product py-5 my-5 products-background" style="background: url('http://localhost/softuni/wp-content/uploads/2024/11/product-bg.png') no-repeat center center; background-size: cover;">
    <div class="container py-5">
        <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-medium fst-italic text-primary">Our Products</p>
            <h1 class="display-6">Tea has a complex positive effect on the body</h1>
        </div>
        <div class="owl-carousel product-carousel wow fadeInUp" data-wow-delay="0.5s">
            <?php
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => -1, // Adjust the number of products displayed
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();

                    // Get the product description
                    $description = get_the_excerpt() ?: 'No description available'; // Fallback for empty excerpt
            ?>
                    <a href="<?php the_permalink(); ?>" class="d-block product-item rounded">
                        <div class="product-background" style="height: 300px; border-radius: 8px;">
                            <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>" alt="<?php the_title(); ?>" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                        </div>
                        <div class="bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4">
                            <h4 class="text-primary"><?php the_title(); ?></h4>
                            <p class="text-body"><?php echo esc_html($description); ?></p>
                        </div>
                    </a>
            <?php endwhile;
                wp_reset_postdata();
            endif; ?>
        </div>
    </div>
</div>



<!-- Products End -->


<!-- Article Start -->
<?php include 'latest-articles.php'; ?>


<!-- Article End -->
<!-- Video Start -->
<div class="container-fluid video my-5">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-6 py-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="py-5">
                    <h1 class="display-6 mb-4">Tea is a drink of <span class="text-white">health</span> and <span class="text-white">beauty</span></h1>
                    <h5 class="fw-normal lh-base fst-italic text-white mb-5">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit</h5>
                    <div class="row g-4 mb-5">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3">
                                    <i class="fa fa-check"></i>
                                </div>
                                <span class="text-dark">Great tea assortment</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3">
                                    <i class="fa fa-check"></i>
                                </div>
                                <span class="text-dark">Spices & additives</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3">
                                    <i class="fa fa-check"></i>
                                </div>
                                <span class="text-dark">Unique accessories</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3">
                                    <i class="fa fa-check"></i>
                                </div>
                                <span class="text-dark">Good for health & beauty</span>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-light rounded-pill py-3 px-5" href="">Explore More</a>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="h-100 d-flex align-items-center justify-content-center" style="min-height: 300px;">
                    <button type="button" class="btn-play" data-bs-toggle="modal"
                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video End -->


<!-- Video Modal Start -->
<div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                        allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Modal End -->


<!-- Store Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-medium fst-italic text-primary">Online Store</p>
            <h1 class="display-6">Want to stay healthy? Choose tea taste</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="store-item position-relative text-center">
                    <img class="img-fluid" src="img/store-product-1.jpg" alt="">
                    <div class="p-4">
                        <div class="text-center mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                        </div>
                        <h4 class="mb-3">Nature close tea</h4>
                        <p>Aliqu diam amet diam et eos. Clita erat ipsum lorem erat ipsum lorem sit sed</p>
                        <h4 class="text-primary">$19.00</h4>
                    </div>
                    <div class="store-overlay">
                        <a href="" class="btn btn-primary rounded-pill py-2 px-4 m-2">More Detail <i class="fa fa-arrow-right ms-2"></i></a>
                        <a href="" class="btn btn-dark rounded-pill py-2 px-4 m-2">Add to Cart <i class="fa fa-cart-plus ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="store-item position-relative text-center">
                    <img class="img-fluid" src="img/store-product-2.jpg" alt="">
                    <div class="p-4">
                        <div class="text-center mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                        </div>
                        <h4 class="mb-3">Green tea tulsi</h4>
                        <p>Aliqu diam amet diam et eos. Clita erat ipsum lorem erat ipsum lorem sit sed</p>
                        <h4 class="text-primary">$19.00</h4>
                    </div>
                    <div class="store-overlay">
                        <a href="" class="btn btn-primary rounded-pill py-2 px-4 m-2">More Detail <i class="fa fa-arrow-right ms-2"></i></a>
                        <a href="" class="btn btn-dark rounded-pill py-2 px-4 m-2">Add to Cart <i class="fa fa-cart-plus ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="store-item position-relative text-center">
                    <img class="img-fluid" src="img/store-product-3.jpg" alt="">
                    <div class="p-4">
                        <div class="text-center mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                        </div>
                        <h4 class="mb-3">Instant tea premix</h4>
                        <p>Aliqu diam amet diam et eos. Clita erat ipsum lorem erat ipsum lorem sit sed</p>
                        <h4 class="text-primary">$19.00</h4>
                    </div>
                    <div class="store-overlay">
                        <a href="" class="btn btn-primary rounded-pill py-2 px-4 m-2">More Detail <i class="fa fa-arrow-right ms-2"></i></a>
                        <a href="" class="btn btn-dark rounded-pill py-2 px-4 m-2">Add to Cart <i class="fa fa-cart-plus ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                <a href="" class="btn btn-primary rounded-pill py-3 px-5">View More Products</a>
            </div>
        </div>
    </div>
</div>
<!-- Store End -->


<!-- Testimonial Start -->
<div class="container-fluid testimonial py-5 my-5">
    <div class="container py-5">
        <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-medium fst-italic text-white">Testimonial</p>
            <h1 class="display-6">What our clients say about our tea</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.5s">
            <?php
          
            $testimonial_args = array(
                'post_type' => 'testimonial',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'DESC',
            );
            $testimonial_query = new WP_Query($testimonial_args);

            if ($testimonial_query->have_posts()) :
                while ($testimonial_query->have_posts()) : $testimonial_query->the_post();
                  
                    $profession = get_post_meta(get_the_ID(), 'client_profession', true);
            ?>
                    <div class="testimonial-item p-4 p-lg-5">
                       
                        <p class="mb-4"><?php the_content(); ?></p>
                        <div class="d-flex align-items-center justify-content-center">
                          
                            <?php if (has_post_thumbnail()) : ?>
                                <img class="img-fluid flex-shrink-0" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>" alt="<?php the_title(); ?>" style="border-radius: 50%; width: 70px; height: 70px; object-fit: cover;">
                            <?php else : ?>
                                <img class="img-fluid flex-shrink-0" src="<?php echo get_stylesheet_directory_uri(); ?>/img/default-avatar.png" alt="Default Avatar" style="border-radius: 50%; width: 70px; height: 70px; object-fit: cover;">
                            <?php endif; ?>
                     
                            <div class="text-start ms-3">
                                <h5><?php the_title(); ?></h5>
                                <span class="text-primary"><?php echo esc_html($profession); ?></span>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No testimonials available.</p>';
            endif;
            ?>
        </div>
    </div>
</div>

<!-- Testimonial End -->


<!-- Contact Start -->
<div class="container-xxl contact py-5">
    <div class="container">
        <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-medium fst-italic text-primary">Contact Us</p>
            <h1 class="display-6">Contact us right now</h1>
        </div>
        <div class="row justify-content-center wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-8">
                <p class="text-center mb-5">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                <div class="row g-5">
                    <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.3s">
                        <div class="btn-square mx-auto mb-3">
                            <i class="fa fa-envelope fa-2x text-white"></i>
                        </div>
                        <p class="mb-2">info@example.com</p>
                        <p class="mb-0">support@example.com</p>
                    </div>
                    <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="btn-square mx-auto mb-3">
                            <i class="fa fa-phone fa-2x text-white"></i>
                        </div>
                        <p class="mb-2">+012 345 67890</p>
                        <p class="mb-0">+012 345 67890</p>
                    </div>
                    <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.5s">
                        <div class="btn-square mx-auto mb-3">
                            <i class="fa fa-map-marker-alt fa-2x text-white"></i>
                        </div>
                        <p class="mb-2">123 Street</p>
                        <p class="mb-0">New York, USA</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Start -->




<!-- Footer Start -->
<?php get_footer(); ?>