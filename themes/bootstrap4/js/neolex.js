jQuery(document).ready(function($) {

    $(".views-summary > a").each(function(index) {
        var item = this;
        if (/[a-zA-Z]/.test(item.innerText)) {
            $(item).addClass('lat');
        } else if (/[0-9]/.test(item.innerText)) {
            $(item).addClass('num');
        } else {
            $(item).addClass('rus');
        }
    });

    var lats = $("a.lat").parent();

    var nums = $("a.num").parent();

    if (lats.length > 0) {

        var latMenu = "<div class='btn-group btn-lat-group'><button type='button' class='btn btn-secondary btn-sm text-light bg-primary dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>A-Z</button><div class='dropdown-menu dropdown-menu-center'>";

        $("a.lat").parent().remove();

        $(lats).each(function(index) {
            latMenu += "<a class='dropdown-item' href='/glossary/" + $.trim($(this).text()) + "'>" + $.trim($(this).text()) + "</a>";
        });

        latMenu += "</div></div>";

        $("div.view-content").first().append(latMenu);
    }

    if (nums.length > 0) {

        var numMenu = "<div class='btn-group btn-num-group'><button type='button' class='btn btn-secondary btn-sm text-light bg-primary dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>0-9</button><div class='dropdown-menu dropdown-menu-center'>";

        $("a.num").parent().remove();

        $(nums).each(function(index) {
            numMenu += "<a class='dropdown-item' href='/glossary/" + $.trim($(this).text()) + "'>" + $.trim($(this).text()) + "</a>";
        });

        numMenu += "</div></div>";

        $("div.view-content").first().append(numMenu);
    }


    //punct placing
    $(".field-flexions").each(function(index) {
        if ($(this).parent('.header-definition').length) {
            $(this).prepend('<span class="divider-comma">,&nbsp;</span>');
        }
    });


    //Contact form
    $("#edit-name").attr("placeholder", "- Имя -");
    $("input[type=email]").attr("placeholder", "- Адрес электронной почты -");

});