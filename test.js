$("#reveal").click(function(){
    $.ajax({url: "home.txt", success: function(result){
        $("#ajax-content").html(result);
    }});
	$('#reveal').hide();
});
