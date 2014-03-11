<?php include('elements/header.php'); ?>
<div class="container_fond">
	<div class="container">
		<!--<img src="<?php echo $this->getThemePath();?>/assets/images/slider.png" alt="slider" />-->
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
			<!--<h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h1>-->
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
			<!--<p><h3>Social Connection</h3></p>
			<p class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			<a href="#"><img src="<?php echo $this->getThemePath();?>/assets/images/rss.png" alt="rss" /></a><a href="#"><img src="<?php echo $this->getThemePath();?>/assets/images/facebook.png" alt="facebook" /></a><a href="#"><img src="<?php echo $this->getThemePath();?>/assets/images/linkedin.png" alt="linkedin" /></a><a href="#"><img src="<?php echo $this->getThemePath();?>/assets/images/youtube.png" alt="youtube" /></a><a href="#"><img src="<?php echo $this->getThemePath();?>/assets/images/twitter.png" alt="twitter" /></a>
			<p><h3>Newsletter</h3></p>
			<p class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
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
			<!--<p><h3>News Updates</h3></p>
			<div class="contenu_news">
				<ul>
					<li>
						<a href="#">
							<img class="cadre" src="<?php echo $this->getThemePath();?>/assets/images/news_1.png" alt="news_1" />
						</a>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
					</li>
					<li>
						<a href="#">
							<img class="cadre" src="<?php echo $this->getThemePath();?>/assets/images/news_2.png" alt="news_2" />
						</a>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p
					</li>
					<li>
						<a href="#">
							<img class="cadre" src="<?php echo $this->getThemePath();?>/assets/images/news_3.png" alt="news_3" />
						</a>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p
					</li>
				</ul>
			</div>--->

			<a class="pure-button pure-button-primary" href="#">Visit our Blog  &#x2192;</a>
		</div>
	</div>
</div>
<?php include('elements/footer.php'); ?>
