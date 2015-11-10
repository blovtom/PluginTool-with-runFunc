<div class="hooks index">
	<h2><?php echo __('Hooks'); ?></h2>
	<table class="table table-bordered">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('plugin_id'); ?></th>
			<th><?php echo $this->Paginator->sort('hook_name'); ?></th>
			<th><?php echo $this->Paginator->sort('hook_callback'); ?></th>
			<th><?php echo $this->Paginator->sort('hook_priority'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>

	</tr>
	<?php foreach ($hooks as $hook): ?>
	<tr>
		<td><?php echo h($hook['Hook']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($hook['Plugin']['name'], array('controller' => 'plugins', 'action' => 'view', $hook['Plugin']['id'])); ?>
		</td>
		<td><?php echo h($hook['Hook']['hook_name']); ?>&nbsp;</td>
		<td><?php echo h($hook['Hook']['hook_callback']); ?>&nbsp;</td>
		<td><?php echo h($hook['Hook']['hook_priority']); ?>&nbsp;</td>
		<td><?php echo h($hook['Hook']['created']); ?>&nbsp;</td>
		<td><?php echo h($hook['Hook']['modified']); ?>&nbsp;</td>

<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous '), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ', '));
		echo $this->Paginator->next(__(' next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		                <li ><?php echo $this->Html->link(__('Return Home'), array('controller'=> 'homepage', 'action' => 'index')); ?></li>
                		<li ><?php echo $this->Html->link(__('View Functions'), array('controller'=> 'functionality', 'action' => 'index')); ?></li>
                		<li ><?php echo $this->Html->link(__('View Plugins'), array('controller' => 'Plugins', 'action' => 'index')); ?> </li>
                		<li><?php echo $this->Html->link(__('View Methods'), array('controller' => 'Methods', 'action' => 'index')); ?> </li>
                		<li><?php echo $this->Html->link(__('View Filters'), array('controller' => 'Filters', 'action' => 'index')); ?> </li>
	</ul>
</div>
