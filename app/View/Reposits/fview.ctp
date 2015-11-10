
<div class="row">
	<div class="col-lg-12">
		<ol class="breadcrumb">
			<li><?php echo $this->Html->link('Home','/');?>
			</li>
			<li class="active">Repository view</li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<table class="table">
			<thead>
				<tr>
					<th>Product Name</th>
					<th>functions</th>

				</tr>
			</thead>
			<tbody>
				<?php foreach ($plugintools as $plugintool):?>
				<tr>
					<td><?php echo $plugintool['Plugintool']['name'];?></td>


					<td>

                                            <?php foreach($plugintool['Functionality'] as $func): ?>
                                            <?php echo $func['function_name']."<br/>\n"; ?>
                                            <?php endforeach ?>
                                            <?php echo $fname; ?>
					</td>

					</td>
				</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</div>
</div>