<?php include('elements/header.php'); ?>
<br/>
<br/>
<div class="container">
	<div class="pure-g contenu_news_actu">
		<ul>
			<div class="pure-u-1">
				<?php
					$a = new Area ('contenu_ul');
					$a->display($c);
	            ?>
			</div>
		</ul>
	</div>
	<div class="pure-g">
		<div class="pure-u-1">
			<?php
				$a = new Area ('contenu');
				$a->display($c);
            ?>
		</div>
	</div>
</div>
<?php include('elements/footer.php'); ?>