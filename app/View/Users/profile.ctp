<!DOCTYPE html>
<html>

<h2>Tool Description</h2><br>

<p align ="center">This tool extracts info from WordPress plugins <br>
The purpose is to help avoid Potential Plugin Conflicts<br>
The Database currently holds more than 5000 wordpress plugins.<br>
It has been categorized into different sections to help with navigation<br>
</p>

<br>
<br>


<body>
<b>Functions:</b>This area runs selected Plugins and their Function calls for potential plugin conflicts. <br>
It verifies that each function call is unique.<br><br>

<b>Hooks:</b> Hooks are provided by WordPress to allow a Plugin to "hook into" the rest of WordPress; They call functions in a plugin<br>
at a specific time and set plugins in motion. Two kinds of hooks are Actions and Filters.<br><br>

<b>Filter:</b> Filter is a function that is associated with an existing Action by specifying any existing hook. Filters are functions that<br>
WordPress passes data through at certain points in execution.<br>


<br><br><br>
<?php echo $this->Html->link(__('Return Home'), array('controller'=> 'homepage', 'action' => 'index')); ?>

</body>
</html>