<?php
/* SVN FILE: $Id: login.ctp,v 1.2 2010-03-18 14:17:44 augusto Exp $ */
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
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
		<?php echo $html->charset(); ?>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>.:: Sistema de Gestão de Membros ::.</title>
		
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php
			echo $html->meta('icon');
	
			echo $html->css('bootstrap.min');
			echo $html->css('bootstrap-theme.min');
			echo $html->css('login');
			echo $html->css('main');
	
			echo $html->script('vendor/modernizr-2.6.2-respond-1.1.0.min',array('javascriptlink'));
			
			echo $scripts_for_layout;
		?>
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
	</head>
	<body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
	
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Gerenciamento de Igreja</a>
        </div>
      </div>
    </div>

    <div class="container">
    
		<?php echo $content_for_layout; ?>

	</div>
	
	<footer>
		<p>Copyright &copy; Assembléia de Deus. Todos os direitos reservados</p>
	</footer>			
</body>
</html>