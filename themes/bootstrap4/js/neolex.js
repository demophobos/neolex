(function($) {
    Drupal.behaviors.neolex = {
        attach: function(context, settings) {
            $(".glossaryaz > a").each(function(index) {
                var item = this;
                if (/[a-zA-Z]/.test(item.innerText)) {
                    $(item).addClass('lat');
                } else if (/[0-9]/.test(item.innerText)) {
                    $(item).addClass('num');
                } else {
                    $(item).addClass('rus');
                }
            });

            let isMobile = window.matchMedia("only screen and (max-width: 760px)").matches;

            if (isMobile) {
                $("details").removeAttr("open");
            }
            $("[placeholder='- None -']").attr("placeholder", "- Вокабула -");
            $("#edit-name").attr("placeholder", "- Имя -");
            $("input[type=email]").attr("placeholder", "- Адрес электронной почты -");
        }
    };

})(jQuery);