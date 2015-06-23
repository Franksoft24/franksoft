	</section>
	<footer>developed by <a href="#" class="link">franksoft</a></footer>
	<a href="javascript:SendMessagePop()"><div class="plus-material-design" id="plus-material-design">
		+
	</div></a>
	<div id="SendMessagePop" class="SendMessagePop">
		<span class="close-pop" onclick="SendMessagePop()">»</span>
		<form method="post" action="http://localhost:82/franksoft/programmability/SendMessage.php?" name="SendMessage">
			<table>
				<tr>
					<th>Contact</th>
				</tr>
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
		</form>
	</div>
	<script type="text/javascript">
		assignlocation(where);
	</script>
	<!--div class="nav-button-next"><img src="../../resource/img/next.png" alt="next.png" width="100%"></div-->
	<!--div class="nav-button-back"><img src="../../resource/img/back.png" alt="back.png" width="100%"></div-->
</body>
</html>