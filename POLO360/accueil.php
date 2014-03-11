<?php include('elements/header.php'); ?>
<div class="container_fond">
	<div class="container">
		<?php
		  $a = new Area ('diapo');
		  $a->display($c);
		?>
	</div>
</div>
<br/>
<br/>
<div class="container">
	<div class="pure-g">
		<div class="pure-u-1">
			<?php
              $a = new Area ('title');
              $a->display($c);
            ?>
		</div>
	</div>
</div>
<div class="container">
	<div class="pure-g">
		<div class="pure-u-1">
			<div class="break"></div>
		</div>
	</div>
</div>
<div class="container">
	<div class="pure-g">
		<div class="pure-u-1-3 col">
			<?php
              $a = new Area ('col1');
              $a->display($c);
            ?>
			<a class="pure-button" href="#">Learn More  &#x2192;</a>
		</div>
		<div class="pure-u-1-3 col">
			<?php
              $a = new Area ('col2');
              $a->display($c);
            ?>
			<a class="pure-button" href="#">Learn More  &#x2192;</a>
		</div>
		<div class="pure-u-1-3 col">
			<?php
              $a = new Area ('col3');
              $a->display($c);
            ?>
			<a class="pure-button" href="#">Learn More  &#x2192;</a>
		</div>
	</div>
</div>
<div class="container">
	<div class="pure-g">
		<div class="pure-u-1">
			<div class="break2"></div>
		</div>
	</div>
</div>
<div class="container">
	<div class="pure-g">
		<div class="pure-u-1-3">
			<?php
				$a = new Area ('social');
				$a->display($c);
            ?>
			<form class="pure-form pure-form-aligned">
		    	<fieldset>
					<div class="pure-control-group">
			            <input id="newsletter" type="email" placeholder="Email Address">
			        </div>
	        	</fieldset>
			</form>
			<a class="pure-button pure-button-primary" href="#">Subscribe  &#x2192;</a>
		</div>
		<div class="pure-u-1-3">
			<?php
				$a = new Area ('contact');
				$a->display($c);
            ?>
			<form class="pure-form pure-form-aligned">
		    	<fieldset>
					<div class="pure-control-group">
			            <input id="name" type="text" placeholder="Your Name">
			        </div>
			        <div class="pure-control-group">
			            <input id="email" type="email" placeholder="Email Address">
			        </div>
			        <div class="pure-control-group">
			        	<textarea id="message" placeholder="Your Message"></textarea>
					</div>	
	        	</fieldset>
			</form>
			<a class="pure-button pure-button-primary" href="#">Send it  &#x2192;</a>
		</div>
		<div class="pure-u-1-3">
			<?php
				$a = new Area ('news');
				$a->display($c);
            ?>
			<a class="pure-button pure-button-primary" href="#">Visit our Blog  &#x2192;</a>
		</div>
	</div>
</div>
<?php include('elements/footer.php'); ?>
