<div class="methods form">
<?php echo $this->Form->create('Method'); ?>
	<fieldset>
		<legend><?php echo __('Add Method'); ?></legend>
	<?php
		echo $this->Form->input('plugin_id');
		echo $this->Form->input('class_name');
		echo $this->Form->input('method_name');
		echo $this->Form->input('method_loc');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Methods'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Plugins'), array('controller' => 'plugins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plugin'), array('controller' => 'plugins', 'action' => 'add')); ?> </li>
	</ul>
</div>
