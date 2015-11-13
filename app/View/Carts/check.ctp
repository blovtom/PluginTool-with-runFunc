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
    <?php 
    if ($duplicates == null && $mDuplicates == null && $mDuplicateMethod == null && $hDuplicates == null && $hooksDuplicateC ==null && $fDuplicates == null && $filtersC ==null){
        echo " There seems to be no potential problems and your minimum recommended wordpress version is $hold ";
    }    
    else{
                echo 'There are some potential concerns, please click \'Detailed Result\' for more information.'."<br>";
        if ($hDuplicates != null && $hooksDuplicateC == null){
            echo'There are duplicate hook names but this is not a cause for concern because they do not use the same hook call backs.';
        }
    }
    ?>
    <br>
    The minimum version of WordPress required with the plugins selected is
    <?php foreach($plugintools as $plugintool): ?>
    <?php  $hold = $plugintool['Plugintool']['requiresAtLeast'];?>
    <?php endforeach ;?>
    <?php echo (max(array($hold))); ?>
</p>

<br>
<br>

<div id="result" class ='btn btn-xs btn-info'>
    <h5><b><u>Detailed Result</u></b></h5>
</div>

<div class = "panel panel-primary result1">
    
   <div class ='panel  panel-heading '>
       <h5>Duplicate Function Names</h5>
   </div>
		<table class="table">
			<thead>
				<tr>
			<th>Function calls Check</th>  
                                         
                                        
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
                        

                   
				</tr>                                                             
			</tbody>
		</table>
       <div class ='panel  panel-heading'>
       <h5>Duplicate Hooks</h5>
   </div>
    <table class = 'table table-bordered'>
                <thead>
                <tr>    
                        <th>Hook Check</th>
                        <th>Hook Callbacks</th>
                        
                </tr>
                </thead>
        <tbody>
            <tr>
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
            </tr>
        </tbody>
    </table>
   <div class ='panel  panel-heading'>
       <h5>Duplicate Filters</h5>
   </div>
        <table class = 'table table-bordered' >
            <thead>
        <tr>            
               <th>Tag Names</th>
               <th> Filter callbacks</th>
          
        </tr>
            </thead>
            <tbody>
                <tr>
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
                </tr>
            </tbody>
    </table>
       <div class ='panel  panel-heading'>
       <h5>Duplicate Methods</h5>
   </div>
        <table class = 'table table-bordered'>
            <thead>
        <tr>            
                <th>Class Name</th>
                <th>Method Names</th>
            
        </tr>
            </thead>
            <tbody>
                <tr>
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