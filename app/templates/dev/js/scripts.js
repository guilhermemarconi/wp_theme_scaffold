(function() {
  var method;
  var noop = function() {};
  var methods = [
    'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
    'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
    'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
    'timeStamp', 'trace', 'warn'
  ];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    if (!console[method]) {
      console[method] = noop;
    }
  }
}());

(function($) {
  var $window = $(window),
    $document = $(document),
    _winWidth = $window.width();

	$(function() {});

  $window.load(function() {});

  $window.resize(function() {
    _winWidth = $window.width();
  });
})(jQuery);
