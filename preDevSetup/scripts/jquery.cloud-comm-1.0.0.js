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
	// global variables
	window.settings = {};
	settings.userValidated = false;
	settings.onCall = false;
	settings.onHold = false;
	settings.conference = false;
	settings.isAdmin = false;
	settings.isMobile = isMobile();
	settings.hasFlash = hasFlash;
	
	//////////////////////////////////////////
	//////////// INITIALIZATION /////////////
	
	//**** none of this should be accessible if mobile -- will have to check before doing all the initialization.
	$.fn.InitCloudComm = function(settings){
		// update settings
			// require validated = true
				// alert and redirect to login if not
	};
	
	///////////////////////////////////////////////////////
	///////////////  CALL CONTROL ////////////////////////
	
	// dial pad
		// a function that will open and initialize the dialpad
		// as long as a call is not in place (swaps ui based on active call)
	$.fn.dialpad = function(){
		// if not on a call or action is transfer/join conference
			// open dialog window with dialer
	};
	
	// connecting, manipulating and ending call functions
	$.fn.connectCall = function(vars){
		// connect
		// update call actions
	};
	$.fn.endCall = function(vars){ 
		// end call
		// require disposition
			// save disposition & all notes/data entered
		// reset call actions
	};
	$.fn.holdCall = function(vars){
		// is !OnHold -- hold call
			// save current data state
			// update btn to unhold? state
		// is OnHold(true) -- remove hold
			// update btn state
	};
	$.fn.transferCall = function(vars){};
	
	
	// navigation control
	$.fn.loadContent = function(vars){};
	
})(jQuery);




















