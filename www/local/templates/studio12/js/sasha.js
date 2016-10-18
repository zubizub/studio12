        var wh = window.outerHeight,
                ww = window.innerWidth,
                wIh = window.innerHeight / 4,
                wIh1 = window.innerHeight,
                bw = $('.box').width() / 2,
                sectionHeight = $('.section--slogan .box').height(),
                shStart = 1500,
                shIntro = 1500,
                sh = 1500,
                speed = 1,
                $start = $("#start"),
                $intro = $("#intro"),
                $head = $("#head"),
                $tagline = $("#tagline");
                $tagline2 = $("#tagline2");
                $tagline3 = $("#tagline3");
                $tagline4 = $("#tagline4");
                $tagline5 = $("#tagline5");
                $tagline6 = $("#tagline6");
        $start.attr({ 'd': 'M0,16 H582.5 V5000' });
        $intro.attr({ 'd': 'M582.5,0 582.5,80 742.5,250 742.5,290 387.5,290 387.5,370 582.5,560 582.5,5000' });
        $head.attr({ 'd': 'M582.5,0 V5000' });
        $tagline.attr({ 'd': 'M742.5,0 742.5,' + wIh + ' 419.5,500 419.5,' + (wIh + 500 + 145) });
        $tagline2.attr({ 'd': 'M242.5,-50 380.5,67 380.5,200 310.5,260 310.5,380 -1500.5,2000' });
        $tagline3.attr({ 'd': 'M2042.5,1200 1130.5,70 950.5,250 950.5,400 5019.5,5000' });
        $tagline4.attr({ 'd': 'M742.5,0 742.5,' + wIh + ' 419.5,500 419.5,' + (wIh + 500 + 145) });
        $tagline5.attr({ 'd': 'M242.5,-50 380.5,67 380.5,200 310.5,260 310.5,380 -1500.5,2000' });
        $tagline6.attr({ 'd': 'M2042.5,1200 1130.5,70 950.5,250 950.5,400 5019.5,5000' });
        function pathPrepare($el) {
            var lineLength = $el[0].getTotalLength();
            $el.css("stroke-dasharray", lineLength);
            $el.css("stroke-dashoffset", lineLength);
            $(window).on('resize', function () {
                var lineLength = $el[0].getTotalLength();
                $el.css("stroke-dasharray", lineLength);
                $el.css("stroke-dashoffset", lineLength);
            });
        }
        pathPrepare($start);
        pathPrepare($intro);
        pathPrepare($head);
        pathPrepare($tagline);
        pathPrepare($tagline2);
        pathPrepare($tagline3);
                pathPrepare($tagline4);
        pathPrepare($tagline5);
        pathPrepare($tagline6);
        $('.fullpage').fullpage({
            autoplay: false,
            navigation: true,
            lockAnchors: true,
            sectionSelector: '.section',
            scrollingSpeed: 700,
            verticalCentered: false,
            responsiveWidth: 1001,
            slidesNavigation: false,
            //responsiveHeight: 720,
            afterRender: function () {
            setInterval(function () {
                $.fn.fullpage.moveSlideRight();
            }, 1000);
            },
            anchors: ['s-start', 's-intro', 's-main', 's-about', 's-slogan', 's-lofts', 's-slogan2'],
            scrollOverflow: true,
            scrollOverflowOptions: [
                {
                    click: false
                }
            ]
            ,
            onLeave: function (index, nextIndex, direction) {
                var leavingSection = $(this);
                //after leaving section 2
                if (index == 2 && direction == 'down') {
                    TweenLite.to($head, 1, { strokeDashoffset: 0, ease: Linear.easeNone });
                }
                else if (index == 4 && direction == 'down') {
                    TweenLite.to($tagline, 5, { strokeDashoffset: 0, ease: Linear.easeNone });
                    TweenLite.to($tagline2, 10, { strokeDashoffset: 0, ease: Linear.easeNone });
                    TweenLite.to($tagline3, 5, { strokeDashoffset: 0, ease: Linear.easeNone });
                }
                else if (index == 6 && direction == 'down') {
                    TweenLite.to($tagline4, 5, { strokeDashoffset: 0, ease: Linear.easeNone });
                    TweenLite.to($tagline5, 10, { strokeDashoffset: 0, ease: Linear.easeNone });
                    TweenLite.to($tagline6, 5, { strokeDashoffset: 0, ease: Linear.easeNone });
                }
                else if (nextIndex == 2 && direction == 'up') {
                    return false;
                }
            },

            afterLoad: function (anchorLink, index) {
                var loadedSection = $(this);

                //using index
                if (index == 4) {
                    $('.number72').animateNumber({ number: 72 });
                    $('.number142').animateNumber({ number: 142 });
                    $('.number40').animateNumber({ number: 40 });
                    $('.number300').animateNumber({ number: 300 });
                    $('.number6').animateNumber({ number: 6 });
                }
                else {
                    $('.number').animateNumber({ number: 0 });
                }
                var height = $('body').innerHeight();
                var width = $('body').innerWidth();
                if (index == 6) {
                    $('.header_fixed').css('display', 'none');
                }
                else if (index != 6 && height < 750) {
                    $('.header_fixed').css('display', 'none');
                }

                else if (index != 6 && height > 750 && width > 1000) {
                    $('.header_fixed').css('display', '');
                }
                else if (index == 3) {
                }
                
            }
        });
        $(window).resize(function () {
            var height = $('body').innerHeight();
            var width = $('body').innerWidth();

            if (height < 750) {
                $('.header_fixed').css('display', 'none');
                $('.header_stable').css('display', 'none');
                $('.footer_fixed').css('display', 'none');
                $('.mouse').css('display', 'none');
                $('.controls').css('display', 'inline-block');
            }
            else if (width < 1000) {
                $('.header_fixed').css('display', 'none');
                $('.header_stable').css('display', 'none');
                $('.footer_fixed').css('display', 'none');
                $('.mouse').css('display', 'none');
                $('.controls').css('display', 'inline-block');
            }
            else {
                $('.header_fixed').css('display', '');
                $('.header_stable').css('display', '');
                $('.footer_fixed').css('display', '');
                $('.mouse').css('display', '');
                $('.controls').css('display', '');
            }
        });
        $(document).ready(function () {
            var height = $('body').innerHeight();
            var width = $('body').innerWidth();
            if (height < 750) {
                $('.header_fixed').css('display', 'none');
                $('.header_stable').css('display', 'none');
                $('.footer_fixed').css('display', 'none');
                $('.mouse').css('display', 'none');
                $('.controls').css('display', 'inline-block');
            }
            else if (width < 1000) {
                $('.header_fixed').css('display', 'none');
                $('.header_stable').css('display', 'none');
                $('.footer_fixed').css('display', 'none');
                $('.mouse').css('display', 'none');
                $('.controls').css('display', 'inline-block');
            }
            else {
                $('.header_fixed').css('display', '');
                $('.header_stable').css('display', '');
                $('.footer_fixed').css('display', '');
                $('.mouse').css('display', '');
                $('.controls').css('display', '');
            }
        });
/*      var supportsInlineSvg = (function() {
  var div = document.createElement('div');
  div.innerHTML = '<svg/>';
  return (div.firstChild && div.firstChild.namespaceURI) == 'http://www.w3.org/2000/svg';
}());
var supportsInputRange = (function() {
  var input = document.createElement('input');
  input.setAttribute('type', 'range');
  return input.type != 'text';
}());
document.documentElement.className += (supportsInlineSvg ? ' inline-svg' : '') + (supportsInputRange ? ' input-range' : '');


(function() {
  if (!supportsInlineSvg) return;

  function toArray(arr) {
    return Array.prototype.slice.call(arr);
  }

  var svg = document.querySelector('.logo-container svg');
  svg.parentNode.style.display = 'block';
  svg.style.visibility = 'hidden';

  function draw() {
    svg.style.visibility = '';
    var paths = toArray(svg.querySelectorAll('path:not(.final)'));
    paths.push(svg.querySelector('.final'));
    var begin = 1.5;
    
    var durations = paths.map(function(path) {
      var length = path.getTotalLength();
      var className = path.getAttribute('class') || '';

      path.style.strokeDasharray = length + ' ' + length;
      path.style.strokeDashoffset = length;

      if (className.indexOf('final') != -1) {
        return 1;
      }
      else if (className.indexOf('animation') != -1) {
        return Math.pow(length, 0.6) * 0.02;
      }
      else {
        return Math.pow(length, 0.5) * 0.03;
      }
    });

    paths[0].getBoundingClientRect();

    paths.forEach(function(path, i) {
      path.style.transition = path.style.WebkitTransition = 'all ' + durations[i] + 's ' + begin + 's ease-in-out';
      path.style.strokeDashoffset = '0';
      begin += durations[i] + 0.1;
    });
  }

  window.addEventListener('load', draw);
}());

    $(".animation")
        .velocity({ 
    fill: "#000"
}, {
    duration: 1,
    delay: 1
});
*/
$('.more-items').click(function(){

    setTimeout(function(){$.fn.fullpage.reBuild()},200);
});

setTimeout(function(){$('.webo4ka').fadeIn(1000)},2400); //10000 = 10 секунд 
