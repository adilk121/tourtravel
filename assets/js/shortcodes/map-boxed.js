(function ($) {
  'use strict';

  $(document).ready(function () {
      
    var lat = $('#tsp_map').data('lat');
    var lng = $('#tsp_map').data('lng');
    var center = {lat: lat, lng: lng};

    var map = $('#tsp_map').gmap3({
      center: center,
      zoom: 13,
      scrollwheel: false,
      mapTypeId : google.maps.MapTypeId.ROADMAP
    });

    var overlay = map.overlay({
      position: center,
      content: '<div class="tsp-marker"><i class="fa fa-circle-o"></i></div>',
      x: -7
    });
  });
})(jQuery);