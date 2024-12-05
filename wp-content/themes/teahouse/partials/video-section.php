<div class="container-fluid video my-5">
    <div class="container">
        <div class="row g-0">
        
            <div class="col-lg-6 py-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="py-5">
                    <h1 class="display-6 mb-4">
                        <?php echo wp_kses_post(get_theme_mod('video_headline', 'Tea is a drink of <span class="text-white">health</span> and <span class="text-white">beauty</span>')); ?>
                    </h1>
                    <h5 class="fw-normal lh-base fst-italic text-white mb-5">
                        <?php echo esc_html(get_theme_mod('video_subheadline', 'Tea has been celebrated for centuries as a drink of health and beauty.')); ?>
                    </h5>
                    <div class="row g-4 mb-5">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3">
                                    <i class="fa fa-check"></i>
                                </div>
                                <span class="text-dark">Great Tea Assortment</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3">
                                    <i class="fa fa-check"></i>
                                </div>
                                <span class="text-dark">Spices & Additives</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3">
                                    <i class="fa fa-check"></i>
                                </div>
                                <span class="text-dark">Unique Accessories</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3">
                                    <i class="fa fa-check"></i>
                                </div>
                                <span class="text-dark">Good for Health & Beauty</span>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-light rounded-pill py-3 px-5" href="<?php echo esc_url(site_url('/menu')); ?>">Explore Our Tea Selection</a>
                </div>
            </div>
          
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="h-100 d-flex align-items-center justify-content-center" style="min-height: 300px;">
                    <?php 
                    $video_id = get_theme_mod('video_id', 'oqRUv07V6GI');
                    if ($video_id): ?>
                        <iframe width="560" height="315" 
                                src="https://www.youtube.com/embed/<?php echo esc_attr($video_id); ?>?rel=0" 
                                title="YouTube video player" 
                                frameborder="0" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                referrerpolicy="strict-origin-when-cross-origin" 
                                allowfullscreen>
                        </iframe>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

