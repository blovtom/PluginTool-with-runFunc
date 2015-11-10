<div class="functionality view">
<h2><?php echo __('Functionality'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($functionality['Functionality']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plugin'); ?></dt>
		<dd>
			<?php echo $this->Html->link($functionality['Plugin']['name'], array('controller' => 'plugins', 'action' => 'view', $functionality['Plugin']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Function Name'); ?></dt>
		<dd>
			<?php echo h($functionality['Functionality']['function_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Function Loc'); ?></dt>
		<dd>
			<?php echo h($functionality['Functionality']['function_loc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($functionality['Functionality']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($functionality['Functionality']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Functionality'), array('action' => 'edit', $functionality['Functionality']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Functionality'), array('action' => 'delete', $functionality['Functionality']['id']), null, __('Are you sure you want to delete # %s?', $functionality['Functionality']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Functionality'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Functionality'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Plugins'), array('controller' => 'plugins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plugin'), array('controller' => 'plugins', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Plugins'); ?></h3>
	<?php if (!empty($functionality['plugins'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('TestedUpTo'); ?></th>
		<th><?php echo __('StableTag'); ?></th>
		<th><?php echo __('RequiresAtLeast'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($functionality['plugins'] as $plugins): ?>
		<tr>
			<td><?php echo $plugins['id']; ?></td>
			<td><?php echo $plugins['name']; ?></td>
			<td><?php echo $plugins['testedUpTo']; ?></td>
			<td><?php echo $plugins['stableTag']; ?></td>
			<td><?php echo $plugins['requiresAtLeast']; ?></td>
			<td><?php echo $plugins['created']; ?></td>
			<td><?php echo $plugins['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'plugins', 'action' => 'view', $plugins['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'plugins', 'action' => 'edit', $plugins['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'plugins', 'action' => 'delete', $plugins['id']), null, __('Are you sure you want to delete # %s?', $plugins['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Plugins'), array('controller' => 'plugins', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
