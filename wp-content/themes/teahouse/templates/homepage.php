<?php
/**
 *Template Name: Homepage 
 */
?>


<?php get_header(); ?>


<!-- About Start -->

<?php get_template_part( 'partials/about', 'section');  ?>



<!-- About End -->



<!-- Products Start -->
<?php get_template_part( 'partials/product', 'section');  ?>

<!-- Products End -->

<!-- Article Start -->
<?php get_template_part( 'partials/articles', 'section');  ?>

<!-- Article End -->
<!-- Video Start -->
<?php get_template_part( 'partials/video', 'section');  ?>
<!-- Video End -->


<!-- Testimonial Start -->
<?php get_template_part( 'partials/testimonial', 'section');  ?>
<!-- Testimonial End -->


<!-- Contact Start -->
<?php get_template_part( 'partials/contact', 'section');  ?>

<!-- Contact End -->




<!-- Footer Start -->
<?php get_footer(); ?>