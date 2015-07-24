<div class="plugins form">
<?php echo $this->Form->create('Plugin'); ?>
	<fieldset>
		<legend><?php echo __('Add Plugin'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('testedUpTo');
		echo $this->Form->input('stableTag');
		echo $this->Form->input('requiresAtLeast');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Plugins'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Plugins'), array('controller' => 'plugins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plugin'), array('controller' => 'plugins', 'action' => 'add')); ?> </li>
	</ul>
</div>
