<?php include_once('../Header/index.php');?>
	<div class="nav-button-back"><a href="../<?php echo $_GET['location']; ?>/"><img src="../../resource/img/back.png" alt="back.png" width="100%"></a></div>
	<div class="SendMessage"><form method="post" action="http://localhost:82/franksoft/programmability/SendMessage.php?" name="SendMessage">
		<table>
			<tr>
				<td><input type="text" name="name" placeholder="Name" required></td>
			</tr>
			<tr>
				<td><input type="email" name="mail" placeholder="E-mail" required></td>
			</tr>
			<tr>
				<td><input type="text" name="subject" placeholder="subject" required></td>
			</tr>
			<tr>
				<td><textarea name="content" placeholder="..." valign="top" required></textarea></td>
			</tr>
			<tr style="display:none">
				<td><input type="text" id="location" name="location"></td>
			</tr>
			<tr>
				<td><input type="submit" value="Send" class="blue-botton"></td>
			</tr>
		</table>
	</form></div>
	<script type="text/javascript">
		var where = "<?php echo $_GET['location']; ?>";
		headerTitle("Contact");
		assignlocation(where);
	</script>
	</section>
	<footer>developed by <a href="#" class="link">franksoft</a></footer>
</body>
</html>