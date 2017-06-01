/**
 * set sidebar by active and open for page
 * qc on 2016/01/14
 */
$
var Setsidebarfun = function() {

	// handle navigation bar by page action
	var pageaction = function() {
		var location = window.location.href.split('/');
		var len = location.length - 1;
		for (var i = len ; i >= 0 ; i --) {
	        var subSymbol = location[i];

	        var patt = new RegExp("^[Admin_]{1,6}[A-Za-z]+$");
	        if (subSymbol != "") {
	            var symbolArr = subSymbol.split("?");
	            var sy_len = symbolArr.length-1;
	            for (var j = sy_len ; j >= 0 ; j --) {
	                var symbol = symbolArr[j];
	                if (patt.test(symbol) && jQuery("." + symbol + ".page_name").length != 0) {
	                    jQuery("." + symbol).addClass("active");
						jQuery("." + symbol).parent().parent().addClass("active");
	                    // break;
	                };
	            };
	        };
	    };
	};

	return {
		init: function() {
			// handle sidebar active
			pageaction();
		}
	};
}();
