$("#reveal").click(function(){
    $.ajax({url: "C:\Users\esantinoli\Documents\Proyecto inventario web\home.txt", success: function(result){
        $("#ajax-content").html(result);
    }});
	$('#reveal').hide();
});
