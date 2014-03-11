<html>
<head>
	<title>POLO360</title>
	<link href="<?php echo $this->getThemePath();?>/assets/css/purecss.css" rel="stylesheet">
	<link href="<?php echo $this->getThemePath();?>/assets/css/default.css" rel="stylesheet">
	<?php 
      Loader::element('header_required');
    ?>
</head>
<body>
<div class="container">
	<div class="pure-g">
		<div class="pure-u-1-3">
			<img src="<?php echo $this->getThemePath();?>/assets/images/logo.png" alt="logo" class="logo"/>
		</div>
		<div class="pure-u-2-3">
			<div class="pure-menu pure-menu-open pure-menu-horizontal">
				<?php
	              $a = new Area ('menu');
	              $a->display($c);
	            ?>
			</div>
		</div>
	</div>
</div>