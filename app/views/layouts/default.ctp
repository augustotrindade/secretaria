<?php
/* SVN FILE: $Id: default.ctp,v 1.2 2010-03-18 14:17:44 augusto Exp $ */
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.console.libs.templates.skel.views.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @version       $Revision: 1.2 $
 * @modifiedby    $LastChangedBy: gwoo $
 * @lastmodified  $Date: 2010-03-18 14:17:44 $
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8" />
		<title>.:: Sistema de Gerenciamento de Igreja ::.</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!--basic styles-->

		<?php
			echo $this->Html->meta('icon');

			echo $this->Html->css('bootstrap.min');
			echo $this->Html->css('bootstrap-responsive.min');
			echo $this->Html->css('font-awesome.min');
			echo $this->Html->css('main');
			//echo $this->Html->css('jquery.fancybox-1.2.6.css');

			//echo $this->Html->script('vendor/modernizr-2.6.2-respond-1.1.0.min',array('javascriptlink'));

			echo $scripts_for_layout;

			$logado = $this->Session->read('logado');
		?>
		<!--[if IE 7]>
		  <?php echo $this->Html->css('font-awesome-ie7.min'); ?>
		<![endif]-->

		<!--page specific plugin styles-->

		<!--fonts-->

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!--ace styles-->

		<?php
		echo $this->Html->css('ace.min');
		echo $this->Html->css('ace-responsive.min');
		echo $this->Html->css('ace-skins.min');
		?>
		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		  <?php echo $this->Html->css('ace-ie.min'); ?>
		<![endif]-->

		<!--inline styles related to this page-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

	<body>
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a href="#" class="brand">
						<small>
							<i class="icon-leaf"></i>
							SGI - Serranópolis
						</small>
					</a>

					<ul class="nav ace-nav pull-right">
						<?php if ( isset($logado) ) { ?>
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<?php echo $this->Html->image('logo_ad', array('class'=>'nav-user-photo', 'alt'=>$logado['nome'])) ?>
								<span class="user-info">
									<small>Bem-vindo,</small>
									<?php echo $logado['nome']?>
									<i class="icon-caret-down"></i>
								</span>
							</a>
							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
								<li>
									<a href="#">
										<i class="icon-cog"></i>
										Configurações
									</a>
								</li>

								<li>
									<a href="#">
										<i class="icon-user"></i>
										Perfil
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<?php echo $this->Html->link('<i class="icon-off"></i> Sair',array('controller'=>'login','action'=>'sair'),array('escape'=>false)) ?>
								</li>
							</ul>
						</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>

		<div class="main-container container-fluid">
			<a class="menu-toggler" id="menu-toggler" href="#">
				<span class="menu-text"></span>
			</a>
			<div class="sidebar" id="sidebar">
				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						&nbsp;
					</div>

				</div><!--#sidebar-shortcuts-->

				<ul class="nav nav-list">
					<li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-desktop"></i>
							<span class="menu-text"> Secretaria </span>

							<b class="arrow icon-angle-down"></b>
						</a>
						<ul class="submenu">
							<li>
								<a href="#" class="dropdown-toggle">
									<i class="icon-double-angle-right"></i>
									Cadastro
									<b class="arrow icon-angle-down"></b>
								</a>
								<ul class="submenu">
									<li>
										<?php echo $this->Html->link('<i class="icon-cog"></i> Usuários',array('controller'=>'usuarios','action'=>'index'),array('escape'=>false)); ?>
									</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul><!--/.nav-list-->
				<div class="sidebar-collapse" id="sidebar-collapse">
					<i class="icon-double-angle-left"></i>
				</div>
			</div>
			<div class="main-content">
				<div class="breadcrumbs" id="breadcrumbs">

				</div>
				<div class="page-content">
					<?php echo $this->Session->flash(); ?>
					<?php echo $content_for_layout; ?>
				</div>
			</div>
		</div>
		<!--basic scripts-->
		<?php
			echo $this->Html->script('jquery-2.0.3.min',array('javascriptlink'));
			echo $this->Html->script('bootstrap.min',array('javascriptlink'));
		?>
		<!--[if lte IE 8]>
		  <?php echo $this->Html->script('excanvas.min',array('javascriptlink'));?>
		<![endif]-->
		<?php
			echo $this->Html->script('jquery-ui-1.10.3.custom.min',array('javascriptlink'));
			echo $this->Html->script('jquery.ui.touch-punch.min',array('javascriptlink'));
			echo $this->Html->script('jquery.slimscroll.min',array('javascriptlink'));
			echo $this->Html->script('jquery.easy-pie-chart.min',array('javascriptlink'));
			echo $this->Html->script('jquery.sparkline.min',array('javascriptlink'));
			echo $this->Html->script('flot/jquery.flot.min',array('javascriptlink'));
			echo $this->Html->script('flot/jquery.flot.pie.min',array('javascriptlink'));
			echo $this->Html->script('flot/jquery.flot.resize.min',array('javascriptlink'));
			echo $this->Html->script('ace-elements.min',array('javascriptlink'));
			echo $this->Html->script('ace.min',array('javascriptlink'));

		?>
	</body>
</html>
