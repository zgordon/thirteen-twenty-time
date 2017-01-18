<p><?= substr($code_spell->line_one, strlen($code_spell->line_one)-2, 0); print $code_spell->line_one; ?></p>
<p><?= $code_spell->line_two;?></p>
<p><?= $code_spell->line_three;?></p>
<p><?= $code_spell->line_four;?></p>
<p><?= $code_spell->line_five; ?></p>
<?php if($code_spell->portal == true):?>
<p><?= $code_spell->line_six;?></p>
<?php endif; ?>
<?php if($code_spell->season != null): ?>
<p><?= $code_spell->line_seven; ?></p>
<?php endif; ?>