$("#ABM").click(function(){
    $.ajax({url: "ABM.txt", success: function(result){
        $("#ajax-info").html(result);
    }});
	$('#ABM').hide();
});
