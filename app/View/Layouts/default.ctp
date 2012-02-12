<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('960');
		echo $this->Html->css('grid');
		echo $this->Html->css('ie');
		echo $this->Html->css('ie6');
		
		echo $this->Html->css('nav');
		echo $this->Html->css('reset');
		echo $this->Html->css('text');
		echo $this->Html->css('layout');
		
		
		echo $this->Html->script('jquery/jquery-1.7.1.js');
				
		echo $this->Html->script('jquery-ui\js\jquery-ui-1.8.17.custom.min.js');
		
		echo $this->Html->script('raesphp.general.js');
			
		
		echo $scripts_for_layout;
	?>
</head>
	<body>
	<div class="container_16">
			<div class="grid_16">
				<h1 id="branding">
					<a href="../../">Fluid 960 Grid System</a>
				</h1>
			</div>
			<div class="clear"></div>
			<div class="grid_16">
				<ul class="nav main">
					<li>
						<a href="../../12/">Fluid 12-column</a>
						<ul>
							<li>
								<a href="../../12/fluid/mootools/">MooTools</a>
							</li>
							
						</ul>
					</li>
					
					<li class="secondary">
						<a href="http://960.gs/" title="960.gs | A CSS grid system developed by Nathan Smith">The 960 Grid System</a>
					</li>
				</ul>
			</div>
			<div class="clear"></div>
			<div class="grid_16">
				<h2 id="page-heading">Templates for Rapid Interactive Prototyping</h2>
			</div>
			<div class="clear"></div>
			<div class="grid_16 mainContainer">
			<?php echo $content_for_layout; ?>
			
			</div>
			<div class="grid_16" id="site_info">
				<div class="box">
					<p>Fluid 960 Grid System, created by <a href="http://www.domain7.com/WhoWeAre/StephenBau.html">Stephen Bau</a>, based on the <a href="http://960.gs/">960 Grid System</a> by <a href="http://sonspring.com/journal/960-grid-system">Nathan Smith</a>. Released under the 
		<a href="../../licenses/GPL_license.txt">GPL</a> / <a href="../../licenses/MIT_license.txt">MIT</a> <a href="../../README.txt">Licenses</a>.</p>
				</div>
			</div>
			<div class="clear"></div>
		</div>
</body>
</html>