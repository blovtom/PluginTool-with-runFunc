<div class="filters form">
<?php echo $this->Form->create('Filter'); ?>
	<fieldset>
		<legend><?php echo __('Add Filter'); ?></legend>
	<?php
		echo $this->Form->input('plugin_id');
		echo $this->Form->input('tag_name');
		echo $this->Form->input('filter_callback');
		echo $this->Form->input('filter_priority');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Filters'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Plugins'), array('controller' => 'plugins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plugin'), array('controller' => 'plugins', 'action' => 'add')); ?> </li>
	</ul>
</div>
