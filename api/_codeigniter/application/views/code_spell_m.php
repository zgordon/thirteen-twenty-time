<p><?= substr($code_spell->line_one, strlen($code_spell->line_one)-2, 0); print $code_spell->line_one; ?></p>
<p><?= $code_spell->line_two;?></p>
<p><?= $code_spell->line_three;?>
	<?= $code_spell->line_four;?>
	<?= $code_spell->line_five; ?>
<?php if($code_spell->portal == true):?>
<?= $code_spell->line_six;?> 
<?php endif; ?>
<?php if($code_spell->season != null): ?>
<?= $code_spell->line_seven; ?>
<?php endif; ?>
</p>