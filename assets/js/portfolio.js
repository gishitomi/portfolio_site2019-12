$(function() {
    $('.img-mouseover').each(function() {
        var src_off = $(this).find('img').attr('src');
        var src_on = src_off.replace('_off', '_on');
        $('<img />').attr('src', src_on);
        $(this).hover(function() {
            $(this).find('img').attr('src', src_on);
        }, function() {
            $(this).find('img').attr('src', src_off);
        });
    });
});