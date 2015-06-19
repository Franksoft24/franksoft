<?php include_once("header.html"); ?>
	<div class="alert">
		<?php

			if($_GET['message']!="successful"){
				echo "<h3 class='error'>Error!</h3>";
			}else{
				echo "<h3 class='successful'>Message Sent Successfully!!!</h3>";
			}

		?>
	</div>
<?php include_once("footer.html"); ?>