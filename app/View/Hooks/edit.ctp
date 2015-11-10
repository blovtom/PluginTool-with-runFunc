<div class="hooks form">
<?php echo $this->Form->create('Hook'); ?>
	<fieldset>
		<legend><?php echo __('Edit Hook'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('plugin_id');
		echo $this->Form->input('hook_name');
		echo $this->Form->input('hook_callback');
		echo $this->Form->input('hook_priority');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Hook.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Hook.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Hooks'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Plugins'), array('controller' => 'plugins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plugin'), array('controller' => 'plugins', 'action' => 'add')); ?> </li>
	</ul>
</div>
