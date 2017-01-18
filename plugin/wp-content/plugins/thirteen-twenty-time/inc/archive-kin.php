<ul class="kin listing">
<?php foreach ($all_kin as $kin): ?>
	<li>
		<p><img src="<?php echo $kin->img_url; ?>"></p>
		<p><?php echo $kin->name; ?></p>
	</li>
<?php endforeach ?>
</ul>

<hr>

<?php out($all_kin[0]); ?>