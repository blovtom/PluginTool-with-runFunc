//script for cart counter
$(document).ready(function(){
	$('#add-form').submit(function(e){
		e.preventDefault();
		var tis = $(this);
		$.post(tis.attr('action'),tis.serialize(),function(data){
			$('#cart-counter').text(data);
		});
	});
});
//script for hiding and showing results
$( document ).ready(function(){
    $(".result1").hide();
            });
$("#result").click(function(){
    $(".panel-primary").toggle();
            });

