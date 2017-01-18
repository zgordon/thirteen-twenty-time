	<div data-role="footer" data-id="foo1" data-position="fixed">
		<div data-role="navbar">
			<ul>
				<li><a href="index.php" <?php if($_SERVER['REQUEST_URI'] == '/m/' || $_SERVER['REQUEST_URI'] == '/m/index.php') echo 'class="ui-btn-active"';?>>Today</a></li>
				<li><a href="watches.php" <?php if($_SERVER['REQUEST_URI'] == '/m/watches.php') echo 'class="ui-btn-active"';?>>Watches</a></li>			
				<li><a href="moon.php" <?php if($_SERVER['REQUEST_URI'] == '/m/moon.php') echo 'class="ui-btn-active"';?>>Moon</a></li>							
				<li><a href="tzolkin.php" <?php if($_SERVER['REQUEST_URI'] == '/m/tzolkin.php') echo 'class="ui-btn-active"';?>>Tzolkin</a></li>								
			</ul>
		</div><!-- /navbar -->
	</div><!-- /footer -->



</div><!-- /page -->

</body>
</html>