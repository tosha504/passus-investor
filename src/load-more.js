(function () {
  jQuery('#load-more').on('click', function (e) {
    e.preventDefault()
    var button = jQuery(this);
    var page = parseInt(button.data('page')) + 1;
    var max = parseInt(button.data('max'));

    jQuery.ajax({
      url: load_more_params.ajax_url,
      type: 'POST',
      data: {
        action: 'load_more_posts',
        query_vars: load_more_params.query_vars,
        page: page
      },
      beforeSend: function () {
        button.text('Loading...').addClass('disabled'); // Optional: Change button text during loading
      },
      success: function (response) {
        if (response) {
          jQuery('.partners-tnl__partners').append(response);
          button.data('page', page);
          button.text('Load More').removeClass('disabled');

          if (page >= max) {
            button.remove(); // Remove button if no more pages
          }
        } else {
          button.remove(); // Remove button if no response
        }
      },
      error: function () {
        button.text('Error'); // Optional: Handle errors
      }
    });
  });

})(jQuery);