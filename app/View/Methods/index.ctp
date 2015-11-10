<div class="methods index">
	<h2><?php echo __('Methods'); ?></h2>
	<table class="table table-bordered">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('plugin_id'); ?></th>
			<th><?php echo $this->Paginator->sort('class_name'); ?></th>
			<th><?php echo $this->Paginator->sort('method_name'); ?></th>
			<th><?php echo $this->Paginator->sort('method_loc'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>

	</tr>
	<?php foreach ($methods as $method): ?>
	<tr>
		<td><?php echo h($method['Method']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($method['Plugin']['name'], array('controller' => 'plugins', 'action' => 'view', $method['Plugin']['id'])); ?>
		</td>
		<td><?php echo h($method['Method']['class_name']); ?>&nbsp;</td>
		<td><?php echo h($method['Method']['method_name']); ?>&nbsp;</td>
		<td><?php echo h($method['Method']['method_loc']); ?>&nbsp;</td>
		<td><?php echo h($method['Method']['created']); ?>&nbsp;</td>
		<td><?php echo h($method['Method']['modified']); ?>&nbsp;</td>

	</tr>
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
	<li >
	        <?php echo $this->Html->link(__('Return Home'), array('controller'=> 'homepage', 'action' => 'index')); ?></li>
    		<li><?php echo $this->Html->link(__('View Plugins'), array('controller'=> 'plugins', 'action' => 'index')); ?></li>
    		<li><?php echo $this->Html->link(__('View Filters '), array('controller' => 'Filters', 'action' => 'index')); ?> </li>
    		<li><?php echo $this->Html->link(__('View Hooks'), array('controller' => 'Hooks', 'action' => 'index')); ?> </li>
    		<li><?php echo $this->Html->link(__('View Functions'), array('controller' => 'Functionality', 'action' => 'index')); ?> </li>
	</ul>
</div>
