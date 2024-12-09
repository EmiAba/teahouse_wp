 jQuery(document).ready(function ($) {
    $('.like-button').on('click', function (e) {
        e.preventDefault();

        let product_id = jQuery(this).attr('data-id'); 
        let button = jQuery(this); 

        jQuery.ajax({
            type: 'post',
            dataType: 'json',
            url: my_ajax_object.ajax_url, 
            data: {
                action: 'teahouse_product_upvote', 
                product_id: product_id, 
            },
            success: function (response) {
                if (response.success) {
                   
                    button.find('.like-count').text(response.data.new_votes);
                } else {
                    console.error(response.data.message);
                }
            },
            error: function () {
                console.error('Something went wrong with the AJAX request.');
            },
        });
    });



});




