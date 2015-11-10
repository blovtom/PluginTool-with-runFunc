<div class="plugins view">
<h2><?php echo __('Plugin'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($plugin['Plugin']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($plugin['Plugin']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TestedUpTo'); ?></dt>
		<dd>
			<?php echo h($plugin['Plugin']['testedUpTo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('StableTag'); ?></dt>
		<dd>
			<?php echo h($plugin['Plugin']['stableTag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RequiresAtLeast'); ?></dt>
		<dd>
			<?php echo h($plugin['Plugin']['requiresAtLeast']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($plugin['Plugin']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($plugin['Plugin']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Plugin'), array('action' => 'edit', $plugin['Plugin']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Plugin'), array('action' => 'delete', $plugin['Plugin']['id']), null, __('Are you sure you want to delete # %s?', $plugin['Plugin']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Plugins'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plugin'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Plugins'), array('controller' => 'plugins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plugin'), array('controller' => 'plugins', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Plugins'); ?></h3>
	<?php if (!empty($plugin['Plugin'])): ?>
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
	<?php foreach ($plugin['Plugin'] as $plugin): ?>
		<tr>
			<td><?php echo $plugin['id']; ?></td>
			<td><?php echo $plugin['name']; ?></td>
			<td><?php echo $plugin['testedUpTo']; ?></td>
			<td><?php echo $plugin['stableTag']; ?></td>
			<td><?php echo $plugin['requiresAtLeast']; ?></td>
			<td><?php echo $plugin['created']; ?></td>
			<td><?php echo $plugin['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'plugins', 'action' => 'view', $plugin['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'plugins', 'action' => 'edit', $plugin['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'plugins', 'action' => 'delete', $plugin['id']), null, __('Are you sure you want to delete # %s?', $plugin['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Plugin'), array('controller' => 'plugins', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
