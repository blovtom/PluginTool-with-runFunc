
<div class ="filters" align = "right" style="display: inline">           
        <?php
            $base_url = array('controller' => 'plugintools', 'action' => 'index');
            echo $this->Form->create("Plugintool",array('url' => $base_url, 'class' => 'filter'));
            
            echo $this ->Form ->input("id", array('label' => 'Name', 'options' => $names, 'empty' =>'All Plugins','default'=>''));

            echo $this->Form->input ("search", array('label' => 'Search', 'placeholder' => "Search..."));
            echo "<div class='submit actions' style = 'display: inline'>";
            echo $this->Form->submit("Enter");
            echo $this->Html->link("Reset", $base_url);
            echo "</div>";
            echo $this->Form->end();
            ?> 
</div>
     
<?php echo $this->Html->link(__('View Selected'),array('controller'=>'carts','action'=>'view'), array('class' => 'btn btn-sm btn-success view'))?>

<h2><?php echo __('Plugins'); ?></h2>
    
<table class="table table-bordered">
            	<thead>
                     
	<tr>
                    <th><?php echo $this->Paginator->sort('id'); ?></th>
                    <th><?php echo $this->Paginator->sort('name');?></th>
                    <th class="actions"><?php echo __('Actions'); ?>                                       
                    </th>
        </tr>      
	</thead>
	<tbody>
	<?php foreach ($plugintools as $plugintool): ?>
         	<tr>            	
		<td> <?php 
                echo h($plugintool['Plugintool']['id']);   ?> 	
                   </td>
		<td><?php   echo $this->Html->link($plugintool['Plugintool']['name'], array('controller'=>'Plugintools','action'=>'view', $plugintool['Plugintool']['id'])); ?>
                   </td>
                   <td class="actions">
                <div class = "btn-group" role = "group" aria-label="...">         
                   <?php echo $this->Form->create('Cart',array('id'=>'add-form-'.$plugintool['Plugintool']['id'],'url'=>array('controller'=>'carts','action'=>'add1')));  ?>
		<?php echo $this->Form->hidden('plugintool_id',array('value'=>$plugintool['Plugintool']['id']));?> 
		<?php echo $this->Form->submit('Add',array('class'=>'btn-info btn btn-sm'));?> 
		<?php echo $this->Form->end(); ?>  
                  
                </div>
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
	?>	
            </p>
	<div class="paging" align = "right">
	<?php
		echo $this->Paginator->prev('< ' . __('previous '), array(), null, array('class' => ' prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ' '));
		echo $this->Paginator->next(__(' next') . ' >', array(), null, array('class' => ' next disabled'));
	?>
	</div>
        

</div>
<!-- supposed to be used for run class unable to get working//Ignore
 <?php echo $this->Form->create('run',array('controller'=>'runs','action'=>'run'));  ?>
		<?php echo $this->Form->hidden('plugintool_id',array('value'=>$plugintool['Plugintool']['id']));?> 
		<?php echo $this->Form->submit('Run',array('class'=>'btn-success btn btn-sm'));?> 
		<?php echo $this->Form->end(); ?>  
                <?php   echo $this->Html->link('Run', array('controller'=>'Plugintools','action'=>'run', $plugintool['Plugintool']['id'])); ?> 
-->
