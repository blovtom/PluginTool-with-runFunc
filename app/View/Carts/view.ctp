<div class="row">
	<div class="col-lg-12">
		<ol class="breadcrumb">
			<li><?php echo $this->Html->link('Home','/');?>
			</li>
                        <li><?php echo $this->Html->link (__('Plugintools','/'), array('controller'=>'Plugintools','action'=>'index')); ?></li>
			<li class="active">Cart</li>
		</ol>
	</div>
</div>


<div class="row">
	<div class="col-lg-12">
		<table class="table">
			<thead>
				<tr>
					<th>Plugin Name</th>                                        				
				</tr>
			</thead>
			<tbody>
				<?php $total=0;?>
				<?php foreach ($plugintools as $plugintool):?>
				<tr>    
					<td><?php echo $this->Html->link($plugintool['Plugintool']['name'], array('controller'=>'Plugintools','action'=>'view', $plugintool['Plugintool']['id'])); ?></td>
				</tr>
				<?php endforeach;?>
			</tbody>
		</table>
            <p >
                         
             </P>

	</div>
</div>
             <div class = "btn-group" role = "group" aria-label="...">                
             
 <?php if (null != $carts){
     echo $this->Html->link(__('Run Tool'),array('controller'=>'carts','action'=>'check'), array('class' => 'btn btn-sm btn-success'));
     echo $this->Html->link(__('Clear Plugins'),array('controller'=>'carts','action'=>'clear'), array('class' => 'btn btn-sm btn-warning'));
  }?>                
                    <?php if (null == $carts){
                 echo $this->Html->link(__('Add Plugins'),array('controller'=>'Plugintools','action'=>'index'), array('class' => 'btn btn-sm btn-primary'));}?>
             </div>
