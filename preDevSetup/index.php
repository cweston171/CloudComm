<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>VoiceWorx - Template</title>
<script type="text/javascript" src="scripts/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery-ui-1.10.1.custom.min.js"></script>
<script type="text/javascript" src="scripts/jquery.mousewheel.js"></script>
<script type="text/javascript" src="scripts/mwheelIntent.js"></script>
<script type="text/javascript" src="scripts/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" src="scripts/jquery.validate.min.js"></script>
<script type="text/javascript" src="scripts/additional-methods.min.js"></script>
<script type="text/javascript" src="scripts/label_over.js"></script>
<link href="css/plugins/jquery-ui-1.10.1.custom.css" rel="stylesheet" type="text/css">
<link href="css/plugins/jquery.jscrollpane.css" rel="stylesheet" type="text/css">
<link href="css/reset.css" rel="stylesheet" type="text/css">
<link href="css/site.css" rel="stylesheet" type="text/css">
<link href="css/widgets.css" rel="stylesheet" type="text/css">
<link href="css/forms.css" rel="stylesheet" type="text/css">
<link href="css/buttons_icons.css" rel="stylesheet" type="text/css">
</head>

<body>
<!-- wrapper -->
<div id="wrapper" align="center">
	<!-- header -->
    <div id="header">
    	<div class="hardWidth center">
            <div id="logo">
                <a href="#">
                    <img src="images/logo.png" alt="VoiceWorx&trade;" />
                </a>
            </div>
            <!-- currcall floater -->
            <!-- options menu -->
            <ul id="options_menu">
                <li>Options</li>
                <li>Help</li>
                <li>Accnt: [name]</li>
            </ul>
            <!-- /options menu -->
        </div>
    </div>
    <!-- /header -->
    <!-- body container -->
    <div id="content_container" class="P20">
    	<!-- content -->
        <div id="content" class="hardWidth center relative">
        	<!-- main actions -->
            <div class="main_actions relative">
            	<?php include('partials/mainActions.php'); ?>
            </div>
            <!-- /main actions -->
            <div id="screen" class="left">
                <?php include('partials/currentCall/currCallCont.php'); ?>
            </div>
            <!-- curr screen actions panel -->
            <?php include('partials/callActions.php');?>
            <!-- /curr screen actions panel -->
            <div class="clear"></div>
        </div>
        <!-- /content -->
    </div>
    <!-- /body container -->
    <script type="text/javascript">
		$(function(){
			// initialize buttons
			$('#action_endCall').button();
			$('#action_recordCall').button();
			$('#action_holdCall').button();
			$('#action_parkCall').button();
			$('#action_transferCall').button();
			$('#action_addConferencePartner').button();
			$('#action_leaveConference').button();
			$('#action_startWorksheet').button();
			$('#action_manualConnection').button();
			$('#action_setDisposition').button();
			$('#action_selectContactRecord').button();
			$('#action_atEndSwitchTo').button();
			$('#action_callCustomer').button();
			$('#action_useDialPad').button();
			$('#action_volumeControl').button();
			
			$('div.currActionsList').jScrollPane();
		});
	</script>
</body>
<!-- /wrapper -->
</body>
</html>