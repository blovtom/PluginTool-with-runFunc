<?php ini_set('max_execution_time', 300); //300 seconds = 5 minutes ?>
<div class="row">
	<div class="col-lg-12">
		<ol class="breadcrumb">
			<li><?php echo $this->Html->link('Home','/');?>
			</li>
                        <li><?php echo $this->Html->link (__('Plugintools','/'), array('controller'=>'Plugintools','action'=>'index')); ?></li>
			<li class="active">Run</li>
		</ol>
	</div>
</div>
    <p><?php echo $selectedPlugins['Plugintool']['name']; ?></p>
    <p><?php
                
    
            ?>
                <?php 
                //var_dump($val);
                //var_dump($functionList);
             
               
                              foreach ($selectedPlugins['Functionality'] as $selectedPlugin){                   
                             $sel =   $selectedPlugin['function_name'];

                             }
                             
                            //  var_dump($sel);
                     
                              
              
              
              //  var_dump($val);
               ?>
        <?php  
                      
                          
                          
                                     
                                 
                             
                   ?>
    </p>
    <div>

        
        
        
        
    </div>
