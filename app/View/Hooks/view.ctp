<div class="hooks view">
<h2><?php echo __('Hook'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hook['Hook']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plugin'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hook['Plugin']['name'], array('controller' => 'plugins', 'action' => 'view', $hook['Plugin']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hook Name'); ?></dt>
		<dd>
			<?php echo h($hook['Hook']['hook_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hook Callback'); ?></dt>
		<dd>
			<?php echo h($hook['Hook']['hook_callback']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hook Priority'); ?></dt>
		<dd>
			<?php echo h($hook['Hook']['hook_priority']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($hook['Hook']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($hook['Hook']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hook'), array('action' => 'edit', $hook['Hook']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hook'), array('action' => 'delete', $hook['Hook']['id']), null, __('Are you sure you want to delete # %s?', $hook['Hook']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hooks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hook'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Plugins'), array('controller' => 'plugins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plugin'), array('controller' => 'plugins', 'action' => 'add')); ?> </li>
	</ul>
</div>
