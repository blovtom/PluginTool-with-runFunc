//script for cart counter
$(document).ready(function(){
	$('[id^=add-form]').submit(function(e){
		e.preventDefault();
		var tis = $(this);
		$.post(tis.attr('action'),tis.serialize(),function(data){
			$('#cart-counter').text(data);
		});
	});
});
//script for hiding and showing results
$( document ).ready(function(){
    $(".panel-primary ").hide();
            });
$("#result").click(function(){
    $(".panel-primary").toggle();
            });

