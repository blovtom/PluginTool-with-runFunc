<div class="navbar navbar-default navbar-fixed-top" role="navigation">
     

<!-- <div class="container">-->
        <div class=" navbar-header">            
            <div class = 'text'>
            <?php echo $this->Html->link(__('WordPress Plugin Tool'),'/',array('class'=>'navbar-brand'));?> 
            </div>
          </div>       
       
          <div class="nav navbar-nav navbar-right top-nav" > 
              <div class="dropdown" >
                    <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Menu
                    <span class="caret"></span>
                    </button>
               <ul class="dropdown-menu message-dropdown" aria-labelledby="dLabel">
                    <li class= "message-preview"><?php echo $this->Html->link(_('Home'), array('controller'=>'homepage','action'=>'index'))?></li>
                    <li><?php echo $this->Html->link(__('Help'),array('controller'=>'users','action'=>'profile'))?></li>
                    <li><?php echo $this->Html->link(__('Plugin Tool'),array('controller'=>'plugintools','action'=>'index'))?></li>
                    <li> <?php echo $this->Html->link('<span ></span> View Selected Plugins <span class="badge" id="cart-counter"></span>',array('controller'=>'carts','action'=>'view'),array('escape'=>false));?>  </li> 
                </ul>
                </div> 
           </div>
          <!--<ul class="nav navbar-nav navbar-right">              
            <li class= "selected"><?php echo $this->Html->link(_('Home'), array('controller'=>'homepage','action'=>'index'))?></li>
            <li><?php echo $this->Html->link(__('Help'),array('controller'=>'users','action'=>'profile'))?></li>
           <li> <?php echo $this->Html->link('<span ></span>  <span class="badge" id="cart-counter"></span>',array('controller'=>'carts','action'=>'view'),array('escape'=>false));?>  </li>        
         
         </ul> -->         
           <!--/.nav-collapse -->

      <!--</div>-->
    
       
</div>
