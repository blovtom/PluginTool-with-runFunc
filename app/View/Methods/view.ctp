<div class="methods view">
<h2><?php echo __('Method'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($method['Method']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plugin'); ?></dt>
		<dd>
			<?php echo $this->Html->link($method['Plugin']['name'], array('controller' => 'plugins', 'action' => 'view', $method['Plugin']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Class Name'); ?></dt>
		<dd>
			<?php echo h($method['Method']['class_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Method Name'); ?></dt>
		<dd>
			<?php echo h($method['Method']['method_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Method Loc'); ?></dt>
		<dd>
			<?php echo h($method['Method']['method_loc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($method['Method']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($method['Method']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Method'), array('action' => 'edit', $method['Method']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Method'), array('action' => 'delete', $method['Method']['id']), null, __('Are you sure you want to delete # %s?', $method['Method']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Methods'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Method'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Plugins'), array('controller' => 'plugins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plugin'), array('controller' => 'plugins', 'action' => 'add')); ?> </li>
	</ul>
</div>
