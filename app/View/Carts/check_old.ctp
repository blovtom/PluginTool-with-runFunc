<div class="row">
	<div class="col-lg-12">
		<ol class="breadcrumb">
			<li><?php echo $this->Html->link('Home','/');?></li>
                        <li><?php echo $this->Html->link (__('Plugintools','/'), array('controller'=>'Plugintools','action'=>'index')); ?></li>
			<li class="active">Cart</li>
		</ol>
	</div>
</div>


<h3><u>Added Plugins</u></h3>    
<table class="table">
        <tr>
<?php foreach($plugintools as $plugintool):?>
<td><?php echo $this->Html->link($plugintool['Plugintool']['name'], array('controller'=>'Plugintools','action'=>'view', $plugintool['Plugintool']['id'])); ?></td>
        </tr>
<?php endforeach;?>
</table>
    
<h4><b><u>Result</u></b></h4>
<p>
    Recommendation: There are no known compatibility issues<br>
    The minimum version of WordPress required with the plugins selected is
    <?php foreach($plugintools as $plugintool): ?>
    <?php  $hold = $plugintool['Plugintool']['requiresAtLeast'];?>
    <?php endforeach ;?>
    <?php echo (max(array($hold))); ?>
</p>

<br>
<br>
<div class="row">
	<div class="col-lg-12">
		<table class="table">
			<thead>
				<tr>
					<th>Function calls Check</th>  
                                        <th>Hook Check</th>
                                        <th>Hook Callbacks</th>
                                        <th>Tag Names</th>
                                       <th> Filter callbacks</th>
                                        <th>Class Name</th>
                                        <th>Method Names</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
                            <?php foreach($duplicates as $dup):?>
                             <?php echo $dup; ?>
                            <?php endforeach;?>
                            <?php  if (null == $duplicates){
                            echo "These Plugins do not call the same function names";
                            }?>
					</td> 
                    <td>
                         <?php foreach($hDuplicates as $hDup):?>
                         <?php  echo $hDup; ?>
                         <?php endforeach;?>
                         <?php  if(null == $hDuplicates){
                         echo "These plugins do not use the same hooks";
                         }?>
					</td>
                                            <td>
                         <?php foreach($hooksDuplicateC as $hDupC):?>
                         <?php  echo $hDupC; ?>
                         <?php endforeach;?>
                         <?php  if(null == $hooksDuplicateC){
                         echo "These plugins do not use the same hook callbacks";
                         }?>
					</td>
                    <td>
                          <?php foreach($fDuplicates as $fDup):?>
                          <?php echo $fDup; ?>
                          <?php endforeach;?>
                          <?php  if(null == $fDuplicates){
                          echo "These plugins do not have the same tag_names";
                           }?>
                    </td> 
                    <td>
                          <?php foreach($filtersC as $fDupC):?>
                          <?php echo $fDupC; ?>
                          <?php endforeach;?>
                          <?php  if(null == $filtersC){
                          echo "These plugins do not have duplicate filter callbacks";
                           }?>
                    </td> 
                    <td>
                           <?php foreach($mDuplicates as $mDup):?>
                           <?php echo $mDup; ?>
                           <?php endforeach;?>
                           <?php  if(null == $mDuplicates){
                           echo "the class names are unique";
                            }?>
					</td> 
                                        <td>
                           <?php foreach($mDuplicateMethod as $mName):?>
                           <?php echo $mName; ?>
                           <?php endforeach;?>
                           <?php  if(null == $mDuplicateMethod){
                           echo "the method names are unique";
                            }?>
                                        </td>
				</tr>                                                             
			</tbody>
		</table>
	</div>
</div>

<div id="result" class ='btn btn-sm btn-success'>
     <h6>Detailed Result</h6>
</div>

<div class = "panel panel-primary">
    <?php foreach ($plugintools as $plugintool): ?> 
    <table class="table table-bordered">
        <div class="panel-heading">
        <h4><b>Plugin Name:</b><?php echo h($plugintool['Plugintool']['name']); ?></h4>
        </div>        
         <thead>
        <h4><?php echo h('Functions'); ?></h4>
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
        <h4><?php echo h('Hooks'); ?></h4>
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
    <?php endforeach; ?>   
</div> 


