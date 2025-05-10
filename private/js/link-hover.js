
//change icon colour on hover

$(document).ready(function () {
    $('.text-icon-button-box').hover(
        function () {
            const img = $(this).find('img');
            const originalSrc = img.attr('src');
            const redSrc = originalSrc.replace(/(\.\w+)$/, '_red$1'); // insert "_red" before the file extension
            img.attr('src', redSrc);

            const a = $(this).find('a');
            a.css('color', '#FE2A5D'); // change a link color to red
        },
        function () {
            const img = $(this).find('img');
            const redSrc = img.attr('src');
            const originalSrc = redSrc.replace('_red', ''); // remove "_red"
            img.attr('src', originalSrc);

            const a = $(this).find('a');
            a.css('color', '#14161C'); // change a link color back to black
        }
    );
});
