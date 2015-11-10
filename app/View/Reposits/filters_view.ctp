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
			<th>Filter (tag_names)</th>
			<th>Filter (Distinct tag_names)</th>
			<th>Filter (filter_callback)</th>
			</tr>
			</thead>

			<tbody>
			<tr>
			<td> <?php
		$filt[] =	($filters[0][0]);
		echo $filt[''];
		 ?> </td>
			<td> <?php



			 ?> </td>
			<td> <?php /*echo count($filtersc)*/?> </td>
			</tr>
			</tbody>

		</table>
	</div>
</div>

<!--
<div class="row">
	<div class="col-lg-12">
		<table class="table">
			<thead>
			<tr>
			<th>Duplicate tag_names</th>
			</tr>
			</thead>

			<tbody>
<?php foreach($filters as $filter): ?>
			<tr>
			<?php
			$ftag = $filter;
			if (isset($filter[$ftag])){
	 	$fduplicates = $ftag;

	        }
			else{
			$filter = $ftag;
		    }
		     echo count($fduplicates);

			?>
			</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>
<table class="table_filter_callback">
        			<thead>
        			<tr>
        			<th>Duplicate filter_callbacks</th>
        			</tr>
        			</thead>

        			<tbody>
        <?php foreach($filtersc as $filter): ?>
        			<tr>
        			<?php
        			$ftag = $filter;
        			if (isset($filter[$ftag])){
        		$fduplicates = $ftag;
           			}
        			else{
        			$filter = $ftag;
        		    }
        			?>
        			</tr>
        			<?php endforeach; ?>
        			</tbody>
        		</table>
-->