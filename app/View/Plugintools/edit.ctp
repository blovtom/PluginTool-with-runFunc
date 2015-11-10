<div class="plugintools form">
<?php echo $this->Form->create('Plugintool'); ?>
	<fieldset>
		<legend><?php echo __('Edit Plugintool'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Plugintool.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Plugintool.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Plugintools'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Plugins'), array('controller' => 'plugins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plugins'), array('controller' => 'plugins', 'action' => 'add')); ?> </li>
	</ul>
</div>
