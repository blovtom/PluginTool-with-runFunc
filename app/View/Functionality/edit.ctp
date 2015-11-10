<div class="functionality form">
<?php echo $this->Form->create('Functionality'); ?>
	<fieldset>
		<legend><?php echo __('Edit Functionality'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('plugin_id');
		echo $this->Form->input('function_name');
		echo $this->Form->input('function_loc');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Functionality.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Functionality.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Functionality'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Plugins'), array('controller' => 'plugins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plugin'), array('controller' => 'plugins', 'action' => 'add')); ?> </li>
	</ul>
</div>
