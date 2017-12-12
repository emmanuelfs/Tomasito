$("#ABM").click(function(){
    $.ajax({url: "/Tomasito/content/ABM.txt", success: function(result){
        $("#ajax-info").html(result);
    }});
});
