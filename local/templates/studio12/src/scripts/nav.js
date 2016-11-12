$('.nav-toggle').on('click', function() {
    var timer;
    $('body').toggleClass('sidebar-open');
    //timer = setInterval( function() {
    //    $(window).trigger('resize');
    //}, 1);
    //$('.sidebar').one('transitionend', function() {
    //    clearInterval(timer);
    //});
});