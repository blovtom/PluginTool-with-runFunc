<div class="row">
	<div class="col-lg-12">
		<ol class="breadcrumb">
			<li><?php echo $this->Html->link('Home','/');?>
			</li>
			<li class="active">repository</li>
		</ol>
	</div>
</div>
<div class="row" align="left">
	<div class="col-lg-12">

<div class="row">
	<div class="col-lg-12">
		<table class="table">
			<thead>
			<tr>
			<th>Methods (class_names)</th>
			<th>Methods (method_names)</th>

			</tr>
			</thead>

			<tbody>
			<tr>
			<td> <?php  echo count($methodsc)?> </td>
			<td> <?php  echo count($methodsm)?> </td>
			</tr>
			</tbody>
		</table>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<table class="table">
			<thead><tr><th>Duplicate Functions</th></tr></thead>
			<tbody><tr><td></td></tr></tbody>
		</table>
	</div>
</div>