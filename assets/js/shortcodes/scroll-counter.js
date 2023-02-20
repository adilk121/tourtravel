(function($, window){
    var $window = $(window);
    var $countupSection = $('#tsp_served');
    var countupTop = $countupSection.offset().top;
  
    var debounce = function(func, wait, immediate) {
        var timeout;
        return function() {
            var context = this, args = arguments;
            var later = function() {
                timeout = null;
                if (!immediate) func.apply(context, args);
            };
            var callNow = immediate && !timeout;
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
            if (callNow) func.apply(context, args);
        };
    };

    var checkPosition = function(){
        var scrollTop     = $window.scrollTop();
        if(scrollTop - countupTop < 20){
            $window.off('scroll', counterScroll);
            $('.tsp-number').each(function () {
                $(this).prop('Counter',0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 8000,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });
        }
    };
    var counterScroll = debounce(checkPosition, 50);
    $window.on('scroll', counterScroll);
})(jQuery, window);