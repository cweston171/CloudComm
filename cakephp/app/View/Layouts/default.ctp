<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

    echo $this->Html->script('jquery-1.9.1.min.js');
    echo $this->Html->script('jquery-ui-1.10.1.custom.min.js');
    echo $this->Html->script('jquery.mousewheel.js');
    echo $this->Html->script('mwheelIntent.js');
    echo $this->Html->script('jquery.jscrollpane.min.js');
    echo $this->Html->script('label_over.js');
    echo $this->Html->script('jquery.cloud-comm-1.0.0.js');

    echo $this->Html->css('plugins/jquery-ui-1.10.1.custom');
    echo $this->Html->css('plugins/jquery.jscrollpane');
    echo $this->Html->css(array('reset', 'site', 'widgets', 'forms', 'buttons_icons', 'tabs'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
<!-- wrapper -->
<div id="loaderLayover">
    <?php echo $this->Html->image('ajax-loader.gif', array('alt' => 'Loading...'));?>
    <br/>
    <span id="loadText">Loading...</span>
</div>
<div id="loaderBgLayover"></div>
<div id="wrapper" align="center">
    <!-- header -->
    <div id="header">
        <div class="hardWidth center">
            <div id="logo">
                <div class="ico"></div>
                <a class="txt" href="#">
                    <span><b>Cloud</b>Comm</span>
                </a>
                <div class="clear"></div>
            </div>
            <!-- currcall floater -->
            <!-- options menu -->
            <?php //include('partials/optionsMenu.php'); ?>
            <!-- /options menu -->
            <div class="clear"></div>
        </div>
    </div>
    <!-- /header -->
    <!-- body container -->
    <?php // if session not active add login class to content container ?>
    <div id="content_container" class="P20 login">
        <!-- content -->
        <div id="login-block" class="center">
            <div class="tplc"></div>
            <div class="tprc"></div>
            <div class="btlc"></div>
            <div class="btrc"></div>
            <div class="form">
                <form>
                    <div class="notice">Your session has expired. Log in now...</div>
                    <h2>Account Log In:</h2>
                    <div class="formfields">
                        <div class="field width70 center MB5">
                            <label for="username" class="over">Username:</label>
                            <input id="username" name="username" type="text" value="" class="inputBox" />
                        </div>
                        <div class="field width70 center MB20">
                            <label for="password" class="over">Password:</label>
                            <input id="password" name="password" type="password" value="" class="inputBox" />
                        </div>
                        <button id="login_btn">Log In Now</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /content -->
    </div>
    <!-- /body container -->
    <?php // IF NOT LOGGED IN SHOW THIS ?>
    <script type="text/javascript">
        $(function(){
            // initialize CloudComm
            $.fn.initCloudCommLogin();
        });
    </script>
    <?php // IF LOGGED IN SHOW THIS
    //<script type="text/javascript">
        //$(function(){
            // initialize CloudComm
            //$.fn.initCloudComm();
        //});
    //</script>
    ?>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
