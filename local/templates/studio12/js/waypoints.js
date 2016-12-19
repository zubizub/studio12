$(function () {
    (function () {
        $('[class*=anim--js-]').each(function() {
            var self = this;
            $(this).waypoint(function(direction) {
                $(this).addClass('anim--run');
                setTimeout(function () {
                    $('.anim-dom', self).addClass('anim-dom--run');
                }, 500);
            }.bind(this), {
                offset: '100%'
            });
        });
        $('.count-section').each(function() {
            var self = this;
            $(this).waypoint(function(direction) {
                $('.count-anim', self).each(function () {
                    var dataAnim = $(this).attr('data-number');
                    $(this).prop('Counter', 0).animate({
                        Counter: dataAnim
                    }, {
                        duration: 2000,
                        easing: 'swing',
                        step: function (now) {
                            $(this).text(Math.ceil(now));
                        }
                    });
                });
            }.bind(this), {
                offset: '100%'
            });
        });
    }());
});