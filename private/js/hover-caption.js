//hide caption instrubction text on hover

$(document).ready(function () {
    $('.album-flipbook-container').on('mouseenter', function () {
        const $caption = $(this).find('.hover-caption');
        $caption.css('visibility', 'hidden');
    });

    $('.album-flipbook-container').on('mouseleave', function () {
        const $caption = $(this).find('.hover-caption');
        $caption.css('visibility', 'visible');
    });
});

$(document).ready(function () {
    $('.outer-flipbook-container').on('mouseenter', function () {
        const $caption = $(this).find('.hover-caption');
        $caption.css('visibility', 'hidden');
    });

    $('.outer-flipbook-container').on('mouseleave', function () {
        const $caption = $(this).find('.hover-caption');
        $caption.css('visibility', 'visible');
    });
});

