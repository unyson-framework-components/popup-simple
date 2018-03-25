;(function ($) {
    $(document).ready(function () {
        $('.popup-simple-btn').on('click', function (e) {
            let popup = $(this).next();
            let closeBtn = $(this).next().find('.close-btn');

            e.preventDefault();
            $(popup).fadeIn();

            $(closeBtn).on('click', function (e) {
                e.preventDefault();
                $(popup).fadeOut();
            })
        })
    });
})(jQuery);