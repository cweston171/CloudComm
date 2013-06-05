// ajax config overrides
$.ajaxSetup({
	cache: false
});

// device & client ability detection
// detect isMobile()
var deviceIphone = "iphone";
var deviceIpod = "ipod";
var deviceIpad = "ipad";
var deviceAndroid = "android";
var deviceS60 = "series60";
var deviceSymbian = "symbian";
var engineWebKit = "webkit";
var deviceWinMob = "windows ce";
var deviceBB = "blackberry";
var devicePalm = "palm";

var uagent = navigator.userAgent.toLowerCase();

var isMobile = function () {
    if ((uagent.search(deviceAndroid) > -1) || (uagent.search(deviceBB) > -1) || (uagent.search(deviceIpad) > -1) || (uagent.search(deviceIphone) > -1)
        || (uagent.search(deviceIpod) > -1) || (uagent.search(devicePalm) > -1) || (uagent.search(deviceS60) > -1) || (uagent.search(deviceSymbian) > -1)
        || (uagent.search(deviceWinMob) > -1)) {
        return true;
    } else {
        return false;
    }
};

// detect has flash //
var hasFlash = false;
try {
    var fo = new ActiveXObject('ShockwaveFlash.ShockwaveFlash');
    if (fo) hasFlash = true;
} catch (e) {
    if (navigator.mimeTypes["application/x-shockwave-flash"] != undefined) hasFlash = true;
}




// custom jquery plugin
(function($){

	//////////////////////////////////
	//////////// SPECIALS ///////////
	$.fn.loader = function(action, message){
		if(message != null){
			$('#loadText').html(message);
		} else {
			$('#loadText').html('Loading...');
		}
		if(action != null){
			switch(action){
				case "show":
					$('#loaderLayover').show();
					$('#loaderBgLayover').show();
					break;
				case "hide":
					$('#loaderLayover').hide();
					$('#loaderBgLayover').hide();
					break;
			}
		}
	}
	
	$.fn.swapMainAction = function(action){
		$('.mainAction').removeClass('active');
		$(action).addClass('active');
	}
})(jQuery);




















