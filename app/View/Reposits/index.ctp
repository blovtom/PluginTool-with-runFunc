<div class="row">
	<div class="col-lg-12">
		<ol class="breadcrumb">
			<li><?php echo $this->Html->link('Home','/');?>
			</li>
			<li class="active">repository</li>
		</ol>
	</div>
</div>
<h4>Results</h4>

<div class = "plugins">
<p>The database currently holds <b><?php echo count($plugintools); ?></b> plugins and this number is updated with the addition or removal of each plugin  </p>
</div>

<div>
    <ul>
        <li><?php echo $this->Html->link('Functions(function names)', array('action'=>'functionsView'));?></li>
        <li><?php echo $this->Html->link('Filters', array('action'=>'filtersView'));?></li>
        <li><?php echo $this->Html->link('Methods', array('action'=>'methodsView'));?></li>
    </ul>
</div>