jQuery(document).ready(function ($) {
    $(".field-flexions").each(function(index) {
      if ($(this).parent('.header-definition').length) {
         $(this).prepend('<span class="divider-comma">,&nbsp;</span>');
      }
    });
});;
