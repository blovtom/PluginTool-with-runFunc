<!--<div class="plugintools view">-->
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><?php echo $this->Html->link('Home','/');?>
            </li>
            <li><?php echo $this->Html->link (__('Plugintools','/'), array('controller'=>'Plugintools','action'=>'index')); ?></li>
            <li class="active"><?php echo ($plugintool['Plugintool']['name']); ?></li>
        </ol>
    </div>
</div>
<h2><?php echo __('Plugin Description'); ?></h2>
	<dl>

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
<table class="table table-bordered">
<table class="table table-bordered">
  <h3 align = "center"><?php echo __('Detailed Plugin Description'); ?></h3>
    <thead>
        <h3><?php echo h('Functions'); ?></h3>
        <tr>			
             <th><?php echo h('Function name'); ?></th>	                       	
         </tr>               
         </thead>               
   <tbody>       
       <?php foreach($plugintool['Functionality'] as $func): ?>        
      <tr>         
    <td><?php echo  $func['function_name']; ?></td>   
      </tr>
        <?php  endforeach ?>         
   </tbody>  
   </table>

<table class="table table-bordered">
        <thead>
        <h3><?php echo h('Hooks'); ?></h3>
         <tr>                        
          <th><?php echo h('Hook Name'); ?></th>	
         </tr>               
         </thead>    
    <tbody>  
         <?php foreach($plugintool['Hook'] as $hook): ?>
        <tr>
         <td> <?php echo ($hook['hook_name']); ?></td>   
         
         </tr>
          <?php  endforeach ?>
     </tbody> 
  </table>

   <table class="table table-bordered">
        <thead>
        <h3><?php echo h('Method'); ?></h3>
         <tr>  
          
          <th><?php echo h('class Name'); ?></th>
          <th><?php echo h('Method Name'); ?></th>	
         </tr>               
         </thead>    
    <tbody>  
         <?php foreach($plugintool['Method'] as $meth): ?>
        <tr>
            <td> <?php echo ($meth['class_name']); ?></td>
         <td> <?php echo ($meth['method_name']); ?></td>    
         </tr>
          <?php  endforeach ?>
     </tbody> 
  </table>
    </table>
    
   <table class="table table-bordered">
        <thead>
        <tr>                        
          <th><?php echo h('Filter'); ?></th>	
         </tr>               
         </thead>    
    <tbody>  
         <?php foreach($plugintool['Filter'] as $filt): ?>
        <tr>
         <td> <?php echo ($filt['tag_name']); ?></td>    
         </tr>
          <?php  endforeach ?>
     </tbody> 
  </table>
</table>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<?php echo $this->Form->create('Cart',array('id'=>'add-form','url'=>array('controller'=>'carts','action'=>'add')));  ?> 
		<?php echo $this->Form->hidden('plugintool_id',array('value'=>$plugintool['Plugintool']['id']))?> 
		<?php echo $this->Form->submit('Add to Tool',array('class'=>'btn-success btn btn-lg'));?> 
		<?php echo $this->Form->end(); ?> 
                
	</ul>
</div>
<script>
$(document).ready(function(){
	$('#add-form').submit(function(e){
		e.preventDefault();
		var tis = $(this);
		$.post(tis.attr('action'),tis.serialize(),function(data){
			$('#cart-counter').text(data);
		});
	});
});
</script>