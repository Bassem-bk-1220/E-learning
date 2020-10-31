<?php
	include 'inc/header.php';
?>
<section>
		
		<div class="info">
			<div class="container">
			<div class="tite">
				<h2>Our Course Categories</h2>
				</div>
				<div class="row">
				<div class="col-md-4">
						<div class="title" id="box">
							<img src="image/html.png" alt="" />
							<h2>html</h2>
							<p>html est un langage de programmation web</p>
								<a href="courshtml.php" id="clickme">courshtml</a>
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="title">
							<img src="image/css.png" alt="" />
							<h2>css</h2>
							<p>css est un langage de programmation web</p>
								<a href="courscss.php">courscss</a>
						</div>
					</div>
					
		<div class="col-md-4">
						<div class="title">
							<img src="image/javascript.php" alt="" />
							<h2>javascript</h2>
							<p>javascript est un langage de programmation web</p>
								<a href="coursjava.php">coursjava</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="title">
							<img src="image/php.png" alt="" />
							<h2>php</h2>
							<p>php est un langage de programmation web</p>
								<a href="coursphp.php">coursphp</a>
						</div>
					</div>
					</div>
			</div>
		</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("a").on({
    mouseenter: function(){
      $(this).css("background-color", "lightgray");
    },  
    mouseleave: function(){
      $(this).css("background-color", "lightblue");
    }, 
    click: function(){
      $(this).css("background-color", "red");
    }  
  });
});
</script>

	</section>
		<?php
	include 'inc/footer.php';
?>