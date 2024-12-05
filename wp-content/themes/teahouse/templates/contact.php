<?php
/**
 * Template Name: Contact Page
 */
get_header();
?>

<!-- Contact Content Start -->

<div class="container-xxl contact py-5">
    <div class="container">
        <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-medium fst-italic text-primary"><?php the_title(); ?></p>
            <h1 class="display-6">If You Have Any Query, Please Contact Us</h1>
        </div>
        <div class="row g-5 mb-5">
          
            <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.3s">
                <div class="btn-square mx-auto mb-3">
                    <i class="fa fa-envelope fa-2x text-white"></i>
                </div>
                <p class="mb-2"><?php echo do_shortcode('[contact_info type="email"]'); ?></p>
                
            </div>
      
            <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.4s">
                <div class="btn-square mx-auto mb-3">
                    <i class="fa fa-phone fa-2x text-white"></i>
                </div>
                <p class="mb-2"><?php echo do_shortcode('[contact_info type="phone"]'); ?></p>
                
            </div>
           
            <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.5s">
                <div class="btn-square mx-auto mb-3">
                    <i class="fa fa-map-marker-alt fa-2x text-white"></i>
                </div>
                <p class="mb-2"><?php echo do_shortcode('[contact_info type="address"]'); ?></p>
             
            </div>
        </div>
        <div class="row g-5">
          
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h3 class="mb-4">Need to get in touch? Send us a message!</h3>
                <?php
               
                echo do_shortcode('[contact-form-7 id="your-form-id" title="Contact form 1"]');
                ?>
            </div>
          
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <iframe class="w-100 rounded"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                        frameborder="0" style="height: 100%; min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Content End -->

<?php get_footer(); ?>
