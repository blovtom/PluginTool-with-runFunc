<div class="filters view">
<h2><?php echo __('Filter'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($filter['Filter']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plugin'); ?></dt>
		<dd>
			<?php echo $this->Html->link($filter['Plugin']['name'], array('controller' => 'plugins', 'action' => 'view', $filter['Plugin']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tag Name'); ?></dt>
		<dd>
			<?php echo h($filter['Filter']['tag_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filter Callback'); ?></dt>
		<dd>
			<?php echo h($filter['Filter']['filter_callback']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filter Priority'); ?></dt>
		<dd>
			<?php echo h($filter['Filter']['filter_priority']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($filter['Filter']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($filter['Filter']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Filter'), array('action' => 'edit', $filter['Filter']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Filter'), array('action' => 'delete', $filter['Filter']['id']), null, __('Are you sure you want to delete # %s?', $filter['Filter']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Filters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Filter'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Plugins'), array('controller' => 'plugins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plugin'), array('controller' => 'plugins', 'action' => 'add')); ?> </li>
	</ul>
</div>
