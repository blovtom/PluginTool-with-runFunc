<div class="plugintools index">
	<h2><?php echo __('Plugintools'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('testedUpTo'); ?></th>
			<th><?php echo $this->Paginator->sort('stableTag'); ?></th>
			<th><?php echo $this->Paginator->sort('requiresAtLeast'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($plugintools as $plugintool): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($plugintool['Plugins']['name'], array('controller' => 'plugins', 'action' => 'view', $plugintool['Plugins']['id'])); ?>
		</td>
		<td><?php echo h($plugintool['Plugintool']['name']); ?>&nbsp;</td>
		<td><?php echo h($plugintool['Plugintool']['testedUpTo']); ?>&nbsp;</td>
		<td><?php echo h($plugintool['Plugintool']['stableTag']); ?>&nbsp;</td>
		<td><?php echo h($plugintool['Plugintool']['requiresAtLeast']); ?>&nbsp;</td>
		<td><?php echo h($plugintool['Plugintool']['created']); ?>&nbsp;</td>
		<td><?php echo h($plugintool['Plugintool']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $plugintool['Plugintool']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $plugintool['Plugintool']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $plugintool['Plugintool']['id']), array(), __('Are you sure you want to delete # %s?', $plugintool['Plugintool']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Plugintool'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Plugins'), array('controller' => 'plugins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plugins'), array('controller' => 'plugins', 'action' => 'add')); ?> </li>
	</ul>
</div>
