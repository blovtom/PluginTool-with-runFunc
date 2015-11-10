<div class="plugintools view">
<h2><?php echo __('Plugintool'); ?></h2>
	<dl>
		<dt><?php echo __('Plugins'); ?></dt>
		<dd>
			<?php echo $this->Html->link($plugintool['Plugins']['name'], array('controller' => 'plugins', 'action' => 'view', $plugintool['Plugins']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($plugintool['Plugintool']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TestedUpTo'); ?></dt>
		<dd>
			<?php echo h($plugintool['Plugintool']['testedUpTo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('StableTag'); ?></dt>
		<dd>
			<?php echo h($plugintool['Plugintool']['stableTag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RequiresAtLeast'); ?></dt>
		<dd>
			<?php echo h($plugintool['Plugintool']['requiresAtLeast']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($plugintool['Plugintool']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($plugintool['Plugintool']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Plugintool'), array('action' => 'edit', $plugintool['Plugintool']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Plugintool'), array('action' => 'delete', $plugintool['Plugintool']['id']), array(), __('Are you sure you want to delete # %s?', $plugintool['Plugintool']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Plugintools'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plugintool'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Plugins'), array('controller' => 'plugins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plugins'), array('controller' => 'plugins', 'action' => 'add')); ?> </li>
	</ul>
</div>
