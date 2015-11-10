<div class="functionality index">
	<h2><?php echo __('Functions'); ?>	</h2>
	
	<table class="table table-bordered">
    
	<div class ="col-md-12 purple search_box">


	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('plugin'); ?></th>
			<th><?php echo $this->Paginator->sort('function_name'); ?></th>
			<th><?php echo $this->Paginator->sort('function_loc'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>

	</tr>
	</thead>

	<tbody>

	<?php foreach($functionality as $functionality): ?>
	<tr>
		<td><?php echo h($functionality['Functionality']['id']); ?>&nbsp;</td>
		<td><?php echo h($functionality['Plugin']['name']); ?>&nbsp;</td>
		<td><?php echo h($functionality['Functionality']['function_name']); ?>&nbsp;</td>
		<td><?php echo h($functionality['Functionality']['function_loc']); ?>&nbsp;</td>
		<td><?php echo h($functionality['Functionality']['created']); ?>&nbsp;</td>
		<td><?php echo h($functionality['Functionality']['modified']); ?>&nbsp;</td>




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
		<li><?php echo $this->Html->link(__('View Plugins'), array('controller'=> 'plugins', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('View Filters '), array('controller' => 'Filters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('View Hooks'), array('controller' => 'Hooks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('View Methods'), array('controller' => 'plugins', 'action' => 'index')); ?> </li>
	</ul>
</div>
