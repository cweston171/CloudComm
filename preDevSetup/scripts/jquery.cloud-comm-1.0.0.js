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
	settings.mainActions = {};
	settings.mainActions.summary = '#summary_btn';
	settings.mainActions.currCall = '#currCall_btn';
	settings.mainActions.callBacks = '#callBacks_btn';
	settings.mainActions.voicemails = '#voicemail_btn';
	settings.mainActions.sessHistory = '#sessHistory_btn';
	settings.mainActions.contacts = '#contacts_btn';
	
	//////////////////////////////////////////
	//////////// INITIALIZATION /////////////
	
	//**** none of this should be accessible if mobile -- will have to check before doing all the initialization.
	$.fn.InitCloudComm = function(settings){
		// update settings
			// require validated = true
				// alert and redirect to login if not
	};
	
	//////////////////////////////////
	//////////// SPECIALS ///////////
	$.fn.loader = function(action){
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
	
	$.fn.swapMainAction = function(action){
		$('.mainAction').removeClass('active');
		$('"' + action + '"').addClass('active');
	}
	
	
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
	
	
	////////////////////////////////////////////
	/////////// MAIN ACTIONS BUTTONS //////////
	$.fn.loadSummary = function(){
		// if active call - save info before loading screen
		// show loader overlay
		$.fn.loader('show');
		$('#screen').load('partials/summary/summary.php', function(){
			$.fn.loader('hide');
			// swap main action button
			$.fn.swapMainAction(settings.mainAction.summary);
		});
	}
	
	$.fn.loadCurrCall = function(){
		// if active call - save info before loading screen
		// show loader overlay
		$.fn.loader('show');
		// load content
		$('#screen').load('partials/currentCall/currCallCont.php', function(){
			// hide loader
			$.fn.loader('hide');
			// swap main action button
			$.fn.swapMainAction(settings.mainAction.currCall);
		});
	}
	
	$.fn.loadCallbacks = function(){
		// if active call - save info before loading screen
		// show loader overlay
		$.fn.loader('show');
		// load content
		$('#screen').load('partials/callbacks/callbacks.php', function(){
			// hide loader
			$.fn.loader('hide');
			// swap main action button
			$.fn.swapMainAction(settings.mainAction.callBacks);
		});
	}
	
	$.fn.loadVoicemail = function(){
		// if active call - save info before loading screen
		// show loader overlay
		$.fn.loader('show');
		// load content 
		$('#screen').load('partials/voicemail/voicemail.php', function(){
			// hide loader
			$.fn.loader('hide');
			// swap main action button
			$.fn.swapMainAction(settings.mainAction.voicemail);
		});
	}
	
	$.fn.loadSessHistory = function(){
		// if active call - save info before loading screen
		// show loader overlay
		$.fn.loader('show');
		// load content
		$('#screen').load('partials/session/sessionHistory.php', function(){
			// hide loader
			$.fn.loader('hide');
			// swap main action button
			$.fn.swapMainAction(settings.mainActions.sessHistory);
		});
	}
	
	$.fn.loadContacts = function(){
		// if active call - save info before loading screen
		// show loader overlay
		$.fn.loader('show');
		// load content 
		$('#screen').load('partials/contacts/contacts.php', function(){
			// hide loader
			$.fn.loader('hide');
			// swap main action buttion
			$.fn.swapMainAction(settings.mainActions.contacts);
		});
	}
	
})(jQuery);




















