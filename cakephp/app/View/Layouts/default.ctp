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

        echo $this->Html->css('plugins/jquery.jscrollpane');
        echo $this->Html->css('plugins/jquery-ui-1.10.1.custom');
        echo $this->Html->css('reset');
        echo $this->Html->css('buttons_icons');
        echo $this->Html->css('site');
        echo $this->Html->css('forms');
        echo $this->Html->css('tabs');
        echo $this->Html->css('widgets');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
<?php echo $this->Session->flash(); ?>
<div id="loaderLayover">
    <?php echo $this->Html->image('ajax-loader.gif', array('alt' => 'Loading...'));?>
    <br/>
    <span id="loadText">Loading...</span>
</div>
<div id="loaderBgLayover"></div>
<div id="wrapper">
	<div id="container">
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
            <div id="content">
                <?php echo $this->fetch('content'); ?>
            </div>
            <!-- /content -->
        </div>
        <!-- /body container -->
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
</div>
<?php echo $this->element('sql_dump'); ?>
</body>
</html>
